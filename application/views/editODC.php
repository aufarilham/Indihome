<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-coffee"></i>   <?php echo $title; ?></div>
        <div class="card-body">
          <div class="demo-grid" style="padding:20px">
            <form name ="form" action="<?php echo site_url('asman/updateOA/'.$odc[0]->xConnectCable)?>" method="POST" enctype="multipart/form-data">

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
              <table style="font-size: 14px" width="100%">
              <tr>
                 <td style="padding: 5px">xConnectODCspin</td>
                  <td style="padding: 5px"><input value="<?php echo $odc[0]->xConnectODCspin ?>" class="form-control" type="text" name="xConnectODCspin" required readonly /></td>
                </tr>
                  <tr>
                 <td style="padding: 5px">xConnectODCspout</td>
                  <td style="padding: 5px"><input value="<?php echo $odc[0]->xConnectODCspout ?>" class="form-control" type="text" name="xConnectODCspout" required readonly /></td>
                </tr>
                <tr>
                  <td style="padding: 5px">odcPORTOUT</td>
                  <td style="padding: 5px"><input value="<?php echo $odc[0]->odcPORTOUT ?>" class="form-control" type="text" name="odcPORTOUT" required/></td>
                </tr>
                <tr>
                  <td style="padding: 5px">distributionCable</td>
                  <td style="padding: 5px"><input value="<?php echo $odc[0]->distributionCable ?>" class="form-control" type="text" name="distributionCable" required/></td>
                </tr>
                <tr>
                  <td style="padding: 5px">fileABDODC</td>
				  <td style="padding: 5px"><input value="<?php echo $odc[0]->fileABDODC ?>" class="form-control" type="text" name="fileABDODC" required/></td>
                </tr>
                  <tr>
                  <td style="padding: 5px">odpAddress</td>
				  <td style="padding: 5px"><input value="<?php echo $odc[0]->odpAddress ?>" class="form-control" type="text" name="odpAddress" required/></td>
				</tr>
        <tr>
                  <td style="padding: 5px">odpKordX</td>
				  <td style="padding: 5px"><input value="<?php echo $odc[0]->odpKordX ?>" id="x" class="form-control" type="text" name="odpKordX" required/></td>
				</tr>
        <tr>
                  <td style="padding: 5px">odpKordY</td>
				  <td style="padding: 5px"><input value="<?php echo $odc[0]->odpKordY ?>" id="y" class="form-control" type="text" name="odpKordY" required/></td>
				</tr>
                  <tr>
                  <td style="padding: 5px">odpSPIN</td>
				  <td style="padding: 5px"><input value="<?php echo $odc[0]->odpSPIN ?>"  class="form-control" type="text" name="odpSPIN" required/></td></tr>
				
				
                <tr style="padding: 5px  border: 1px solid black;
  border-collapse: collapse";>
                  <td></td>
                  <td style="padding: 5px" colspan="1"><input class="btn btn-primary" type="button" onclick="getLocation()" value="get Kordinat" /> <input class="btn btn-primary" type="submit" name="submit" value="Update OA" /></td>
                </tr>
              </table>
            </form>
          </div>
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