$(function() {

    $("#formCertificado_e").submit(function(e){

        e.preventDefault();

        var formData = new FormData($("#formCertificado_e")[0]);

        $.ajax({

            url : 'certificado/actualizar',

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

                $("#formCertificado_e")[0].reset();
            }

        });

    });
});

function buscar() {
    //msgLoading("#mostrar_lista");
    $.ajax({
        type: "POST",
        url: "certificado/consultar_equipos",
        cache: false,
        success: function(data) {
            $("#mostrar_lista").html(data);            
            var url = "certificado"; 
            $(location).attr('href',url);            
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