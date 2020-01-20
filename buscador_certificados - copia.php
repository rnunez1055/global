<?php
$pPageIsPublic = true;
include('_common.php');
?>
<!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Transitional/EN" "http:/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:/www.w3.org/1999/xhtml">

<head>
	<title>Egresados Gestión de Certificados | GLOBAL SUPPLIER S&amp;P SAC</title>
	<meta name="description" content="Egresados Gestión de Certificados | GLOBAL SUPPLIER S&amp;P SAC" />
	<meta name="keywords" content="Egresados Gestión de Certificados | GLOBAL SUPPLIER S&amp;P SAC" />
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

                        <?php
                            $v_btnbuscar=$_POST['btnbuscar'];
                            //echo "valor:".$v_btnbuscar;
                        ?>
                        
                        <?php                               
                            if($v_btnbuscar=="BuscarAlumno"){    
                                print '<input checked type="radio" name="tipoCertificado" id="tipoCertificado" value="alumno">Alumno';
						        print '<input type="radio" name="tipoCertificado" id="tipoCertificado" value="equipo">Equipo';
                            }else if($v_btnbuscar=="BuscarEquipo"){
                                print '<input type="radio" name="tipoCertificado" id="tipoCertificado" value="alumno">Alumno';
						        print '<input checked type="radio" name="tipoCertificado" id="tipoCertificado" value="equipo">Equipo';
                            }else{
                                print '<input checked type="radio" name="tipoCertificado" id="tipoCertificado" value="alumno">Alumno';
						        print '<input type="radio" name="tipoCertificado" id="tipoCertificado" value="equipo">Equipo';
                            }
                        ?>
                        
                        <?php                               
                            if($v_btnbuscar=="BuscarAlumno"){
                                print '<div class="cont-engresado" id="v_alumno" style="display:block">';
                            }else if($v_btnbuscar=="BuscarEquipo"){
                                print '<div class="cont-engresado" id="v_alumno" style="display:none">';
                            }
                        ?>
						
                        <!--<div class="cont-engresado" id="v_alumno">-->
							<form class="cont-inputs_buscar" id="frmBuscar" method="post" onSubmit="return validarForm(this)">
								<div class="union-form">
									<input class="form-control input-search" type="search" value="" id="txtbuscar" name="txtbuscar" placeholder="Buscar por DNI y/o Apellidos y Nombres" required>
									<input type="submit" class="btn-icon-text" name="btnbuscar" value="BuscarAlumno">
								</div>
							</form>
							<div id="mostrar_lista_equipos">
								<?php
								require_once("conexion.php");
								$boton = !empty($_POST['btnbuscar']);
								if ($boton) {
								?>
									<table id="example" class="table table-bordered table" style="width:100%">
										<thead class="thead-dark table__head">
											<tr>
												<th>DNI</th>
												<th>Nombres y Apellidos</th>
												<th>Certificación</th>
												<th>Calificación</th>
												<th>Nro de Certificado</th>
												<th>Empresa / Titular</th>
												<th>Fecha de Emisión</th>
												<th>Fecha de Vencimiento</th>
												<th>Condición</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$buscar = utf8_decode($_POST["txtbuscar"]);

											$query = "Select u.sUsuDni, u.sUsuLogin, c.nCertNombre, c.nCertCalificacion, c.nCertCodigo, u.sUsuEmpresaTitular,c.nCertFechaEmision, c.nCertFechaVencimiento, c.nCertEstado ";
											$query .= "FROM usuario u INNER JOIN certificados c ON u.Usuario_Id=c.Usuario_Id ";
											$query .= " WHERE u.sUsuDni like '%$buscar%' or u.sUsuLogin like '%$buscar%'";

											$resultado = $con->query($query);
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
														<?= utf8_encode($rows['nCertFechaVencimiento']) ?>
													</td>
													<td>
                                                        <?php                
                                                            if(utf8_encode($rows['nCertEstado']==1)){                        
                                                                print '<div class="badge badge-success">Habilitado</div>';
                                                            }else{
                                                                print '<div class="badge badge-danger">Inhabilitado</div>';
                                                            }                
                                                        ?>
                                                    </td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								<?php } ?>
							</div>
						<?php
                            print '</div>';
                        ?>
                    
                        <?php    
                            if($v_btnbuscar=="BuscarEquipo"){
                                print '<div class="cont-engresado" id="v_equipo" style="display:block">';
                            }else if($v_btnbuscar=="BuscarAlumno"){
                                print '<div class="cont-engresado" id="v_equipo" style="display:none">';
                            }
                        ?>
							
                            <form class="cont-inputs_buscar" id="frmBuscar" method="post" onSubmit="return validarForm(this)">
								<div class="union-form">
									<input class="form-control input-search" type="search" value="" id="txtbuscar" name="txtbuscar" placeholder="Buscar por PLACA y/o NRO DE SERIE" required>
									<input type="submit" class="btn-icon-text" name="btnbuscar" value="BuscarEquipo">
								</div>
							</form>
                        
                        
							<div id="mostrar_lista_alumnos">
								<?php
								require_once("conexion.php");
								$boton = !empty($_POST['btnbuscar']);
								if ($boton) {
								?>
									<table id="example" class="table table-bordered" style="width:100%">
										<thead class="thead-dark table__head">
											<tr>
												<th>PLACA / IDENTIFICACIÓN</th>
												<th>Tipo de Equipo</th>
												<th>Marca / Modelo</th>
												<th>Nro Serie</th>
												<th>Capacidad</th>
												<th>Nro de Certificado</th>
												<th>Empresa / Titular</th>
												<th>Fecha de Emisión</th>
                                                <th>Fecha de Vencimiento</th>
                                                <th>Condición</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$buscar = utf8_decode($_POST["txtbuscar"]);

											$query = "Select e.sEquPlaca, e.sEquTipoEquipo , e.sEquMarcaModelo, e.sEquNroSerie, e.sEquCapacidad, c.nCertCodigo, e.sEquEmpresaTitular, c.nCertFechaEmision, c.nCertFechaVencimiento, c.nCertEstado ";
											$query .= "from equipos e INNER JOIN certificados c ON e.Equipo_Id=c.Equipo_Id ";
											$query .= " WHERE e.sEquPlaca like '%$buscar%' or e.sEquNroSerie like '%$buscar%'";

											$resultado = $con->query($query);
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
														<?= utf8_encode($rows['nCertFechaVencimiento']) ?>
													</td>
													<td>
                                                        <?php                
                                                            if(utf8_encode($rows['nCertEstado']==1)){                        
                                                                print '<div class="badge badge-success">Habilitado</div>';
                                                            }else{
                                                                print '<div class="badge badge-danger">Inhabilitado</div>';
                                                            }                
                                                        ?>
                                                    </td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								<?php } ?>
							</div>
				        <?php
                            print '</div>';
                        ?>
					</section>
				</div>
			</div>
			<br>
		</div>
	</div>
	<?php include("_footer.php") ?>
</body>

</html>

<script>
	$(document).ready(function() {        
		$("input[type='radio']").click(function() {
			var rValue = $("input[name='tipoCertificado']:checked").val();
			if (rValue) {
				$("#v_alumno").css({'display': 'none'});
				$("#v_equipo").css({'display': 'none'});
				$("#v_" + rValue).css({'display': 'block'});
			}
		});
	});

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
</script>