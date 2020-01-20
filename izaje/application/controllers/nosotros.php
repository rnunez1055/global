<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nosotros extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $data['main_content'] = 'nosotros_view';
        $data['titulo'] = 'LP';
        $this->load->view('master/plantilla_view', $data);

    }

}