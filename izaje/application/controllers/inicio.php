<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



class Inicio extends CI_Controller {



    function __construct() {

        parent::__construct();

        $this->load->model('inicio_model');

    }



    function index() {



        $data['titulo'] = '..:: CMS - Inicio de Sesión ::..';

        $this->load->view('login_view', $data);



    }



    function validardatos() {

        

        $txtusuario = trim($_POST['txtusuario']);

        $txtcontrasena = trim($_POST['txtcontrasena']);



        $resultado = $this->inicio_model->db_validardatos($txtusuario, $txtcontrasena);



        if ($resultado) {



            $sesion_data = array(

                'logeado' => true,

                'usuario_di' => $resultado['Usuario_Id'],

                'sUsuEmail' => $resultado['sUsuEmail'],

                'sUsuLogin' => $resultado['sUsuLogin'],

                'TipoUsuario_di' => $resultado['TipoUsuario_Id'],
                
                'sUsuRutaImagen' => $resultado['sUsuRutaImagen'],

            );



            $this->session->set_userdata($sesion_data);



            echo 1;

        } else {

            

            echo 0;

        }

    }

}