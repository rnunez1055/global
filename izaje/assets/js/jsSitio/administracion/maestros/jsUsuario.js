$(function(){
    
    buscar();

    $("#frmUsuario").validate({			
        submitHandler: function(form){
            $.ajax({
                type: "POST",
                url: "usuario/guardar",
                data: $(form).serialize(),
                success: function(data){
                    
                    resultado = data;

                   if(resultado==0){
                        showDangerToast('El usuario ya fue registrado');
                    }else {
                        showSuccessToast('Datos ingresados correctamente.');
                        $("#frmUsuario")[0].reset();
                        buscar();
                    }
                    console.log(resultado);
            },
            error: function(data){
                showWarningToast('Error! Cominiquese con el Administrador.');
            }
            });
    },            
    rules: {
        cbotipousuario: {
            required: true
        },
        txtcodigo_alumno: {
            required: true,
            maxlength: 10
        },
        txtusuario: {
            required: true,
            maxlength: 100
        },
        txtdni: {
            required: true,
            maxlength: 8
        },
        txtempresatitular: {
            required: true,
            maxlength: 200
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
        url: "usuario/consultar",
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

function ver(usuario_id) {
    //msgLoading("#mostrar_qry");
    if (confirm('Esta seguro de editar este registro?')) {
        $.ajax({
            type: "POST",
            url: "usuario/ver",
            cache: false,
            data: {
                usuario_id: usuario_id
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

function eliminarusuario(usuario_id) {
    //msgLoading("#mostrar_qry");
    if (confirm('Esta seguro de eliminar este registro?')) {
        $.ajax({
            type: "POST",
            url: "usuario/eliminar",
            cache: false,
            data: {
                usuario_id: usuario_id
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

function clave(usuario_id) {
    //msgLoading("#mostrar_qry");
    if (confirm('Esta seguro de actualizar clave de este registro?')) {
        $.ajax({
            type: "POST",
            url: "usuario/clave",
            cache: false,
            data: {
                usuario_id: usuario_id
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