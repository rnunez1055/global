<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Equipos extends CI_Controller {



    function __construct() {

        parent::__construct();

        $this->_validaracceso();

        $this->load->model('maestros/equipos_model');

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

        $data['titulo'] = 'Gestión de Equipos - GLOBAL SUPPLIER S&P SAC::..';

        $data['titulo_pagina'] = 'Gestión de Equipos';

        $data['contenido'] = 'maestros/equipos/panel_view';        

        $this->load->view('plantilla/master_view', $data);



    }



    function consultar() {

        $data['LstEntidad'] = $this->equipos_model->m_consultar(-1,-1);

        $this->load->view('maestros/equipos/listar_view', $data);

    }



    function ver() {

        $data['LstTipoUsuario_u'] = $this->tipousuario_model->m_consultar(-1,1);        

        $equipo_id = $_POST['equipo_id'];       

        $data['Entidad'] = $this->equipos_model->m_ver($equipo_id,-1);

        $this->load->view('maestros/equipos/actualizar_view', $data);

    }



    function guardar(){

        $cbotipousuario = trim($_POST['cbotipousuario']);

        $txtcodigo_equipo = trim($_POST['txtcodigo_equipo']);
        
        $txtplaca_equipo = trim($_POST['txtplaca_equipo']);
        
        $txttipo_equipo = trim($_POST['txttipo_equipo']);
        
        $txtmarcamodelo_equipo = trim($_POST['txtmarcamodelo_equipo']);
        
        $txtnroserie_equipo = trim($_POST['txtnroserie_equipo']);
        
        $txtcapacidad_equipo = trim($_POST['txtcapacidad_equipo']);
        
        $txtempresatitular_equipo = trim($_POST['txtempresatitular_equipo']);

        $txtcontrasena = "123456";
        
        $txtobservaciones_equipo = trim($_POST['txtobservaciones_equipo']);

        $resultado = $this->equipos_model->m_guardar($cbotipousuario,$txtcodigo_equipo,$txtplaca_equipo,$txttipo_equipo, $txtmarcamodelo_equipo, $txtnroserie_equipo, $txtcapacidad_equipo, $txtempresatitular_equipo, $txtcontrasena, $txtobservaciones_equipo, 1);
        
        echo $resultado;

    }



    function eliminar(){

        $txtequipo_id = $_POST['equipo_id'];        

        $data['Entidad'] = $this->equipos_model->m_eliminar($txtequipo_id);

        $this->load->view('maestros/equipos/panel_view', $data);

    }
    
    function clave(){



        $equipo_id = $_POST['equipo_id'];

       

        $data['Entidad'] = $this->equipos_model->m_ver($equipo_id,-1);

        $this->load->view('maestros/equipos/actualizarclave_view', $data);



    }
    

    // function vercerti(){



    //     $usuario_id = $_POST['usuario_id'];

       

    //     $data['Entidad'] = $this->usuario_model->m_ver($usuario_id,-1);

    //     $this->load->view('maestros/usuario/nuevo_certificado', $data);



    // }

    

    function actualizarclave(){ 

        $txtequipo_id = trim($_POST['txtequipo_id']);       

        $txtclave_u = trim($_POST['txtcontrasena_u']);       

              

        $resultado = $this->equipos_model->m_actualizarclave($txtequipo_id,$txtclave_u);

        echo $resultado;//$resultado['msg'];

    }

    

    function actualizar(){
        
        $ruta="";

        $txtEquipo_id = trim($_POST['txtEquipo_id']);
        
        $txtplaca_equipo_u = trim($_POST['txtplaca_equipo_u']);
        
        $txttipo_equipo_u = trim($_POST['txttipo_equipo_u']);
        
        $txtmarcamodelo_equipo_u = trim($_POST['txtmarcamodelo_equipo_u']);
        
        $txtnroserie_equipo_u = trim($_POST['txtnroserie_equipo_u']);
        
        $txtcapacidad_equipo_u = trim($_POST['txtcapacidad_equipo_u']);
        
        $txtempresatitular_equipo_u = trim($_POST['txtempresatitular_equipo_u']);
        
        $txtobservaciones_equipo_u = trim($_POST['txtobservaciones_equipo_u']);
        
        $cbotipousuario_u = trim($_POST['cbotipousuario_u']);
        
        $txtruta_u = $_POST['txtruta_u'];

        /*if (empty($_POST['chkestado_u'])){

            $chkestado = 0;

        }else{

            $chkestado = 1;

        }*/
        if(!empty($_FILES['userFiles_u']['name'])){

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

                    $resultado = $this->equipos_model->m_actualizar($txtEquipo_id, $txtplaca_equipo_u, $txttipo_equipo_u, $txtmarcamodelo_equipo_u, $txtnroserie_equipo_u, $txtcapacidad_equipo_u, $txtempresatitular_equipo_u, $cbotipousuario_u, 1, $ruta,$txtobservaciones_equipo_u);

                }

            } 

        }

        if($ruta == ""){

            $ruta = $txtruta_u;

            $resultado = $this->equipos_model->m_actualizar($txtEquipo_id, $txtplaca_equipo_u, $txttipo_equipo_u, $txtmarcamodelo_equipo_u, $txtnroserie_equipo_u, $txtcapacidad_equipo_u, $txtempresatitular_equipo_u, $cbotipousuario_u, 1, $ruta, $txtobservaciones_equipo_u);

        }

        echo json_encode($resultado);

        // $resultado = $this->usuario_model->m_actualizar($txtusuario_id, $txtnombre_u, $cbotipousuario_u, $txtemail_u, $txtcelular_u, $chkestado);

        // echo $resultado;//$resultado['msg'];

    }

}