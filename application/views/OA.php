<!-- Example DataTables Card-->


      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>List of Menu</div>
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
                  <th>ospTerm</th>
                  <th>feederCable</th>
                  <th>primaryFC</th>
                  <th>lossCore</th>
                  <th>odcPortIn</th>
				  <th>xConnectCable</th>
				  <th>action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if(!empty($OA)) {
                  foreach ($OA as $m) { ?>
                <tr>
                  
                  <td><?php echo $m['ospTerm'] ?></td>
                  <td><?php echo $m['feederCable']; ?></td>
                  <td><?php echo $m['primaryFC']; ?></td>
				  <td><?php echo $m['lossCore']; ?></td>
				  <td><?php echo $m['odcPortIn']; ?></td>
				  <td><?php echo $m['xConnectCable']; ?></td>
                  <td>
                    <p><a href="<?php echo site_url('admin/Dashboard/editOA/'.$m['ospTerm'])?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                     <a href="<?php echo site_url('admin/Dashboard/deletemenu/'.$m['ospTerm'])?>" onclick="javascript:confirmationDelete($(this));return false;"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a></p>
                  </td>
                </tr>
                <?php }
              }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
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