<?php
session_start();
class Cargas {
   
    //Crear menu de opciones por tipo de opciones
    public function menupadrebasica() {
        $CI = & get_instance();
        $CI->load->model('menu_model','menupadrebasica');
        return $CI->menupadrebasica->menupadrebasica();
    }
    
    public function validarpermisos() {
        $CI = & get_instance();
        $CI->load->model('menu_model','validarpermisos');
        $url1 = $CI->uri->segment(1);
        $url2 = $CI->uri->segment(1).'/' . $CI->uri->segment(2);
        $data = array('url1' => $url1,'url2'=>$url2);
        $CI->session->set_userdata($data);
        return $CI->validarpermisos->validarpermisos();
    }
}
