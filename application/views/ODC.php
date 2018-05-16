<!-- Example DataTables Card-->
<div class="card-body">
          <div class="demo-grid" style="padding:1px">
            <form action="<?php echo base_url().$role ?>/insertODC" method="post"  enctype="multipart/form-data"> 
                <td style="padding: 5px" colspan="1"> <input class="btn btn-primary" type="submit" name="submit" value="Add ODC" /></td>
    </form>
    </div>
</div>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>List of ODC</div>
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
                  <th>xConnectODCspin</th>
                  <th>xConnectODCspout</th>
                  <th>odcPORTOUT</th>
                  <th>distributionCable</th>
                    <th>fileABDODC</th>
                    <th>odpAddress</th>
                    <th>odpKordX</th>
                    <th>odpKordY</th>
                    <th>odpSPIN</th>
				  <th>action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if(!empty($ODC)) {
                  foreach ($ODC as $m) { ?>
                <tr>
                  <td><?php echo $m['xConnectODCspin']; ?></td>
                  <td><?php echo $m['xConnectODCspout'] ?></td>
                  <td><?php echo $m['odcPORTOUT']; ?></td>
                  <td><?php echo $m['distributionCable']; ?></td>
                    <td><?php echo $m['fileABDODC']; ?></td>
                    <td><?php echo $m['odpAddress']; ?></td>
                    <td><?php echo $m['odpKordX']; ?></td>
                    <td><?php echo $m['odpKordY']; ?></td>
                    <td><?php echo $m['odpSPIN']; ?></td>
				  
				  
                    <td>
                    <p><a href="<?php echo base_url().$role.'/editODC/'.$m['xConnectODCspin'].'/'.$m['xConnectODCspout'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></br>
                    <a href="<?php echo base_url().$role.'/showODCKordinat/'.$m['xConnectODCspin'].'/'.$m['xConnectODCspout'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i> gMaps</a></br>
                     <a href="<?php echo base_url().$role.'/deleteODC/'.$m['xConnectODCspin'].'/'.$m['xConnectODCspout'] ?>" onclick="javascript:confirmationDelete($(this));return false;"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a></p>
                     
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