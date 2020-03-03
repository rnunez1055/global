<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Egresados extends CI_Controller {



    function __construct() {

        parent::__construct();

        $this->load->model('maestros/usuario_model');

        $this->load->model('maestros/certificado_model');

    }

    function index() {        

        $this->load->view('egresados/index');
        
    }
    
    function consultar(){
        
        $data['LstUsuario'] = $this->certificado_model->m_consultarusu(-1,1);

        $txtnombre = $_POST['txtbuscar'];

        $data['LstEntidad'] = $this->usuario_model->m_consultarusuario($txtnombre);
        
        $this->load->view('egresados/listar_view', $data);
        
    }

}