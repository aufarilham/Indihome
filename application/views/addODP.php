<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-coffee"></i>   <?php echo $title; ?></div>
        <div class="card-body">
          <div class="demo-grid" style="padding:20px">
            <form action="<?php echo base_url()?><?php echo $role; ?>/addODP" method="POST" enctype="multipart/form-data">

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
              <table style="font-size: 12px" width="100%">
              
                <tr>
                  <td style="padding: 5px">odpSPIN</td>
                  <td style="padding: 5px"><input class="form-control" type="text" name="odpSPIN" placeholder="" required/></td>
                </tr>
                <tr>
                  <td style="padding: 5px">odpIDPORT</td>
                  <td style="padding: 5px"><input class="form-control" type="text" name="odpIDPORT" placeholder="" required/></td>
                </tr>
                  <tr>
                  <td style="padding: 5px">kondisi</td>
                  <td style="padding: 5px"><input class="form-control" type="text" name="kondisi" placeholder="" required/></td>
                </tr>
                  <tr>
                  <td style="padding: 5px">odpName</td>
                  <td style="padding: 5px"><input class="form-control" type="text" name="odpName" placeholder="" required/></td>
                </tr>
                  <tr>
                  <td style="padding: 5px">noModem</td>
                  <td style="padding: 5px"><input class="form-control" type="text" name="noModem" placeholder="" required/></td>
                </tr>

                  <tr>
                  <td style="padding: 5px">noInternet</td>
                  <td style="padding: 5px"><input class="form-control" type="text" name="noInternet" placeholder="" required/></td>
                </tr>
                  <tr>
                  <td style="padding: 5px">noTelepon</td>
                  <td style="padding: 5px"><input class="form-control"  type="text" name="noTelepon" placeholder="" required/></td>
                </tr>
                <tr>
                  <td style="padding: 5px">noTelevisi</td>
                  <td style="padding: 5px"><input class="form-control"  type="text" name="noTelevisi" placeholder="" required/></td>
                </tr>
                  <tr>
                  <td style="padding: 5px">pelangganID</td>
                  <td style="padding: 5px"><input class="form-control" type="text" name="pelangganID" placeholder="" required/></td>
                </tr>
                
                <tr>
                  <td style="padding: 5px">operationDate</td>
                  <td style="padding: 5px"><input class="form-control" type="text" name="operationDate" placeholder="" required/></td>
                </tr>
                <tr style="padding: 5px">
                  <td></td>
                  <td style="padding: 5px" colspan="1"><input class="btn btn-primary" type="submit" name="submit" value="Add ODC" /></td>
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