<!-- Example DataTables Card-->
<div class="card-body">
          <div class="demo-grid" style="padding:1px">
            <form action="<?php echo base_url()?>asman/insertUsers" method="post"  enctype="multipart/form-data"> 
                <td style="padding: 5px" colspan="1"> <input class="btn btn-primary" type="submit" name="submit" value="Add User" /></td>
    </form>
    </div>
</div>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>List of Users</div>
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
                  <th>userID</th>
                    <th>username</th>
                  <th>email</th>
                  <th>role</th>
                  <th>created</th>
                  <th>lastLogin</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if(!empty($users)) {
                  foreach ($users as $m) { ?>
                <tr>
                  <td><?php echo $m['userID']; ?></td>
                  <td><?php echo $m['username'] ?></td>
                  <td><?php echo $m['email']; ?></td>
                  <td><?php echo $m['role']; ?></td>
                  <td><?php echo $m['created']; ?></td>
                  <td><?php echo $m['lastlogin']; ?></td>
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