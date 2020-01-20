<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Usuario extends CI_Controller {



    function __construct() {

        parent::__construct();

        $this->_validaracceso();

        $this->load->model('maestros/usuario_model');

        $this->load->model('maestros/tipousuario_model');

    }



    function _validaracceso() {

        $logeado = $this->session->userdata('logeado');

        $nidusuario = $this->session->userdata('usuario_di');

        $TipoUsuario_di = $this->session->userdata('TipoUsuario_di');

        

        if ($logeado != true OR $nidusuario = null) {

            if ($TipoUsuario_di==2 OR $TipoUsuario_di==3){

                redirect(URL_INICIO);    

            }

        }

    }



    function index() {

        $data['LstTipoUsuario'] = $this->tipousuario_model->m_consultar(-1,1);

        $data['titulo'] = 'Gestión de Usuarios - GLOBAL SUPPLIER S&P SAC::..';

        $data['titulo_pagina'] = 'Gestión de Usuarios';

        $data['contenido'] = 'maestros/usuario/panel_view';        

        $this->load->view('plantilla/master_view', $data);



    }



    function consultar() {



        $data['LstEntidad'] = $this->usuario_model->m_consultar(-1,-1);

        $this->load->view('maestros/usuario/listar_view', $data);

    }



    function ver() {

        $data['LstTipoUsuario_u'] = $this->tipousuario_model->m_consultar(-1,1);        

        $usuario_id = $_POST['usuario_id'];       

        $data['Entidad'] = $this->usuario_model->m_ver($usuario_id,-1);

        $this->load->view('maestros/usuario/actualizar_view', $data);

    }



    function guardar(){

        $cbotipousuario = trim($_POST['cbotipousuario']);

        $txtusuario = trim($_POST['txtusuario']);

        $txtcodigo_alumno = trim($_POST['txtcodigo_alumno']);

        $txtdni = trim($_POST['txtdni']);
        
        $txtempresatitular = trim($_POST['txtempresatitular']);

        $txtcontrasena = "123456";

        $resultado = $this->usuario_model->m_guardar($cbotipousuario,$txtusuario,$txtcodigo_alumno,$txtdni, $txtempresatitular, $txtcontrasena,1);

        echo $resultado;
        
    }



    function eliminar(){

        $txtusuario_id = $_POST['usuario_id'];        

        $data['Entidad'] = $this->usuario_model->m_eliminar($txtusuario_id);

        $this->load->view('maestros/usuario/panel_view', $data);

    }

    

    function clave(){



        $usuario_id = $_POST['usuario_id'];

       

        $data['Entidad'] = $this->usuario_model->m_ver($usuario_id,-1);

        $this->load->view('maestros/usuario/actualizarclave_view', $data);



    }

    // function vercerti(){



    //     $usuario_id = $_POST['usuario_id'];

       

    //     $data['Entidad'] = $this->usuario_model->m_ver($usuario_id,-1);

    //     $this->load->view('maestros/usuario/nuevo_certificado', $data);



    // }

    

    function actualizarclave(){

 

        $txtusuario_id = trim($_POST['txtUsuario_id']);       

        $txtclave_u = trim($_POST['txtcontrasena_u']);       

              

        $resultado = $this->usuario_model->m_actualizarclave($txtusuario_id,$txtclave_u);

        echo $resultado;

    }

    

    function actualizar(){
        //$ruta="";

        $txtusuario_id = trim($_POST['txtUsuario_id']); 

        $txtnombre_u = trim($_POST['txtnombre_u']);

        $txtdni_u = trim($_POST['txtdni_u']);
        
        $txtempresatitular_u = trim($_POST['txtempresatitular_u']);

        $cbotipousuario_u = trim($_POST['cbotipousuario_u']);
        
        //$txtruta_u = $_POST['txtruta_u'];

        /*if (empty($_POST['chkestado_u'])){

            $chkestado = 0;

        }else{

            $chkestado = 1;

        }*/
        /*if(!empty($_FILES['userFiles_u']['name'])){

            $filesCount = count($_FILES['userFiles_u']['name']);

            for($i = 0; $i < $filesCount; $i++){

                $_FILES['userFile']['name'] = $_FILES['userFiles_u']['name'][$i];

                $_FILES['userFile']['type'] = $_FILES['userFiles_u']['type'][$i];

                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles_u']['tmp_name'][$i];

                $_FILES['userFile']['error'] = $_FILES['userFiles_u']['error'][$i];

                $_FILES['userFile']['size'] = $_FILES['userFiles_u']['size'][$i];

                $uploadPath = 'uploads/users';

                $renombrar = md5(time().$_FILES["userFiles_u"]['name'][$i]);

                $archivo = pathinfo($_FILES["userFiles_u"]['name'][$i]);

                $extension = $archivo['extension'];

                $config['file_name'] = $renombrar;

                $config['upload_path'] = "./".$uploadPath;

                $config['allowed_types'] = 'png|jpg';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                if($this->upload->do_upload('userFile')){

                    $fileData = $this->upload->data();

                    $uploadData[$i]['file_name'] = $fileData['file_name'];

                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");

                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");

                    $ruta = URL_INICIO ."uploads/users/".$renombrar.".".$extension;   

                    $resultado = $this->usuario_model->m_actualizar($txtusuario_id, $txtnombre_u, $txtdni_u, $txtempresatitular_u, $cbotipousuario_u, $txtemail_u, $txtcelular_u, $chkestado, $ruta);

                }

            } 

        }*/

        //if($ruta == ""){

            //$ruta = $txtruta_u;

            //$resultado = $this->usuario_model->m_actualizar($txtusuario_id, $txtnombre_u, $txtdni_u, $txtempresatitular_u,  $cbotipousuario_u, $txtemail_u, $txtcelular_u, $chkestado, $ruta);
        
            $resultado = $this->usuario_model->m_actualizar($txtusuario_id, $txtnombre_u, $txtdni_u, $txtempresatitular_u, $cbotipousuario_u, 1);

        //}

        echo json_encode($resultado);

        // $resultado = $this->usuario_model->m_actualizar($txtusuario_id, $txtnombre_u, $cbotipousuario_u, $txtemail_u, $txtcelular_u, $chkestado);

        // echo $resultado;//$resultado['msg'];

    }

}