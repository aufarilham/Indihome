<div class="col-sm-12">
<div class="col-sm-3"> </div>
<center>
<div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Add Users</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo base_url()?><?php echo $role .'/addUsers'?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        <?php
              if($this->session->flashdata('success')){
                echo '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> '.$this->session->flashdata('success').'.
              </div>';
            } elseif ($this->session->flashdata('error')) {
                echo '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Waduh!</strong> '.$this->session->flashdata('error').'.
              </div>';
            } ?>
                      
                    
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">userID</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input type="text" id="hf-email" name="userID" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">username</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="text" id="hf-email" name="username" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">email</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="text" id="hf-email" name="email" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">password</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="password" id="hf-email" name="password" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="select" class=" form-control-label">role</label></div>
                            <div class="col-12 col-md-8">
                              <select name="role" id="select" class="form-control">
                              <option value=1 >Manager</option>
                              <option value=2 >Asisten Manager</option>
                              <option value=3 >Supervisor</option>
                              <option value=4 >Staff Ahli</option>
                              <option value=5 >Staff</option>
                              <option value=6 >Sales</option>
                              
                              </select>
                            </div>
                          </div>
                          
                        
                      </div>
                      <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm btn-block">
                          <i class="fa fa-dot-circle-o"></i> Add
                        </button>
                      </div>
                    </div>
                  </form>
      
  
                  


          </div>
          </center>
      </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Baleni 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <script type="text/javascript">
    function previewImage() {
      document.getElementById("image-preview").style.display = "block";
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
      oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
      };
    };
    </script>