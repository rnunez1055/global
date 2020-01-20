<?php
$pPageIsPublic = true;
include('_common.php');
session_start();
$_SESSION['q_activo'] = 'alumno';
?>
<!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Transitional/EN" "http:/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:/www.w3.org/1999/xhtml">

<head>
	<title>Buscador de Certificados Vigentes | GLOBAL SUPPLIER S&amp;P SAC</title>
	<meta name="description" content="Buscador de Certificados Vigentes | GLOBAL SUPPLIER S&amp;P SAC" />
	<meta name="keywords" content="Buscador de Certificados Vigentes | GLOBAL SUPPLIER S&amp;P SAC" />
	<?php include("_head.php") ?>
</head>

<body>
	<?php include("_header.php") ?>
    <div id="slider">
		<div class="slider_t slider_mov hidden-xs">
			<div class="item_mov">
				<img src="contenido/img/empresa/noticias_slider.jpg">
				<h2 class="item_mov__title">CONSULTAS CERTIFICACIONES..........</h2>
			</div>

		</div>
        <div class="slider_t slider_mov visible-xs">
	  		<div class="item_mov">
	  			<img src="contenido/img/slider_movil/empresa/noticias_slider_movil.jpg">
                <h2 class="item_mov__title">CONSULTAS CERTIFICACIONES..........</h2>
	  		</div>
	 	</div>
	</div>
    <br>
	<div id="w_contenido" class="ui_page_m">
		<div class="container">
			<!--<div class="w_text w_text_big icon_green">
				<p>BUSCADOR DE CERTIFICADOS</p>
			</div>-->
			<div class="row row_margin">
				<div class="col-xs-12 col-sm-12">


					<section class="bg-color">
                        
                        <div class="content-boton-producto">
                            
<div class="content-boton-producto__boton" id="boton-descripccion-producto">BUSCAR ALUMNO</div>
<div class="content-boton-producto__boton"  id="boton-informacionGeneral-producto">BUSCAR EQUIPOS</div>
                </div>
                <div class="content-descripcion-informarcion">
                    <div class="content-descripcion" id="descripccion-producto">
                        <form class="cont-inputs_buscar" id="frmBuscarAlumno" method="post">
                            <div class="union-form">
                                <input class="form-control input-search" type="search" value="" id="txtbuscarAlumno" name="txtbuscarAlumno" placeholder="Buscar por DNI (8 DÍGITOS COMPLETOS) y/o APELLIDOS Y NOMBRES" required>
                                <input type="submit" class="btn-icon-text" id="btnbuscar" name="btnbuscar" value="BUSCAR ALUMNO">
                            </div>
                            <div id="mensajeResulAlumno">
                                
                            <?php            
            $boton = !empty($_POST['btnbuscar']);
            if ($boton) {
                
                    session_start();                     
                    $_SESSION['q_activo'] = 'alumno';
               
                    $buscarAlumno = utf8_decode($_POST["txtbuscarAlumno"]);
                
                    require_once("conexion.php");
                
                    $query = "Select u.sUsuDni, u.sUsuLogin, c.nCertNombre, c.nCertCalificacion, c.nCertCodigo, u.sUsuEmpresaTitular,c.nCertFechaEmision, c.nCertFechaVencimiento, c.nCertEstado ";
                    $query .= "FROM usuario u INNER JOIN certificados c ON u.Usuario_Id=c.Usuario_Id ";
                    $query .= " WHERE u.sUsuDni='$buscarAlumno' or u.sUsuLogin LIKE '%$buscarAlumno%'";
                
                    $resultado = mysqli_query( $conexion, $query);                
                    $totalFilas = mysqli_num_rows($resultado);
                
                    if($totalFilas==0){
                        print '<div class="badge badge-danger">NO SE ENCONTRARON RESULTADOS</div>';
                    }else{
                        print '<table id="example" class="table table-bordered table" style="width:100%">';
                        print '<thead class="thead-dark table__head">';
                            print '<tr>';
                                print '<th>DNI</th>';
                                print '<th>Nombres y Apellidos</th>';
                                print '<th>Certificación</th>';
                                print '<th>Calificación</th>';
                                print '<th>Nro de Certificado</th>';
                                print '<th>Empresa / Titular</th>';
                                print '<th>Fecha de Emisión</th>';
                                print '<th>Fecha de Vencimiento</th>';
                                print '<th>Condición</th>';
                            print '</tr>';
                        print '</thead>';
                        print '<tbody>';

                    foreach ($resultado as $rows) {
                    ?>
                        <tr class="table__data">
                            <td>
                                <?= utf8_encode($rows['sUsuDni']) ?>
                            </td>
                            <td>
                                <?= utf8_encode($rows['sUsuLogin']) ?>
                            </td>
                            <td>
                                <?= utf8_encode($rows['nCertNombre']) ?>
                            </td>
                            <td>
                                <?= utf8_encode($rows['nCertCalificacion']) ?>
                            </td>
                            <td>
                                <?= utf8_encode($rows['nCertCodigo']) ?>
                            </td>
                            <td>
                                <?= utf8_encode($rows['sUsuEmpresaTitular']) ?>
                            </td>
                            <td>
                                <?= utf8_encode($rows['nCertFechaEmision']) ?>
                            </td>
                            <td>

<?php 
$nueva_fecha_ven = strtotime('+1 Year', strtotime($rows['nCertFechaEmision']));
$nueva_fecha_ven = date('Y-m-d', $nueva_fecha_ven);

echo $nueva_fecha_ven;


                            print '</td>';
                            print '<td>';

                        
            $fecha_hoy = date('Y-m-d');    

            $nueva_fecha_ven = strtotime('+1 Year', strtotime($rows['nCertFechaEmision']));
            $nueva_fecha_ven = date('Y-m-d', $nueva_fecha_ven);

            if($nueva_fecha_ven > $fecha_hoy){
                print '<div class="badge badge-success">HABILITADO</div>';
                }else if($nueva_fecha_ven <= $fecha_hoy){
                print '<div class="badge badge-danger">INHABILITADO</div>';
            }       
             print '</td>';
                        print '</tr>';
                    }
                          print '</tbody>';
                            print '</table>';
            };
                mysqli_close( $conexion );
            }
                                ?>
                   
                            </td>
                    </div>
                </form>
            </div>
                    <div class="content-informarcion" id="informacionGeneral-producto" >
                       <form class="cont-inputs_buscar" id="frmBuscar" method="post" onSubmit="return validarForm(this)">
                            <div class="union-form">
              <input class="form-control input-search" type="search" value="" id="txtBuscarEquipo" name="txtBuscarEquipo" placeholder="Buscar por PLACA y/o NRO DE SERIE (DÍGITOS COMPLETOS)" required>
              <input type="submit" class="btn-icon-text" name="btnBuscarEquipo" id="btnBuscarEquipo" value="BUSCAR EQUIPO">
                            </div>
                           
                           <div id="mensajeResulEquipo">
                                
                            <?php            
            $botonEquipo = !empty($_POST['btnBuscarEquipo']);
            if ($botonEquipo) {
               
                    $buscarEquipo = utf8_decode($_POST["txtBuscarEquipo"]);
                
                    session_start();                     
                    $_SESSION['q_activo'] = 'equipo';
                
                    require_once("conexion.php");
                
                    $query = "Select e.sEquPlaca, e.sEquTipoEquipo , e.sEquMarcaModelo, e.sEquNroSerie, e.sEquCapacidad, c.nCertCodigo, e.sEquEmpresaTitular, c.nCertFechaEmision, c.nCertFechaVencimiento, e.sEquObservaciones, c.nCertEstado ";
                    $query .= "from equipos e INNER JOIN certificados c ON e.Equipo_Id=c.Equipo_Id ";
                    $query .= " WHERE e.sEquPlaca='$buscarEquipo' OR e.sEquNroSerie='$buscarEquipo'";
                
                    $resultado = mysqli_query( $conexion, $query);                
                    $totalFilas = mysqli_num_rows($resultado);
                
                    if($totalFilas==0){
                        print '<div class="badge badge-danger">NO SE ENCONTRARON RESULTADOS</div>';
                    }else{
                        print '<table id="example" class="table table-bordered table" style="width:100%">';
                        print '<thead class="thead-dark table__head">';
                            print '<tr>';
                                print '<th>PLACA / IDENTIFICACIÓN</th>';
                                print '<th>Tipo de Equipo</th>';
                                print '<th>Marca / Modelo</th>';
                                print '<th>Nro Serie</th>';
                                print '<th>Capacidad</th>';
                                print '<th>Nro de Certificado</th>';
                                print '<th>Empresa / Titular</th>';
                                print '<th>Fecha de Emisión</th>';
                                print '<th>Fecha de Vencimiento</th>';                                
                                print '<th>Condición</th>';
                                print '<th>Observaciones</th>';
                            print '</tr>';
                        print '</thead>';
                        print '<tbody>';

                    foreach ($resultado as $rows) {
                    ?>
                        <tr class="table__data">
                            <td>
                                <?= utf8_encode($rows['sEquPlaca']) ?>
                            </td>
                            <td>
                                <?= utf8_encode($rows['sEquTipoEquipo']) ?>
                            </td>
                            <td>
                                <?= utf8_encode($rows['sEquMarcaModelo']) ?>
                            </td>
                            <td>
                                <?= utf8_encode($rows['sEquNroSerie']) ?>
                            </td>
                            <td>
                                <?= utf8_encode($rows['sEquCapacidad']) ?>
                            </td>
                            <td>
                                <?= utf8_encode($rows['nCertCodigo']) ?>
                            </td>
                            <td>
                                <?= utf8_encode($rows['sEquEmpresaTitular']) ?>
                            </td>
                            <td>
                                <?= utf8_encode($rows['nCertFechaEmision']) ?>
                            </td>
                            <td>

<?php 
$nueva_fecha_ven = strtotime('+1 Year', strtotime($rows['nCertFechaEmision']));
$nueva_fecha_ven = date('Y-m-d', $nueva_fecha_ven);

echo $nueva_fecha_ven;


                            print '</td>';
                            print '<td>';

                        
            $fecha_hoy = date('Y-m-d');    

            $nueva_fecha_ven = strtotime('+1 Year', strtotime($rows['nCertFechaEmision']));
            $nueva_fecha_ven = date('Y-m-d', $nueva_fecha_ven);

            if($nueva_fecha_ven > $fecha_hoy){
                print '<div class="badge badge-success">VIGENTE</div>';
                }else if($nueva_fecha_ven <= $fecha_hoy){
                print '<div class="badge badge-danger">VENCIDO</div>';
            }       
             print '</td>';
                        
                        print '<td>'.$rows['sEquObservaciones'].'</td>';
                        
                        print '</tr>';
                    }
                          print '</tbody>';
                            print '</table>';
            };
                mysqli_close( $conexion );
            }
                                ?>
                   
                            </td>
                    </div>
                        </form>
                    </div>
                </div>
					</section>
				</div>
			</div>
			<br>
		</div>
	</div>
    
	<?php
    
    include("_footer.php") ?>
</body>

</html>

<script>

	function validarForm(formulario) {
		if (formulario.txtbuscar.value.length == 0) { //¿Tiene 0 caracteres?
			formulario.txtbuscar.focus(); // Damos el foco al control
			alert('Debes rellenar este campo'); //Mostramos el mensaje
			return false;
		}
		return true;
	}
</script>
<script>
    $(document).ready(function(){
       $('html, body').animate({scrollTop: $("#w_contenido").offset().top}, 1000);
	});
    
    
        const botonDescripccion = document.getElementById('boton-descripccion-producto');
        const botonInformacionGeneral = document.getElementById('boton-informacionGeneral-producto');
        const descripccionProducto = document.getElementById('descripccion-producto')
        const informacionProducto = document.getElementById('informacionGeneral-producto');

        informacionProducto.classList.add('content-informarcion--show')
        botonDescripccion.classList.add('content-boton-producto__boton_active')

        botonDescripccion.addEventListener('click',()=>{
            botonInformacionGeneral.classList.remove('content-boton-producto__boton_active')
            botonDescripccion.classList.add('content-boton-producto__boton_active')
            descripccionProducto.classList.remove('content-descripcion--show')
            informacionProducto.classList.add('content-informarcion--show')
        })
        botonInformacionGeneral.addEventListener('click',()=>{
            botonDescripccion.classList.remove('content-boton-producto__boton_active')
            botonInformacionGeneral.classList.add('content-boton-producto__boton_active')
            descripccionProducto.classList.add('content-descripcion--show')
            informacionProducto.classList.remove('content-informarcion--show')
        })
</script>
<?php 

        if($_SESSION['q_activo']){
            if($_SESSION['q_activo']=="alumno"){
                
                print '<script>';
                    print "botonInformacionGeneral.classList.remove('content-boton-producto__boton_active')
            botonDescripccion.classList.add('content-boton-producto__boton_active')
            descripccionProducto.classList.remove('content-descripcion--show')
            informacionProducto.classList.add('content-informarcion--show')";
                print '</script>';
                
            }else if($_SESSION['q_activo']=="equipo"){
                print '<script>';
                    print "botonDescripccion.classList.remove('content-boton-producto__boton_active')
            botonInformacionGeneral.classList.add('content-boton-producto__boton_active')
            descripccionProducto.classList.add('content-descripcion--show')
            informacionProducto.classList.remove('content-informarcion--show')";
                print '</script>';
            }
        }
        
    //print "session:".$_SESSION['q_activo'];

?>






