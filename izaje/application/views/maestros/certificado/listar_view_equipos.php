<div class="row">

  <div class="col-12">

    <div class="table-responsive w-100">

      <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

        <thead>
          <tr class="bg-dark text-white">

            <th class="text-left">COD.CERTIFICADO</th>

            <th class="text-left">PLACA </th>
              
            <th class="text-left">NRO DE SERIE </th>

            <th class="text-left">FECHA DE EMISION</th>
              
            <th class="text-left">FECHA DE VENCIMIENTO</th>
              
            <th class="text-left">CONDICION</th>

            <th class="text-left">ACCIONES</th>

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
              <?php echo $listar['sEquPlaca'] ?>
            </td>
              
            <td>
              <?php echo $listar['sEquNroSerie'] ?>
            </td>
              
            <td>
              <?php echo $listar['nCertFechaEmision'] ?>
            </td>
            <td class="text-center">
              <?php //echo $listar['nCertFechaVencimiento']
                
                    $nueva_fecha_ven = strtotime('+1 Year', strtotime($listar['nCertFechaEmision']));
                    $nueva_fecha_ven = date('Y-m-d', $nueva_fecha_ven);
                
                    echo $nueva_fecha_ven;
              ?>                
            </td>
              
            <td class="text-center">
                <?php              
                    $fecha_hoy = date('Y-m-d');    
                
                    $nueva_fecha_ven = strtotime('+1 Year', strtotime($listar['nCertFechaEmision']));
                    $nueva_fecha_ven = date('Y-m-d', $nueva_fecha_ven);
                
                    if($nueva_fecha_ven > $fecha_hoy){
                        print '<div class="badge badge-success">Vigente</div>';
                    }else if($nueva_fecha_ven <= $fecha_hoy){
                        print '<div class="badge badge-danger">Vencido</div>';
                    }       
               ?>
            </td>                         
            <td>
              <a href="#" onclick="ver_equipos_certificados('<?php echo $listar['certificado_id'] ?>');"><i class="fa fa-edit"></i></a>
              <a href="#" onclick="eliminar('<?php echo $listar['certificado_id'] ?>');"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
            
         <?php }} ?>

        </tbody>

      </table>

    </div>

  </div>

</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"

  data-vivaldi-spatnav-clickable="1" aria-hidden="true" style="display: none;">

  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title mt-0" id="myLargeModalLabel">Vista previa</h5>

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

      </div>

      <div class="modal-body">

        <iframe id="vistaprevia" class="col-12" src="" height="800px"></iframe>

      </div>

    </div>

    <!-- /.modal-content -->

  </div>

  <!-- /.modal-dialog -->

</div>




<script src="<?php echo URL_PAGES ?>datatables.init.js"></script><!-- App js -->

<script>
  $('#datatable').dataTable({

    "pageLength": 50

  });

  function verarchivo(url) {

    //document.getElementById('vistaprevia').src = "http://docs.google.com/gview?url="+url;    

    document.getElementById('vistaprevia').src = url;

  }
</script>
