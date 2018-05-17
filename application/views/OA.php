<!-- Example DataTables Card-->

<a href="<?php echo base_url() .$role?>/insertOA" class="btn btn-primary" role="button">Add OA</a>
                <p></p>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>List of OA</div>
        <div class="card-body">
          <div class="table-responsive">
            <?php
              if($this->session->flashdata('success')){
                echo '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> '.$this->session->flashdata('success').'.
              </div>';
            } ?>
           <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>xConnectCable</th>
                    <th>ospTerm</th>
                  <th>feederCable</th>
                  <th>primaryFC</th>
                  
                  
                    <th>fileABDOSP</th>
                    <th>odcPortIn</th>
                    <th>lossCore</th>
                    <th>xConnectODCspin</th>
				  <th>action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if(!empty($OA)) {
                  foreach ($OA as $m) { ?>
                <tr>
                  <td><?php echo $m['xConnectCable']; ?></td>
                  <td><?php echo $m['ospTerm'] ?></td>
                  <td><?php echo $m['feederCable']; ?></td>
                  <td><?php echo $m['primaryFiberCable']; ?></td>
                    <td><?php echo $m['fileABDOSP']; ?></td>
				  <td><?php echo $m['odcPORTIN']; ?></td>
                    <td><?php echo $m['lossCore']; ?></td>
                    <td><?php echo $m['xConnectODCspin']; ?></td>
				  
				  
                  <td>
                    <p><a href="<?php echo base_url().$role.'/editOA/'.$m['xConnectCable'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                     <a href="<?php echo base_url().$role.'/deleteOA/'.$m['xConnectCable'] ?>" onclick="javascript:confirmationDelete($(this));return false;"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a></p>
                  </td>
                </tr>
                <?php }
              }?>
              </tbody>
            </table>
          </div>
        </div>

         </div>
         <a href="<?php echo base_url() .$role?>/download/OA" class="btn btn-primary" role="button">Download XLS</a>
                <p></p>
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
<script>
  $(document).ready(function(){
    $('#tabel-data').DataTable();
});
  </script>
	
    <script type="text/javascript">
  function confirmationDelete(anchor){
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
  }
</script>