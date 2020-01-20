<?php

class Equipos_model extends CI_Model {

    function __construct() {

        parent::__construct();

    }

    function m_consultar($equipo_id,$nEquEstado) {

        $instruccion = "SELECT e.Equipo_Id, e.sEquCodigo, e.sEquPlaca, e.sEquTipoEquipo, e.sEquMarcaModelo, e.sEquNroSerie, e.sEquCapacidad, e.sEquEmpresaTitular, e.TipoUsuario_Id, e.sEquObservaciones, tu.sTUsnombre,  e.nEquEstado, e.sEquObservaciones, ";        

	    $instruccion .= " CASE WHEN e.nEquEstado = 1 THEN '<div class=\"badge badge-success\">Activo</div>'";

        $instruccion .= " ELSE '<div class=\"badge badge-danger\">Inactivo</div>' END nEquEstado";

        $instruccion .= " FROM equipos e INNER JOIN tipousuario tu ON e.TipoUsuario_Id=tu.TipoUsuario_Id";

        $instruccion .= " WHERE (IFNULL(".$equipo_id.",-1)=-1 OR  Equipo_Id=".$equipo_id.")";

        $instruccion .= " AND (IFNULL(".$nEquEstado.",-1)=-1 OR nEquEstado=".$nEquEstado.");";

        $this->db->close();

        $query = $this->db->query($instruccion);        

        if ($query) {           

            return ($query->result_array());               

        }else{            

            return 0;            

        }        

    }

    function m_ver($equipo_id,$nequestado) {
        
        $instruccion = "SELECT e.Equipo_Id, e.sEquCodigo, e.sEquPlaca, e.sEquTipoEquipo, e.sEquMarcaModelo, e.sEquNroSerie, e.sEquCapacidad, e.sEquEmpresaTitular, e.TipoUsuario_Id, e.sEquObservaciones, e.sEquRutaImagen, tu.sTUsnombre,  e.nEquEstado, e.sEquObservaciones";
        
        //$instruccion .= " CASE WHEN e.nEquEstado = 1 THEN '<div class=\"badge badge-success\">Activo</div>'";

        //$instruccion .= " ELSE '<div class=\"badge badge-danger\">Inactivo</div>' END nEquEstado";

        $instruccion .= " FROM equipos e INNER JOIN tipousuario tu ON e.TipoUsuario_Id=tu.TipoUsuario_Id";

        $instruccion .= " WHERE (IFNULL(".$equipo_id.",-1)=-1 OR  Equipo_Id=".$equipo_id.")";

        $instruccion .= " AND (IFNULL(".$nequestado.",-1)=-1 OR e.nEquEstado=".$nequestado.");";

        $this->db->close();

        $query = $this->db->query($instruccion);        

        if ($query) {

            return ($query->row_array());                        

        }else{            

            return 0;            

        } 

    }

    function m_guardar($cbotipousuario,$txtcodigo_equipo,$txtplaca_equipo,$txttipo_equipo, $txtmarcamodelo_equipo,$txtnroserie_equipo,$txtcapacidad_equipo,$txtempresatitular_equipo, $txtcontrasena,$txtobservaciones_equipo, $chkestado) {
        

$instruccion = "SELECT COUNT(*) AS Total FROM equipos WHERE sEquCodigo='".$txtcodigo_equipo."' OR sEquPlaca='".$txtplaca_equipo."' OR sEquNroSerie='".$txtnroserie_equipo."'";

        $query = $this->db->query($instruccion);

        $resultado = $query->row_array();

        if ($resultado['Total']>0){

            return 0;

        }else{

$instrucciong = "INSERT INTO equipos (sEquCodigo, sEquPlaca,sEquTipoEquipo,sEquMarcaModelo,sEquNroSerie,sEquCapacidad,sEquEmpresaTitular,sEquContrasena,TipoUsuario_Id,
sEquObservaciones, nEquEstado) VALUES ('".$txtcodigo_equipo."','".$txtplaca_equipo."','".$txttipo_equipo."', '".$txtmarcamodelo_equipo."', '".$txtnroserie_equipo."', '".$txtcapacidad_equipo."', '".$txtempresatitular_equipo."','".md5($txtcontrasena)."','".$cbotipousuario."','".$txtobservaciones_equipo."', '".$chkestado."');";

            $this->db->query($instrucciong);

            $this->db->close();

            return 1;

        }
    }

    function m_actualizar($txtEquipo_id, $txtplaca_equipo_u, $txttipo_equipo_u, $txtmarcamodelo_equipo_u, $txtnroserie_equipo_u, $txtcapacidad_equipo_u, $txtempresatitular_equipo_u, $cbotipousuario_u, $chkestado, $ruta, $txtobservaciones_equipo_u) {

    $instruccion = "UPDATE equipos SET TipoUsuario_Id='".$cbotipousuario_u."',sEquPlaca = '".$txtplaca_equipo_u."',sEquTipoEquipo = '".$txttipo_equipo_u."',sEquMarcaModelo = '".$txtmarcamodelo_equipo_u."',sEquNroSerie = '".$txtnroserie_equipo_u."',sEquCapacidad = '".$txtcapacidad_equipo_u."',sEquEmpresaTitular = '".$txtempresatitular_equipo_u."',TipoUsuario_Id = '".$cbotipousuario_u."',nEquEstado = '".$chkestado."', sEquObservaciones = '".$txtobservaciones_equipo_u."', sEquRutaImagen = '".$ruta."'  WHERE Equipo_Id=".$txtEquipo_id.";";

        $this->db->query($instruccion);        

        $this->db->close();

        return 1;

    }

    function m_eliminar($txtequipo_id) {

        $instruccion = "DELETE FROM equipos WHERE Equipo_Id='".$txtequipo_id."'";

        $this->db->query($instruccion);        

        $this->db->close();

        return 1;

    }

    function m_actualizarclave($txtequipo_id,$txtclave_u) {

        $instruccion = "UPDATE equipos SET 	sEquContrasena='".md5($txtclave_u)."' WHERE Equipo_Id=".$txtequipo_id.";";

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


