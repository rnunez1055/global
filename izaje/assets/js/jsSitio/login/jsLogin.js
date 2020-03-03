$(function(){
    
    $("#frmlogin").validate({			
        submitHandler: function(form){
            $.ajax({
                type: "POST",
                url: "inicio/validardatos",
                data: $(form).serialize(),
                success: function(data){
                    console.log(data);                        
                        switch (data) {
                        case '0':
                            $('#mensaje').html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Error!</strong> Valide sus credenciales.</div>');
                            break;
                        case '1':
                            $('#mensaje').html('<div class="alert alert-success alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Listo!</strong> Bienvenido al Sistema.</div>');
                            administracion();
                        }
            },
            error: function(data){
                $('#mensaje').html('<div class="alert alert-block alert-danger fade in"><button data-dismiss="alert" class="close close-sm" type="button"><i class="fa fa-times"></i></button><strong>Error!</strong> Valide sus credenciales.</div>');
            }
            });
    },            
    rules: {
        txtusuario: {
            required: true
        },
        txtcontrasena: {
            required: true
        }
    },
    errorPlacement: function(label, element) {
        label.addClass('mt-2 text-danger');
        label.insertAfter(element);
      },
    highlight: function(element, errorClass) {
        $(element).parent().addClass('has-danger')
        $(element).addClass('form-control-danger')
      }
    });    
	
});

function administracion(){
    location.href = "maestros/usuario";
}