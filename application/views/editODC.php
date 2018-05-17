<div class="col-sm-12">
<div class="col-sm-3"> </div>
<center>
<div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Add ODC</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="<?php echo base_url()?><?php echo $role .'/updateODC'?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">xConnectODCspin</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input type="text" required readonly value="<?php echo $odc[0]->xConnectODCspin ?>" id="hf-email" name="xConnectODCspin" placeholder="" class="form-control"></div>
                          </div>
                          
                    
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">xConnectODCspout</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input type="text" required readonly value="<?php echo $odc[0]->xConnectODCspout ?>"  id="hf-email" name="xConnectODCspout" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">odcPORTOUT</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input type="text" required value="<?php echo $odc[0]->odcPORTOUT ?>" id="hf-email" name="odcPORTOUT" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">distributionCable</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="text" required value="<?php echo $odc[0]->distributionCable ?>"id="hf-email" name="distributionCable" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">fileABDODC</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="text" required value="<?php echo $odc[0]->fileABDODC ?>"id="hf-email" name="fileABDODC" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">odpAddress</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="text" required value="<?php echo $odc[0]->odpAddress ?>"id="hf-email" name="odpAddress" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">odpKordX</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="text" id="x" required value="<?php echo $odc[0]->odpKordX ?>" name="odpKordX" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">odpKordY</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input type="text" id="y" required value="<?php echo $odc[0]->odpKordY ?>" name="odpKordY" placeholder="" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">odpSPIN</label></div>
                            <div style="text-align:left " class="col-12 col-md-8"><input  type="text" id="hf-email" required value="<?php echo $odc[0]->odpSPIN ?>" name="odpSPIN" placeholder="" class="form-control"></div>
                          </div>
                          
                        
                      </div>
                      <div class="card-footer">

                      <button type="button" onclick="getLocation()" class="btn btn-primary btn-sm btn-block">
                          <i class="fa fa-dot-circle-o"></i> Get Kordinat
                        </button>
                        <button type="submit" name="submit" class="btn btn-primary btn-sm btn-block">
                          <i class="fa fa-dot-circle-o"></i> Update
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
	
	function getLocation() {
    
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 

    }
}

function showPosition(position) {
  document.getElementById("x").value = position.coords.latitude;
  document.getElementById("y").value = position.coords.longitude;
}

    </script>

