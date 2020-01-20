<div class="col-12">
    <div class="table-responsive w-100" >
        <table id="data" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

            <thead>
                <tr class="bg-dark text-white">

                    <!-- <th class="text-right">Id</th> -->

                    <th class="text-right">Código Certificado</th>

                    <th class="text-right">Nombre Certificado</th>

                    <th class="text-right">Apellidos y Nombres</th>

                    <th class="text-right">E-mail</th>

                    <th class="text-right">DNI</th>

                    <!-- <th class="text-right"></th> -->

                </tr>

            </thead>

            <tbody>

                <?php if ($LstEntidad) {                        
                    foreach ($LstEntidad as $key => $listar) {                      
                    ?>

                <tr>
                    <td>
                        <?php echo $listar['nCertCodigo'] ?>
                    </td>

                    <td>
                        <?php echo $listar['nCertNombre'] ?>
                    </td>

                    <td>
                    <?php 
                        if($LstUsuario) { 

                            foreach ($LstUsuario as $key => $nombre) {     
                                if ($listar['Usuario_Id']==$nombre['Usuario_Id']){
                                    echo $nombre['sUsuLogin'];
                                }
                            }
                        }
                    ?>
                    </td>

                    <td>
                    <?php 
                        if($LstUsuario) { 

                            foreach ($LstUsuario as $key => $nombre) {     
                            if ($listar['Usuario_Id']==$nombre['Usuario_Id']){
                                echo $nombre['sUsuEmail'];
                            }
                            }
                        }
                    ?>
                    </td>
                    <td>
                    <?php 
                        if($LstUsuario) { 

                            foreach ($LstUsuario as $key => $nombre) {     
                            if ($listar['Usuario_Id']==$nombre['Usuario_Id']){
                                echo $nombre['sUsuDni'];
                            }
                            }
                        }
                    ?>
                    </td>
                </tr>
                <?php }} ?>

            </tbody>

        </table>
    </div> 
</div>