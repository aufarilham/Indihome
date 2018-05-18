<div class="col-sm-12">
<div class="col-sm-3"> </div>
<center>
<div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Add ODP</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo base_url()?><?php echo $role .'/addODP'?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                            <div class="col col-md-4"><label for="select" class=" form-control-label">odpSPIN</label></div>
                            <div class="col-12 col-md-8">

                              <select name="odpSPIN" id="select" class="form-control">
                              <?php if(!empty($dataODC)) {foreach ($dataODC as $m) { ?>
                
                              
                              <option value="<?php echo $m['odpSPIN']; ?>"><?php echo $m['odpSPIN']; ?></option>
                              <?php }
              }?>
                              </select>
                            </div>
                          </div>
                    
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">odpIDPORT</label></div>
                            <div style="text-align:left " class="col-12 col-md-8">
                              <input type="text" id="hf-email" name="odpIDPORT" placeholder="" class="form-control" required="required"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-4"><label for="select" class=" form-control-label" >kondisi</label></div>
                            <div class="col-12 col-md-8">
                              <select name="kondisi" id="select" class="form-control" required="required">
                              <option value="ISI">ISI</option>
                              <option value="IDLE">IDLE</option>
                              <option value="RUSAK">RUSAK</option>
                              </select>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">odpName</label></div>
                            <div style="text-align:left " class="col-12 col-md-8">
                              <input type="text" id="hf-email" name="odpName" placeholder="" class="form-control" required="required"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">noModem</label></div>
                            <div style="text-align:left " class="col-12 col-md-8">
                              <input  type="text" id="hf-email" name="noModem" placeholder="" class="form-control" required="required"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">noInternet</label></div>
                            <div style="text-align:left " class="col-12 col-md-8">
                              <input  type="text" id="hf-email" name="noInternet" placeholder="" class="form-control" required="required"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">noTelepon</label></div>
                            <div style="text-align:left " class="col-12 col-md-8">
                              <input  type="text" id="hf-email" name="noTelepon" placeholder="" class="form-control" required="required"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">noTelevisi</label></div>
                            <div style="text-align:left " class="col-12 col-md-8">
                              <input  type="text" id="hf-email" name="noTelevisi" placeholder="" class="form-control" required="required"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="select" class=" form-control-label">pelangganID</label></div>
                            <div class="col-12 col-md-8">

                              <select name="pelangganID" id="select" class="form-control" required="required">
                              <?php if(!empty($dataPelanggan)) {foreach ($dataPelanggan as $m) { ?>
                              <option value="<?php echo $m['pelangganID']; ?>"><?php echo $m['pelangganID']; ?></option>
                              <?php }
              }?>
                              </select>
                            </div>
                          </div>
                          
                          
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">operationDate</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="Date" id="hf-email" name="operationDate" placeholder="" class="form-control"></div>
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