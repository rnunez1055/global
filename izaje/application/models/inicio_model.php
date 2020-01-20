<?php



class Inicio_model extends CI_Model {



    function __construct() {

        parent::__construct();

    }



    function db_validardatos($txtusuario, $txtcontrasena) {

        $instruccion = "SELECT c.Usuario_Id, c.sUsuLogin, c.sUsuEmail, c.sUsuRutaImagen, c.TipoUsuario_Id FROM usuario c ";

	    $instruccion .= " WHERE c.sUsuEmail='".$txtusuario."' AND c.sUsuContrasena='".md5($txtcontrasena)."';";

        $this->db->close();

        

        $query = $this->db->query($instruccion);        

        if ($query) {            

            return ($query->row_array());            

        }else{            

            return 0;            

        }        

    }

    

}

