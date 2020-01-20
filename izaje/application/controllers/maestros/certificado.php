<?php

if (!defined('BASEPATH'))

    exit('No direct script access allowed');

class Certificado extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->_validaracceso();

        $this->load->model('maestros/usuario_model');

        $this->load->model('maestros/tipousuario_model');

        $this->load->model('maestros/certificado_model');

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

        $data['LstEquipo'] = $this->certificado_model->m_consultarequ(-1,1);
        
        $data['LstUsuario'] = $this->certificado_model->m_consultarusu(-1,1);

        $data['titulo'] = 'Gestión de Certificados - GLOBAL SUPPLIER S&P SAC ::..';

        $data['titulo_pagina'] = 'Gestión de Certificados';

        $data['contenido'] = 'maestros/certificado/panel_view';

        $this->load->view('plantilla/master_view', $data);

    }
    
    function consultar() {
        
        $data['LstUsuario'] = $this->certificado_model->m_consultarusu(-1,1);

        $data['LstEntidad'] = $this->certificado_model->m_consultar(-1,-1);

        $this->load->view('maestros/certificado/listar_view', $data);

    }
    
    function consultar_equipos() {
        
        $data['LstEquipo'] = $this->certificado_model->m_consultarequ(-1,1);

        $data['LstEntidad'] = $this->certificado_model->m_consultar_equipos(-1,-1);

        $this->load->view('maestros/certificado/listar_view_equipos', $data);

    }

    function ver() {

        $data['LstUsuario'] = $this->certificado_model->m_consultarusu(-1,1);

        $certificado_id = $_POST['certificado_id'];

        $data['Entidad'] = $this->certificado_model->m_ver($certificado_id,-1);

        $this->load->view('maestros/certificado/actualizar_view', $data);

    }
    
    function ver_equipos_certificados() {

        $data['LstEquipo'] = $this->certificado_model->m_consultarequ(-1,1);

        $certificado_id = $_POST['certificado_id'];

        $data['Entidad'] = $this->certificado_model->m_ver_equipos($certificado_id,-1);

        $this->load->view('maestros/certificado/actualizar_view_equipos', $data);

    }

    function guardar(){

        if(empty($_POST['cboequipo'])){
            $cboequipo = trim($_POST['cboequipo_serie']);
        }else{
            $cboequipo = trim($_POST['cboequipo']);
        }       
        
        $cbousuario = trim($_POST['cbousuario']);

        $txtcertificado = trim($_POST['txtcertificado']);

        $txtcodigo_certificado = trim($_POST['txtcodigo_certificado']);
        
        $txtcalificacion_certificado = trim($_POST['txtcalificacion_certificado']);
        
        $txtfechaemision_certificado = trim($_POST['txtfechaemision_certificado']);
        
        //$txtfechavencimiento_certificado = trim($_POST['txtfechavencimiento_certificado']);
        
        //if (empty($_POST['chkestado'])){

            //$chkestado = 0;

        //}else{

            //$chkestado = 1;

        //}
        
        /*

        if(!empty($_FILES['userFiles']['name'])){

            $filesCount = count($_FILES['userFiles']['name']);

            for($i = 0; $i < $filesCount; $i++){

                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = 'uploads/files';
                $renombrar = md5(time().$_FILES["userFiles"]['name'][$i]);
                $archivo = pathinfo($_FILES["userFiles"]['name'][$i]);

                $extension = $archivo['extension'];

                $config['file_name'] = $renombrar;
                $config['upload_path'] = "./".$uploadPath;
                $config['allowed_types'] = 'pdf';


                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");

                    $ruta = URL_INICIO ."uploads/files/".$renombrar.".".$extension;            

                    $resultado = $this->certificado_model->m_guardar($cbousuario, $txtcertificado, $txtcodigo_certificado, $txtcalificacion_certificado, $txtfechaemision_certificado, $txtfechavencimiento_certificado, $ruta);

                    echo $resultado;                    

                }

            }

        }
        
        */
        
        $resultado = $this->certificado_model->m_guardar($cboequipo, $cbousuario, $txtcertificado, $txtcodigo_certificado, $txtcalificacion_certificado, $txtfechaemision_certificado, 1);

        echo $resultado;
        

    }
    
  
    function actualizar(){

        //$ruta ="";

        $txtcertificado_id = $_POST['txtcertificado_id'];

        //$txtcertificado_u = $_POST['txtcertificado_u'];

        //$txtcodigo_certificado_u = $_POST['txtcodigo_certificado_u'];
        
        $txtcalificacion_certificado_u = $_POST['txtcalificacion_certificado_u'];
        
        $txtfechaemision_certificado_u = trim($_POST['txtfechaemision_certificado_u']);
        
        //$txtfechavencimiento_certificado_u = trim($_POST['txtfechavencimiento_certificado_u']);
        
        //if (empty($_POST['chkestado_u'])){

            //$chkestado = 0;

        //}else{

            //$chkestado = 1;

        //}

        /*$txtruta_u = $_POST['txtruta_u'];

        if(!empty($_FILES['userFiles_u']['name'])){

            $filesCount = count($_FILES['userFiles_u']['name']);

            for($i = 0; $i < $filesCount; $i++){

                $_FILES['userFile']['name'] = $_FILES['userFiles_u']['name'][$i];

                $_FILES['userFile']['type'] = $_FILES['userFiles_u']['type'][$i];

                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles_u']['tmp_name'][$i];

                $_FILES['userFile']['error'] = $_FILES['userFiles_u']['error'][$i];

                $_FILES['userFile']['size'] = $_FILES['userFiles_u']['size'][$i];

                $uploadPath = 'uploads/files';

                $renombrar = md5(time().$_FILES["userFiles_u"]['name'][$i]);

                $archivo = pathinfo($_FILES["userFiles_u"]['name'][$i]);

                $extension = $archivo['extension'];

                $config['file_name'] = $renombrar;

                $config['upload_path'] = "./".$uploadPath;

                $config['allowed_types'] = 'pdf';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                if($this->upload->do_upload('userFile')){

                    $fileData = $this->upload->data();

                    $uploadData[$i]['file_name'] = $fileData['file_name'];

                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");

                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");

                    $ruta = URL_INICIO ."uploads/files/".$renombrar.".".$extension;   

                    $resultado = $this->certificado_model->m_actualizar($txtcertificado_id, $txtcodigo_certificado_u, $txtcertificado_u, $txtcalificacion_certificado_u, $txtfechaemision_certificado_u, $txtfechavencimiento_certificado_u, $ruta);

                }

            } 

        }

        if($ruta == ""){

            $ruta = $txtruta_u;

            $resultado = $this->certificado_model->m_actualizar($txtcertificado_id, $txtcodigo_certificado_u, $txtcertificado_u, $txtcalificacion_certificado_u, $txtfechaemision_certificado_u, $txtfechavencimiento_certificado_u, $ruta);

        }*/
        
        //$resultado = $this->certificado_model->m_actualizar($txtcertificado_id, $txtcodigo_certificado_u, $txtcertificado_u, $txtcalificacion_certificado_u, $txtfechaemision_certificado_u, $txtfechavencimiento_certificado_u, $chkestado);
        
        $resultado = $this->certificado_model->m_actualizar($txtcertificado_id, $txtcalificacion_certificado_u, $txtfechaemision_certificado_u, 1);

        echo json_encode($resultado);

    }

    function eliminar(){

        $certificado_id = $_POST['certificado_id'];

        $data['Entidad'] = $this->certificado_model->m_eliminar($certificado_id);

        $this->load->view('maestros/certificado/panel_view', $data);

    }

}