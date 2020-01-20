<?php

header('Content-Type: application/json');

$vbuscarAlumno = $_POST["vbuscarAlumno"];
   
mysql_connect("localhost", "root", "") or
    die("No se pudo conectar: " . mysql_error());
mysql_select_db("gestion_izaje");

$resultado = mysql_query("Select nCertNombre, nCertCalificacion, nCertFechaEmision from certificados");

$return="";

while ($registro = mysql_fetch_array($resultado)){
    
    //$return.=$registro['nCertNombre'].";".$registro['nCertCalificacion'].";".$registro['nCertFechaEmision'];
    
    $return.= $registro['nCertNombre'].";".$registro['nCertCalificacion'].";".$registro['nCertFechaEmision'];
    
}

echo json_encode(array("resultado"=>$return));


//mysql_free_result($resultado);

echo json_encode($return, JSON_FORCE_OBJECT);

//return  $resultado;  


/*header('Content-Type: application/json');

    $vbuscarAlumno = $_POST["vbuscarAlumno"];

    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'gestion_izaje'; 

    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    if($db->connect_error){
        die("Unable to connect database: " . $db->connect_error);
    }

    $query = "Select u.sUsuDni, u.sUsuLogin, c.nCertNombre, c.nCertCalificacion, c.nCertCodigo, u.sUsuEmpresaTitular,c.nCertFechaEmision, c.nCertFechaVencimiento, c.nCertEstado FROM usuario u INNER JOIN certificados c ON u.Usuario_Id=c.Usuario_Id WHERE u.sUsuDni='{$_POST['vbuscarAlumno']}' OR u.sUsuLogin like '%{$_POST['vbuscarAlumno']}%'";

    $query = $db->query($query);
   
    if ($query->num_rows == 0){
            $datos = array(
                'estado' => 'ok',
                'nombre' => "NO SE ENCUENTRAN COINCIDENCIAS",
            );

       }else{
        
            $fila = mysql_fetch_row($query);
        
            print "<br>".$fila;
        
        
            $datos = array(
                'estado' => 'ok',
                'nombre' =>$fila[0],
            ); 
                  
    }

    echo json_encode($datos, JSON_FORCE_OBJECT);*/
?>

























