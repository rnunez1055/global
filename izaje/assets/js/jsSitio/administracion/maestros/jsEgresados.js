$(function(){
    
    //buscar();

    $("#frmBuscar").validate({			
        submitHandler: function(){
            
            var txtbuscar = $("#txtbuscar").val();            
            buscar(txtbuscar);
            
    },            
    rules: {
        txtbuscar: {
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


function buscar(txtbuscar) {
    //msgLoading("#mostrar_lista");
    $.ajax({
        type: "POST",
        url: "egresados/consultar",
        cache: false,
        data: {
            txtbuscar: txtbuscar
        },
        success: function(data) {
            $("#mostrar_lista").html(data);
        },
        error: function(error) {
            alert("Ha ocurrido un error, vuelva a intentarlo.");
            console.log(error);
        }
    });
}
