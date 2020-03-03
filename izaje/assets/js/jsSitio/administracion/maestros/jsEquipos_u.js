$(function() {

    $("#frmEquipos_u").submit(function(e){

        e.preventDefault();

        var formData = new FormData($("#frmEquipos_u")[0]);

        $.ajax({

            url : 'equipos/actualizar',

            // dataType : 'json',

            type : 'POST',

            data : formData,

            contentType : false,

            processData : false,

            success: function(data) { 

                showSuccessToast('Datos ingresados correctamente.');

                buscar();                  

            },

            error: function(data){

                showWarningToast('Error! Cominiquese con el Administrador.');

                $("#frmEquipos_u")[0].reset();
            }

        });

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
            console.log(error);
        }
    });
}