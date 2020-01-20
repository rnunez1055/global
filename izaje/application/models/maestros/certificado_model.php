<?php

class Certificado_model extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    function m_consultar($certificado_id) {

        $instruccion = "SELECT c.certificado_id, c.nCertCodigo, c.nCertNombre, c.nCertCalificacion, c.nCertFechaEmision, c.nCertFechaVencimiento, c.nCertEstado, u.sUsuLogin, c.Usuario_Id ";

	    // $instruccion .= " CASE WHEN u.nUsuEstado = 1 THEN '<div class=\"badge badge-success\">Activo</div>'";

        // $instruccion .= " ELSE '<div class=\"badge badge-danger\">Inactivo</div>' END sUsuEstado";
        
        $instruccion .= " FROM certificados c INNER JOIN usuario u ON c.Usuario_Id = u.Usuario_Id ";

        $instruccion .= " WHERE (IFNULL(".$certificado_id.",-1)=-1 OR certificado_id=".$certificado_id.")";

        $this->db->close();

        $query = $this->db->query($instruccion);      

        if ($query) {           

            return ($query->result_array());               

        }else{            

            return 0;            

        }        

    }
    
    function m_consultar_equipos($certificado_id) {

        $instruccion = "SELECT c.nCertCodigo, c.certificado_id, c.nCertNombre, c.nCertCalificacion, c.nCertFechaEmision, c.nCertFechaVencimiento, e.sEquPlaca, e.sEquNroSerie, c.nCertEstado, c.Equipo_Id ";

	    // $instruccion .= " CASE WHEN u.nUsuEstado = 1 THEN '<div class=\"badge badge-success\">Activo</div>'";

        // $instruccion .= " ELSE '<div class=\"badge badge-danger\">Inactivo</div>' END sUsuEstado";
        
        $instruccion .= " FROM certificados c INNER JOIN equipos e ON c.Equipo_Id = e.Equipo_Id ";

        $instruccion .= " WHERE (IFNULL(".$certificado_id.",-1)=-1 OR certificado_id=".$certificado_id.")";

        $this->db->close();

        $query = $this->db->query($instruccion);      

        if ($query) {           

            return ($query->result_array());               

        }else{            

            return 0;            

        }        

    }

    function m_consultarusu($Usuario_Id) {

        $instruccion = "SELECT u.Usuario_Id, u.sUsuLogin";

	    $instruccion .= " FROM usuario u ";

        $instruccion .= " WHERE (IFNULL(".$Usuario_Id.",-1)=-1 OR  u.Usuario_Id=".$Usuario_Id.")";

        $instruccion .= " AND u.Usuario_Id<>1";

        $this->db->close();

        $query = $this->db->query($instruccion);        

        if ($query) {           

            return ($query->result_array());               

        }else{            
            return 0;            
        }        
    }
    
    function m_consultarequ($Equipo_Id) {

        $instruccion = "SELECT e.Equipo_Id, e.sEquPlaca, e.sEquNroSerie";

	    $instruccion .= " FROM equipos e ";

        $instruccion .= " WHERE (IFNULL(".$Equipo_Id.",-1)=-1 OR  e.Equipo_Id=".$Equipo_Id.")";

        $instruccion .= " AND e.Equipo_Id<>1";

        $this->db->close();

        $query = $this->db->query($instruccion);        

        if ($query) {           

            return ($query->result_array());               

        }else{            
            return 0;            
        }        
    }

    function m_ver($certificado_id) {

        $instruccion = "SELECT c.certificado_id, c.nCertCodigo, c.nCertNombre, c.nCertCalificacion, c.nCertFechaEmision, c.nCertFechaVencimiento, c.nCertEstado, c.Usuario_Id, u.sUsuLogin";

        // $instruccion .= " CASE WHEN u.nUsuEstado = 1 THEN '<div class=\"badge badge-success\">Activo</div>'";

        // $instruccion .= " ELSE '<div class=\"badge badge-danger\">Inactivo</div>' END sUsuEstado";

        $instruccion .= " FROM certificados c INNER JOIN usuario u ON c.Usuario_Id = u.Usuario_Id";

        $instruccion .= " WHERE (IFNULL(".$certificado_id.",-1)=-1 OR  c.certificado_id=".$certificado_id.")";

        // $instruccion .= " AND (IFNULL(".$nusuestado.",-1)=-1 OR nUsuEstado=".$nusuestado.");";

        $this->db->close();

        $query = $this->db->query($instruccion);     

        if ($query) {

            return ($query->row_array());                        

        }else{            

            return 0;            

        }        

    }
    
    function m_ver_equipos($certificado_id) {

        $instruccion = "SELECT c.certificado_id, c.nCertCodigo, c.nCertNombre, c.nCertCalificacion, c.nCertFechaEmision, c.nCertFechaVencimiento, e.sEquPlaca, c.Equipo_Id, c.nCertEstado ";

	    // $instruccion .= " CASE WHEN u.nUsuEstado = 1 THEN '<div class=\"badge badge-success\">Activo</div>'";

        // $instruccion .= " ELSE '<div class=\"badge badge-danger\">Inactivo</div>' END sUsuEstado";
        
        $instruccion .= " FROM certificados c INNER JOIN equipos e ON c.Equipo_Id = e.Equipo_Id ";

        $instruccion .= " WHERE (IFNULL(".$certificado_id.",-1)=-1 OR certificado_id=".$certificado_id.")";

        // $instruccion .= " AND (IFNULL(".$nusuestado.",-1)=-1 OR nUsuEstado=".$nusuestado.");";

        $this->db->close();

        $query = $this->db->query($instruccion);     

        if ($query) {

            return ($query->row_array());                        

        }else{            

            return 0;            

        }        

    }

    /*function m_guardar($cbousuario, $txtcertificado, $txtcodigo_certificado, $txtcalificacion_certificado, $txtfechaemision_certificado, $txtfechavencimiento_certificado, $ruta) {
                  
        $instrucciong = "INSERT INTO certificados (nCertNombre,nCertCodigo,nCertCalificacion,nCertFechaEmision, nCertFechaVencimiento, nCertRutaArchivo,Usuario_Id) VALUES ('".$txtcertificado."','".$txtcodigo_certificado."', '".$txtcalificacion_certificado."', '".$txtfechaemision_certificado."', '".$txtfechavencimiento_certificado."', '".$ruta."',".$cbousuario.");";

        $this->db->query($instrucciong);

        $this->db->close();

        return 1;
            
    }*/
    
    
    function m_guardar($cboequipo, $cbousuario, $txtcertificado, $txtcodigo_certificado, $txtcalificacion_certificado, $txtfechaemision_certificado, $chkestado) {
                  
        //$instruccion_usu = "SELECT COUNT(*) AS Total FROM certificados WHERE Usuario_Id='".$cbousuario."' AND nCertCodigo='".$txtcodigo_certificado."'";
        
        $instruccion_usu = "SELECT COUNT(*) AS Total FROM certificados WHERE nCertCodigo='".$txtcodigo_certificado."'";

        $query = $this->db->query($instruccion_usu);

        $resultado = $query->row_array();

        if ($resultado['Total']>0){

            return 0;

        }else{
            
            $nueva_fecha_vencimiento = strtotime('+1 Year', strtotime($txtfechaemision_certificado));
            $txtfechavencimiento_certificado = date('Y-m-d', $nueva_fecha_vencimiento);
        
            $instrucciong = "INSERT INTO certificados (nCertNombre,nCertCodigo,nCertCalificacion,nCertFechaEmision, nCertFechaVencimiento, Usuario_Id, Equipo_Id, nCertEstado) VALUES ('".$txtcertificado."','".$txtcodigo_certificado."', '".$txtcalificacion_certificado."', '".$txtfechaemision_certificado."', '".$txtfechavencimiento_certificado."', ".$cbousuario.", ".$cboequipo.",".$chkestado.");";

            $this->db->query($instrucciong);

            $this->db->close();

            return 1;
            
        }
            
            
    }
    
    function m_actualizar($txtcertificado_id, $txtcalificacion_certificado_u, $txtfechaemision_certificado_u, $chkestado) {

        $nueva_fecha_vencimiento_u = strtotime('+1 Year', strtotime($txtfechaemision_certificado_u));
        $txtfechavencimiento_certificado_u = date('Y-m-d', $nueva_fecha_vencimiento_u);        
        
        $instruccion = "UPDATE certificados SET nCertCalificacion='".$txtcalificacion_certificado_u."', nCertFechaEmision='".$txtfechaemision_certificado_u."', nCertFechaVencimiento='".$txtfechavencimiento_certificado_u."', nCertEstado='".$chkestado."' WHERE certificado_id='".$txtcertificado_id."'";

        $this->db->query($instruccion);        

        $this->db->close();

        return 1;

    }

    /*function m_actualizar($txtcertificado_id, $txtcodigo_certificado_u, $txtcertificado_u, $txtcalificacion_certificado_u, $txtfechaemision_certificado_u, $txtfechavencimiento_certificado_u, $ruta) {

        $instruccion = "UPDATE certificados SET nCertNombre='".$txtcertificado_u."', nCertCodigo='".$txtcodigo_certificado_u."', nCertCalificacion='".$txtcalificacion_certificado_u."', nCertFechaEmision='".$txtfechaemision_certificado_u."', nCertFechaVencimiento='".$txtfechavencimiento_certificado_u."', nCertRutaArchivo='".$ruta."' WHERE certificado_id='".$txtcertificado_id."'";  

        $this->db->query($instruccion);        

        $this->db->close();

        return 1;

    }*/

    function m_eliminar($certificado_id) {

        $instruccion = "DELETE FROM certificados WHERE certificado_id='".$certificado_id."'";

        $this->db->query($instruccion);        

        $this->db->close();

        return 1;

    }

}


