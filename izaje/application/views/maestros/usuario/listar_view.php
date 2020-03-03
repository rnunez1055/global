<div class="row">

                <div class="col-12">

                  <div class="table-responsive w-100">

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                      <thead>

                        <tr class="bg-dark text-white">

                            <?php if($this->session->userdata('TipoUsuario_di')==1){?>
                            <th class="text-right" >Código</th>
                            <?php }?>

                            <th class="text-right" >Apellidos y Nombres</th>

                            <th class="text-right" >DNI</th>
                            
                            <th class="text-right" >Empresa Titular</th>
                         
                             <?php /*?>
                            <?php if($this->session->userdata('TipoUsuario_di')==1){?>
                            <th class="text-right" >Estado</th>
                            <?php }?>
                             <?php */?>

                            <th class="text-right" >Acciones</th>

                        </tr>

                      </thead>

                      <tbody>

                        <?php if ($LstEntidad) {                        

                        foreach ($LstEntidad as $key => $listar) {
                          if($this->session->userdata('TipoUsuario_di') !=1 && $this->session->userdata('usuario_di') == $listar['Usuario_Id'])  {                         

                        ?> 

                        <tr>

                            <!-- <td><?php //echo $listar['Usuario_Id'] ?></td> -->

                            <td><?php echo $listar['sUsuLogin'] ?></td>

                            <td><?php echo $listar['sUsuDni'] ?></td>
                            
                            <td><?php echo $listar['sUsuEmpresaTitular'] ?></td>
                            
                            <td>

                              <a href="#" onclick="ver('<?php echo $listar['Usuario_Id'] ?>');" ><i class="fa fa-edit"></i></a>

                              <a href="#" onclick="clave('<?php echo $listar['Usuario_Id'] ?>');" ><i class="fas fa-unlock-alt"></i></a>

                            </td>

                        </tr>

                         <?php }else if($this->session->userdata('TipoUsuario_di')==1 && $listar['TipoUsuario_Id']!= 1){?>
                          <tr>

                            <td><?php echo $listar['sUsuCodigo'] ?></td>

                            <td><?php echo $listar['sUsuLogin'] ?></td>

                            <td><?php echo $listar['sUsuDni'] ?></td>
                              
                            <td><?php echo $listar['sUsuEmpresaTitular'] ?></td>

                             <?php /*?><td><?php echo $listar['sUsuEstado'] ?></td><?php */?>                      

                            <td>

                              <a href="#" onclick="ver('<?php echo $listar['Usuario_Id'] ?>');" ><i class="fa fa-edit"></i></a>

                              <a href="#" onclick="eliminarusuario('<?php echo $listar['Usuario_Id'] ?>');" ><i class="fas fa-trash-alt"></i></a>

                              
                            <?php /*?>
                                
                                <a href="#" onclick="clave('<?php echo $listar['Usuario_Id'] ?>');" ><i class="fas fa-unlock-alt"></i></a>
                                
                            <?php */?>

                              <!-- <a href="#" onclick="certificado('<?php //echo $listar['Usuario_Id'] ?>');" >CER</a> -->

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