<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logout extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->_validaracceso();
        //$this->load->model('menu_model');
    }
    
    function _validaracceso() {
        $logeado = $this->session->userdata('logeado');
        $usuario_id = $this->session->userdata('usuario_id');
        
        if ($logeado != true OR $usuario_id = null ) {
            redirect(URL_INICIO);
        }
    }
    
    function index() {
        $this->session->sess_destroy();
        redirect(URL_INICIO);
    }
    
}