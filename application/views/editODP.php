<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-coffee"></i>   <?php echo $title; ?></div>
        <div class="card-body">
          <div class="demo-grid" style="padding:20px">
            <form name ="form" action="<?php echo site_url('asman/updateOA/'.$odp[0]->xConnectCable)?>" method="POST" enctype="multipart/form-data">

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
                 <td style="padding: 5px">odpSPIN</td>
                  <td style="padding: 5px"><input value="<?php echo $odp[0]->odpSPIN ?>" class="form-control" type="text" name="odpSPIN" required readonly /></td>
                </tr>
                  <tr>
                 <td style="padding: 5px">odpIDPORT</td>
                  <td style="padding: 5px"><input value="<?php echo $odp[0]->odpIDPORT ?>" class="form-control" type="text" name="odpIDPORT" required readonly /></td>
                </tr>
                <tr>
                  <td style="padding: 5px">kondisi</td>
                  <td style="padding: 5px"><input value="<?php echo $odp[0]->kondisi ?>" class="form-control" type="text" name="kondisi" required/></td>
                </tr>
                <tr>
                  <td style="padding: 5px">odpName</td>
                  <td style="padding: 5px"><input value="<?php echo $odp[0]->odpName ?>" class="form-control" type="text" name="odpName" required/></td>
                </tr>
                <tr>
                  <td style="padding: 5px">noModem</td>
				  <td style="padding: 5px"><input value="<?php echo $odp[0]->noModem ?>" class="form-control" type="text" name="noModem" required/></td>
                </tr>
                <tr>
                  <td style="padding: 5px">noInternet</td>
				  <td style="padding: 5px"><input value="<?php echo $odp[0]->noInternet ?>" class="form-control" type="text" name="nointernet" required/></td>
                </tr>
                <tr>
                  <td style="padding: 5px">noTelepon</td>
				  <td style="padding: 5px"><input value="<?php echo $odp[0]->noTelepon ?>" class="form-control" type="text" name="noTelepon" required/></td>
                </tr>
                  <tr>
                  <td style="padding: 5px">pelangganID</td>
				  <td style="padding: 5px"><input value="<?php echo $odp[0]->pelangganID ?>" class="form-control" type="text" name="pelangganID" required/></td>
				</tr>
        <tr>
                  <td style="padding: 5px">operationDate</td>
				  <td style="padding: 5px"><input value="<?php echo $odp[0]->operationDate ?>" class="form-control" type="text" name="operationDate" required/></td>
				</tr>
        
                  
                <tr style="padding: 5px  border: 1px solid black;
  border-collapse: collapse";>
                  <td></td>
                  <td style="padding: 5px" colspan="1"> <input class="btn btn-primary" type="submit" name="submit" value="Update OA" /></td>
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



    </script>