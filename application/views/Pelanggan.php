<!-- Example DataTables Card-->
<?php $roles = $this->session->userdata('loggedin')['role']; ?>

   <?php if($roles == 6 ) {?>

<div class="card-body">
          <div class="demo-grid" style="padding:1px">
            <form action="<?php echo base_url()?>asman/insertPelanggan" method="post"  enctype="multipart/form-data"> 
                <td style="padding: 5px" colspan="1"> <input class="btn btn-primary" type="submit" name="submit" value="Add Pelanggan" /></td>
    </form>
    </div>
</div>
<?php }?>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>List of Pelanggan</div>
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
                  <th>pelangganID</th>
                    <th>nama</th>
                  <th>lokasi</th>
                  <?php if($roles == 6 ) {?>
				  <th>action</th>
          <?php }?>
                </tr>
              </thead>
              <tbody>
                <?php
                if(!empty($pelanggan)) {
                  foreach ($pelanggan as $m) { ?>
                <tr>
                  <td><?php echo $m['pelangganID']; ?></td>
                  <td><?php echo $m['nama'] ?></td>
                  <td><?php echo $m['lokasi']; ?></td>
                  <?php $roles = $this->session->userdata('loggedin')['role']; ?>

   <?php if($roles == 6 ) {?>

                  <td>
                    <p><a href="<?php echo base_url().$role.'/editPelanggan/'.$m['pelangganID'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                     <a href="<?php echo base_url().$role.'/deletePelanggan/'.$m['pelangganID'] ?>" onclick="javascript:confirmationDelete($(this));return false;"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</a></p>
                  </td>
                  <?php }?>
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