<?php

class Reporte_model extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    function m_consultar($certificado_id) {

        $instruccion = "SELECT c.certificado_id, c.nCertCodigo, c.nCertNombre, c.nCertCalificacion, c.nCertFechaEmision, c.nCertFechaVencimiento, c.nCertEstado, u.sUsuLogin, u.sUsuDni, u.sUsuEmpresaTitular, c.Usuario_Id ";

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

        $instruccion = "SELECT c.nCertCodigo, c.certificado_id, c.nCertNombre, c.nCertCalificacion, c.nCertFechaEmision, c.nCertFechaVencimiento, e.sEquPlaca, e.sEquNroSerie, e.sEquTipoEquipo, e.sEquMarcaModelo, e.sEquCapacidad, e.sEquEmpresaTitular, c.nCertEstado, c.Equipo_Id ";

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
}


