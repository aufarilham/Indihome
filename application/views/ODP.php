<!-- Example DataTables Card-->
<div class="card-body">
          <div class="demo-grid" style="padding:1px">
            <form action="<?php echo base_url().$role ?>/insertODP" method="post"  enctype="multipart/form-data"> 
                <td style="padding: 5px" colspan="1"> <input class="btn btn-primary" type="submit" name="submit" value="Add ODP" /></td>
    </form>
    </div>
</div>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>List of ODP</div>
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
                  <th>odpSPIN</th>
                  <th>odpIDPORT</th>
                  <th>kondisi</th>
                  <th>odpName</th>
                    <th>noModem</th>
                    <th>noInternet</th>
                    <th>noTelepon</th>
                    <th>noTelevisi</th>
                    <th>pelangganID</th>
                    <th>operationDate</th>
				  <th>action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if(!empty($ODP)) {
                  foreach ($ODP as $m) { ?>
                <tr>
                  <td><?php echo $m['odpSPIN']; ?></td>
                  <td><?php echo $m['odpIDPORT'] ?></td>
                  <td><?php echo $m['kondisi']; ?></td>
                  <td><?php echo $m['odpName']; ?></td>
                    <td><?php echo $m['noModem']; ?></td>
                    <td><?php echo $m['noInternet']; ?></td>
                    <td><?php echo $m['noTelepon']; ?></td>
                    <td><?php echo $m['noTelevisi']; ?></td>
                    <td><?php echo $m['pelangganID']; ?></td>
                    <td><?php echo $m['operationDate']; ?></td>				  
				  
                    <td>
                    <p><a href="<?php echo base_url().$role.'/editODP/'.$m['odpSPIN'].'/'.$m['odpIDPORT'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a><br>
                    
                     <a href="<?php echo base_url().$role.'/deleteODP/'.$m['odpSPIN'].'/'.$m['odpIDPORT'] ?>" onclick="javascript:confirmationDelete($(this));return false;"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a></p>
                     
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