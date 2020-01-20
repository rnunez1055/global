$(function(){
    $("#frmEquipos_u").validate({			
        submitHandler: function(form){
            $.ajax({
                type: "POST",
                url: "equipos/actualizarclave",
                data: $(form).serialize(),
                success: function(data){
                        switch (data) {
                        case '0':
                            showWarningToast('Los datos ya fueron ingresados.');                            
                            break;
                        case '1':
                            showSuccessToast('Datos ingresados correctamente.');
                            buscar();
                            break;
                        }
                        $("#frmEquipos_u")[0].reset();
            },
            error: function(data){
                showWarningToast('Error! Cominiquese con el Administrador.');
            }
            });
    },            
    rules: {        
        txtcontrasena_u: {
            required: true
        }
    },
    errorPlacement: function(label, element) {
        label.addClass('mt-2 text-danger');
        label.insertAfter(element);
      },
    highlight: function(element, errorClass) {
        $(element).parent().addClass('has-danger');
        $(element).addClass('form-control-danger');
      }
    });
    	
});

function buscar() {
    //msgLoading("#mostrar_lista");
    $.ajax({
        type: "POST",
        url: "equipos/consultar",
        cache: false,
        success: function(data) {
            $("#mostrar_lista").html(data);
        },
        error: function(error) {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
            console.log(error);
        }
    });
}

function administracion(){
    location.href = "administracion/inicio";
}