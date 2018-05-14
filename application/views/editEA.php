<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-coffee"></i>   <?php echo $title; ?></div>
        <div class="card-body">
          <div class="demo-grid" style="padding:20px">
            <form action="<?php echo site_url('asman/updateEA/'.$ea[0]->xConnectCable)?>" method="POST" enctype="multipart/form-data">

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
                 <td style="padding: 5px">xConnectCable</td>
                  <td style="padding: 5px"><input value="<?php echo $ea[0]->xConnectCable ?>" class="form-control" type="text" name="xConnectCable" required readonly /></td>
                </tr>
                <tr>
                  <td style="padding: 5px">eqpIP</td>
                  <td style="padding: 5px"><input value="<?php echo $ea[0]->eqpIP ?>" class="form-control" type="text" name="eqpIP" required/></td>
                </tr>
                <tr>
                  <td style="padding: 5px">eqpPORT</td>
                  <td style="padding: 5px"><input value="<?php echo $ea[0]->eqpPORT ?>" class="form-control" type="text" name="eqpPORT" required/></td>
                </tr>
                <tr>
                  <td style="padding: 5px">eqpTERM</td>
				  <td style="padding: 5px"><input value="<?php echo $ea[0]->eqpTERM ?>" class="form-control" type="text" name="eqpTERM" required/></td>
                </tr>
                  
				
                <tr style="padding: 5px">
                  <td></td>
                  <td style="padding: 5px" colspan="1"><input class="btn btn-primary" type="submit" name="submit" value="Update EA" /></td>
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