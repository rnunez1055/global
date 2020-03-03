<?php

if (!defined('BASEPATH'))

    exit('No direct script access allowed');

class Reporte extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->_validaracceso();

        $this->load->model('maestros/usuario_model');

        $this->load->model('maestros/tipousuario_model');

        $this->load->model('maestros/reporte_model');


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

        $data['LstEquipo'] = $this->reporte_model->m_consultarequ(-1,1);
        
        $data['LstUsuario'] = $this->reporte_model->m_consultarusu(-1,1);

        $data['titulo'] = 'Reportes - GLOBAL SUPPLIER S&P SAC ::..';

        $data['titulo_pagina'] = 'Reportes';

        $data['contenido'] = 'maestros/reporte/panel_view';

        $this->load->view('plantilla/master_view', $data);

    }
    
    function consultar() {
        
        $data['LstUsuario'] = $this->reporte_model->m_consultarusu(-1,1);

        $data['LstEntidad'] = $this->reporte_model->m_consultar(-1,-1);

        $this->load->view('maestros/reporte/listar_view', $data);

    }
    
    function consultar_equipos() {
        
        $data['LstEquipo'] = $this->reporte_model->m_consultarequ(-1,1);

        $data['LstEntidad'] = $this->reporte_model->m_consultar_equipos(-1,-1);

        $this->load->view('maestros/reporte/listar_view_empresa', $data);

    }

}