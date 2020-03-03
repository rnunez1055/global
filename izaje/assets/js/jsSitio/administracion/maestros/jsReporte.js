$(function() {

    buscar();

    $("#frmCertificado").submit(function(e){
        
        if((rValue_m=="alumno") && (document.getElementById("cbousuario").value==0)){
            
            showDangerToast('DEBES DE ESCOGER UN ALUMNO');
            
        }else if((rValue_m=="equipo") && (document.getElementById("cboequipo").value==0)){
            
            showDangerToast('DEBES DE ESCOGER UNA PLACA');
            
        }else if((rValue_m=="serie") && (document.getElementById("cboequipo_serie").value==0)){
            
            showDangerToast('DEBES DE ESCOGER UNA SERIE');
            
        }else{
            
            
            e.preventDefault();

            var formData = new FormData($("#frmCertificado")[0]);

            $.ajax({

                url : 'certificado/guardar',

                dataType : 'json',

                type : 'POST',

                data : formData,

                contentType : false,

                processData : false,

                success: function(data) {

                   resultado = data;

                   if(resultado==0){
                        showDangerToast('EL CÓDIGO DE CERTIFICADO YA FUE INGRESADO');              
                    }else{
                        //$("#frmCertificado")[0].reset();
                        reset_0();
                        showSuccessToast('Datos ingresados correctamente.');
                        buscar();
                    }

                },
                error: function(data){

                    showDangerToast('Error! Cominiquese con el Administrador.');

                }

            });
            
            
        }
    });

});

function buscar() {
    //msgLoading("#mostrar_lista");
    $.ajax({
        type: "POST",
        url: "reporte/consultar",
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

function buscar_equipos() {
    //msgLoading("#mostrar_lista");
    $.ajax({
        type: "POST",
        url: "reporte/consultar_equipos",
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

function ver(certificado_id) {
    //msgLoading("#mostrar_qry");
    if (confirm('Esta seguro de editar este registro?')) {
        $.ajax({
            type: "POST",
            url: "reporte/ver",
            cache: false,
            data: {
                certificado_id: certificado_id
            },
            success: function(data) {
                $("#mostrar_lista").html(data);
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}

function ver_equipos_certificados(certificado_id) {
    //msgLoading("#mostrar_qry");
    if (confirm('Esta seguro de editar este registro?')) {
        $.ajax({
            type: "POST",
            url: "reporte/ver_equipos_certificados",
            cache: false,
            data: {
                certificado_id: certificado_id
            },
            success: function(data) {
                $("#mostrar_lista").html(data);
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}


function administracion(){
    location.href = "administracion/inicio";
}

var rValue_m="";











