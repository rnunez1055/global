$(function(){
    
    buscar();

    $("#frmEquipos").validate({			
        submitHandler: function(form){
            $.ajax({
                type: "POST",
                url: "equipos/guardar",
                data: $(form).serialize(),
                success: function(data){
                    
                    resultado = data;

                   if(resultado==0){
                        showDangerToast('El equipo ya fue registrado');
                    }else {
                        showSuccessToast('Datos ingresados correctamente.');
                        $("#frmEquipos")[0].reset();
                        buscar();
                    }
                    console.log(resultado);
            },
                
            error: function(data){

                    showDangerToast('Error! Cominiquese con el Administrador.');

                }
                
            });
    },            
    rules: {
        cbotipousuario: {
            required: true
        },
        txtcodigo_equipo: {
            required: true,
            maxlength: 10
        },
        txtplaca_equipo: {
            required: true,
            maxlength: 20
        },
        txttipo_equipo: {
            required: true,
            maxlength: 100
        },
        txtmarcamodelo_equipo: {
            required: true,
            maxlength: 100
        },
        txtnroserie_equipo: {
            required: true,
            maxlength: 20
        },
        txtcapacidad_equipo: {
            maxlength: 20
        },
        txtempresatitular_equipo: {
            maxlength: 100
        }
    }
    /*errorPlacement: function(label, element) {
        label.addClass('mt-2 text-danger');
        label.insertAfter(element);
      },
    highlight: function(element, errorClass) {
        $(element).parent().addClass('has-danger');
        $(element).addClass('form-control-danger');
      }*/
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

function ver(equipo_id) {
    //msgLoading("#mostrar_qry");
    if (confirm('Esta seguro de editar este registro?')) {
        $.ajax({
            type: "POST",
            url: "equipos/ver",
            cache: false,
            data: {
                equipo_id: equipo_id
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

function eliminar(equipo_id) {
    //msgLoading("#mostrar_qry");
    if (confirm('Esta seguro de eliminar este registro?')) {
        $.ajax({
            type: "POST",
            url: "equipos/eliminar",
            cache: false,
            data: {
                equipo_id: equipo_id
            },
            success: function(data) {
                showSuccessToast('Los datos fueron eliminados.');

                $("#mostrar_lista").html(data);
            },
            error: function() {
                alert("Ha ocurrido un error, vuelva a intentarlo.");
            }
        });
    }
}

function clave(equipo_id) {
    //msgLoading("#mostrar_qry");
    if (confirm('Esta seguro de actualizar clave de este registro?')) {
        $.ajax({
            type: "POST",
            url: "equipos/clave",
            cache: false,
            data: {
                equipo_id: equipo_id
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

// function certificado(usuario_id) {
//     //msgLoading("#mostrar_qry");
//     if (confirm('Agregar Nuevo Certificado?')) {
//         $.ajax({
//             type: "POST",
//             url: "usuario/vercerti",
//             cache: false,
//             data: {
//                 usuario_id: usuario_id
//             },
//             success: function(data) {
//                 $("#mostrar_lista").html(data);
//             },
//             error: function() {
//                 alert("Ha ocurrido un error, vuelva a intentarlo.");
//             }
//         });
//     }
// }
function administracion(){
    location.href = "administracion/inicio";
}