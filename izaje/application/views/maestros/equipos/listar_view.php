<div class="row">

                <div class="col-12">

                  <div class="table-responsive w-100">
                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                      <thead>

                        <tr class="bg-dark text-white">                            

                            <?php if($this->session->userdata('TipoUsuario_di')==1){?>
                            <th class="text-right" >Código Equipo</th>
                            <?php }?>

                            <th class="text-right" >Placa / Identificación</th>

                            <th class="text-right" >Tipo Equipo</th>

                            <th class="text-right" >Marca / Modelo</th>

                            <th class="text-right" >Nro de Serie</th>
                            
                            <th class="text-right" >Capacidad</th>
                            
                            <th class="text-right" >Empresa Titular</th>
                            
                            <th class="text-right" >Observaciones</th>
                            
                            
                            <?php /*?>
                            
                            <?php if($this->session->userdata('TipoUsuario_di')==1){?>
                            <th class="text-right" >Estado</th>
                            <?php }?>
                            
                             <?php */?>

                            <th class="text-right" ></th>

                        </tr>

                      </thead>

                      <tbody>

                        <?php if ($LstEntidad) {                        

                        foreach ($LstEntidad as $key => $listar) {
                          if($this->session->userdata('TipoUsuario_di') !=1 && $this->session->userdata('usuario_di') == $listar['Usuario_Id'])  {                         

                        ?> 

                        <tr>

                            <!-- <td><?php //echo $listar['Usuario_Id'] ?></td> -->

                            <td><?php echo $listar['sEquCodigo'] ?></td>

                            <td><?php echo $listar['sEquPlaca'] ?></td>

                            <td><?php echo $listar['sEquTipoEquipo'] ?></td>   
                                                     
                            <td><?php echo $listar['sEquMarcaModelo'] ?></td>
                            
                            <td><?php echo $listar['sEquNroSerie'] ?></td>
                            
                            <td><?php echo $listar['sEquCapacidad'] ?></td>
                            
                            <td><?php echo $listar['sEquEmpresaTitular'] ?></td>
                            
                            <td><?php echo $listar['sEquObservaciones'] ?></td>
                            
                             <?php /*?><td><?php echo $listar['nEquEstado'] ?></td>  <?php */?>
                            
                            <td>

                          <a href="#" onclick="ver('<?php echo $listar['Equipo_Id'] ?>');" ><i class="fa fa-edit"></i></a>

                          <a href="#" onclick="clave('<?php echo $listar['Equipo_Id'] ?>');" ><i class="fas fa-unlock-alt"></i></a>

                            </td>

                        </tr>

                         <?php }else if($this->session->userdata('TipoUsuario_di')==1 && $listar['TipoUsuario_Id']!= 1){?>
                          <tr>

                            <td><?php echo $listar['sEquCodigo'] ?></td>

                            <td><?php echo $listar['sEquPlaca'] ?></td>

                            <td><?php echo $listar['sEquTipoEquipo'] ?></td>   
                                                     
                            <td><?php echo $listar['sEquMarcaModelo'] ?></td>
                            
                            <td><?php echo $listar['sEquNroSerie'] ?></td>
                            
                            <td><?php echo $listar['sEquCapacidad'] ?></td>
                            
                            <td><?php echo $listar['sEquEmpresaTitular'] ?></td>
                              
                              <td><?php echo $listar['sEquObservaciones'] ?></td>
                              
                             <?php /*?><td><?php echo $listar['nEquEstado'] ?></td> <?php */?>

                            <td>

                              <a href="#" onclick="ver('<?php echo $listar['Equipo_Id'] ?>');" ><i class="fa fa-edit"></i></a>

                              <a href="#" onclick="eliminar('<?php echo $listar['Equipo_Id'] ?>');" ><i class="fas fa-trash-alt"></i></a>
                                
                            <?php /*?>

                              <a href="#" onclick="clave('<?php echo $listar['Equipo_Id'] ?>');" ><i class="fas fa-unlock-alt"></i></a>
                              
                              <?php */?>

                            </td>

                          </tr>
                        <?php }}} ?>

                      </tbody>

                    </table>
                    

                  </div>

                </div>

              </div>





<script src="<?php echo URL_PAGES ?>datatables.init.js"></script><!-- App js -->

<script>

    

$('#datatable').dataTable( {

  "pageLength": 50

} );

    

</script> 