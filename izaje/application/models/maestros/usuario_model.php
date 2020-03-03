<?php

class Usuario_model extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    function m_consultar($usuario_id,$nusuestado) {

        $instruccion = "SELECT u.Usuario_Id, u.sUsuCodigo, u.sUsuLogin, u.sUsuEmpresaTitular, u.sUsuDni, u.TipoUsuario_Id, tu.sTUsnombre,  u.nUsuEstado, ";

	    $instruccion .= " CASE WHEN u.nUsuEstado = 1 THEN '<div class=\"badge badge-success\">Activo</div>'";

        $instruccion .= " ELSE '<div class=\"badge badge-danger\">Inactivo</div>' END sUsuEstado";

        $instruccion .= " FROM usuario u INNER JOIN tipousuario tu ON u.TipoUsuario_Id=tu.TipoUsuario_Id";

        $instruccion .= " WHERE (IFNULL(".$usuario_id.",-1)=-1 OR  Usuario_Id=".$usuario_id.")";

        $instruccion .= " AND (IFNULL(".$nusuestado.",-1)=-1 OR nUsuEstado=".$nusuestado.");";

        $this->db->close();

        $query = $this->db->query($instruccion);        

        if ($query) {           

            return ($query->result_array());               

        }else{            

            return 0;            

        }        

    }

    function m_ver($usuario_id,$nusuestado) {

        $instruccion = "SELECT u.Usuario_Id, u.sUsuCodigo, u.sUsuLogin, u.sUsuDni, u.sUsuEmpresaTitular, u.TipoUsuario_Id, u.sUsuRutaImagen, tu.sTUsnombre, u.nUsuEstado ";

        $instruccion .= " FROM usuario u INNER JOIN tipousuario tu ON u.TipoUsuario_Id=tu.TipoUsuario_Id";

        $instruccion .= " WHERE (IFNULL(".$usuario_id.",-1)=-1 OR  Usuario_Id=".$usuario_id.")";

        $instruccion .= " AND (IFNULL(".$nusuestado.",-1)=-1 OR nUsuEstado=".$nusuestado.");";

        $this->db->close();

        $query = $this->db->query($instruccion);        

        if ($query) {

            return ($query->row_array());                        

        }else{            

            return 0;            

        }        

    }

    function m_guardar($cbotipousuario,$txtusuario,$txtcodigo_alumno,$txtdni, $txtempresatitular,$txtcontrasena,$chkestado) {

        $instruccion = "SELECT COUNT(*) AS Total FROM usuario WHERE sUsuCodigo='".$txtcodigo_alumno."' OR sUsuDni='".$txtdni."'";

        $query = $this->db->query($instruccion);

        $resultado = $query->row_array();

        if ($resultado['Total']>0){

            return 0;

        }else{

$instrucciong = "INSERT INTO usuario (sUsuCodigo, sUsuLogin, sUsuDni, sUsuEmpresaTitular, sUsuContrasena, TipoUsuario_Id, nUsuEstado) VALUES ('".$txtcodigo_alumno."','".$txtusuario."','".$txtdni."', '".$txtempresatitular."', '".md5($txtcontrasena)."','".$cbotipousuario."','".$chkestado."');";

            $this->db->query($instrucciong);

            $this->db->close();

            return 1;

        }
    }

    function m_actualizar($txtusuario_id, $txtnombre_u, $txtdni_u, $txtempresatitular_u, $cbotipousuario_u, $chkestado, $ruta) {

        $instruccion = "UPDATE usuario SET TipoUsuario_Id='".$cbotipousuario_u."', sUsuLogin='".$txtnombre_u."', sUsuDni='".$txtdni_u."', sUsuEmpresaTitular='".$txtempresatitular_u."', sUsuRutaImagen='".$ruta."',  nUsuEstado=".$chkestado." WHERE Usuario_Id=".$txtusuario_id.";";

        $this->db->query($instruccion);

        $this->db->close();

        return 1;

    }

    function m_eliminar($txtusuario_id) {

        $instruccion = "DELETE FROM usuario WHERE Usuario_Id='".$txtusuario_id."'";

        $this->db->query($instruccion);        

        $this->db->close();

        return 1;

    }

    function m_actualizarclave($txtusuario_id,$txtclave_u) {

        $instruccion = "UPDATE usuario SET sUsuContrasena='".md5($txtclave_u)."' WHERE Usuario_Id=".$txtusuario_id.";";

        $this->db->query($instruccion);        

        $this->db->close();

        return 1;

    }

    function m_consultarusuario($txtnombre) {

        $instruccion = "SELECT c.nCertNombre, c.nCertCodigo, c.Usuario_Id ";
        $instruccion .= "FROM certificados c INNER JOIN usuario u ON c.Usuario_Id=u.Usuario_Id ";
        $instruccion .= "WHERE c.nCertCodigo LIKE '%$txtnombre%' OR u.sUsuLogin LIKE '%$txtnombre%' OR u.sUsuDni LIKE '%$txtnombre%'";

        $this->db->close();
        $query = $this->db->query($instruccion);              
        if ($query) {           
            return ($query->result_array());               
        }else{            
            return 0;            
        }        
    }

}


