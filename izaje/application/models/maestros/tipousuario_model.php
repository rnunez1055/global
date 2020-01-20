<?php





class TipoUsuario_model extends CI_Model {





    function __construct() {


        parent::__construct();


    }





    function m_consultar($tipousuario_id,$ntusestado) {


        $instruccion = "SELECT u.TipoUsuario_Id, u.sTUsNombre, u.nTUsEstado  ";


	    $instruccion .= " FROM tipousuario u ";


        $instruccion .= " WHERE (IFNULL(".$tipousuario_id.",-1)=-1 OR  TipoUsuario_Id=".$tipousuario_id.")";


        $instruccion .= " AND TipoUsuario_Id<>1 AND (IFNULL(".$ntusestado.",-1)=-1 OR nTUsEstado=".$ntusestado.");";


        


        $this->db->close();


        


        $query = $this->db->query($instruccion);        


        if ($query) {           


            return ($query->result_array());               


        }else{            


            return 0;            


        }        


    }





    function m_ver($suministro_id,$nsumestado) {


   


        $instruccion = "SELECT c.Suministro_Id, c.sSumNombre, c.nSumEstado, ";


	$instruccion .= " CASE WHEN c.nSumEstado = 1 THEN '<div class=\"badge badge-success\">Activo</div>'";


        $instruccion .= " ELSE '<div class=\"badge badge-danger\">Inactivo</div>' END sSumEstado";


        $instruccion .= " FROM Suministro c";


        $instruccion .= " WHERE (IFNULL(".$suministro_id.",-1)=-1 OR  Suministro_Id=".$suministro_id.")";


        $instruccion .= " AND (IFNULL(".$nsumestado.",-1)=-1 OR nSumEstado=".$nsumestado.");";


        $this->db->close();


        


        $query = $this->db->query($instruccion);        


        if ($query) {


            return ($query->row_array());                        


        }else{            


            return 0;            


        }        


    }





    function m_guardar($txtnombre,$chkestado) {


        


//        $instruccion = "CALL sp_GuardarEmpresa ('guardar','','".$txtnombre."','".$chkestado."');";


//        $this->db->close();


//        


//        $query = $this->db->query($instruccion);        


//        if ($query) {            


//            return ($query->row_array());            


//        }else{            


//            return 0;


//        }   


        


        $instruccion = "SELECT COUNT(*) AS Total FROM suministro WHERE sSumNombre='".$txtnombre."'";


        $query = $this->db->query($instruccion);        


                


        $resultado = $query->row_array();


        


        if ($resultado['Total']>0){


            


            return 0;


            


        }else{


            


            $instrucciong = "INSERT INTO Suministro (sSumNombre,nSumEstado) VALUES ('".$txtnombre."',".$chkestado.");";


            $this->db->query($instrucciong);


            $this->db->close();


            return 1;


            


        }





    }





    function m_actualizar($txtsuministro_id,$txtnombre,$chkestado) {


        


//        $instruccion = "CALL sp_GuardarEmpresa ('actualizar','".$txtsuministro_id."','".$txtnombre."','".$chkestado."');";


//        $this->db->close();


//        


//        $query = $this->db->query($instruccion);        


//        if ($query) {            


//            return ($query->row_array());            


//        }else{            


//            return 0;            


//        } 


        


        $instruccion = "UPDATE Suministro SET sSumNombre='".$txtnombre."', nSumEstado=".$chkestado." WHERE Suministro_Id=".$txtsuministro_id.";";


        $this->db->query($instruccion);        


        $this->db->close();


        return 1;





    }


    


}


