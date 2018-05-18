<h2>TEST</h2> 

<div class="card mb-3">
        <div class="card-header">
          <h3 style="padding-top: 2px; text-align: center;">Tracing Seqment</h3>
          </div>
        <div class="grid">

	<div class="col-sm-12">
<div class="col-sm-3">
 </div>
<center>
<div class="col-lg-6">
                    <div class="card-body card-block">
                        <form action="<?php echo base_url()?><?php echo $role .'/search'?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                            <div style="text-align:left " class="col-12 col-md-8"><input type="text" id="hf-email" name="search" placeholder="Masukkan ID Pelanggan" class="form-control"></div>

														<button type="submit" name="submit" class="btn btn-primary">
                          <i class="fa fa-dot-circle-o"></i> Add
                        </button>
												  </div>
                        
                          
  
                    </div>
                  </form>
									</div>
									

          <div class="table-responsive">
          	<table class="table table-bordered tabel-striped">
          		<thead>
          			<tr>
          				<th style="background-color: #262626; color: white; text-align: right; width: 50%">DATA</th>
          				<th style="background-color: #262626; color: white; width: 50%">ISI</th>
          			</tr>
          		</thead>
          		<tbody>
							
          			<tr>
          				<td style="text-align: right;">Nama Pelanggan</td>
          				<td><?php echo $search[0]->nama ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">Lokasi</td>
          				<td><?php echo $search[0]->lokasi ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">OPERATION DATE</td>
          				<td><?php echo $search[0]->operationDate ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">ODP ID PORT</td>
          				<td><?php echo $search[0]->odpIDPORT ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">S/N MODEM</td>
          				<td><?php echo $search[0]->noModem ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">INT</td>
          				<td><?php echo $search[0]->noInternet ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">TLP</td>
          				<td><?php echo $search[0]->noTelepon ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">TV</td>
          				<td><?php echo $search[0]->noTelevisi ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">EQP.IP</td>
          				<td><?php echo $search[0]->eqpIP ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">EQPPORT</td>
          				<td><?php echo $search[0]->eqpPORT ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">EQP.TERM</td>
          				<td><?php echo $search[0]->eqpTERM ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">X-CONNECT CABLE</td>
          				<td><?php echo $search[0]->xConnectCable ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">OSP TERM</td>
          				<td><?php echo $search[0]->ospTerm ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">FEEDER CABLE</td>
          				<td><?php echo $search[0]->feederCable ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">PRIMARY FIBER CABLE</td>
          				<td><?php echo $search[0]->primaryFiberCable ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">FILE ABD OSP</td>
          				<td><?php echo $search[0]->fileABDOSP ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">LOSS CORE (dB)</td>
          				<td><?php echo $search[0]->lossCore ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">ODP KOORD.</td>
          				<td><?php echo $search[0]->odpKordX ?>, <?php echo $search[0]->odpKordY ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">PORT ODC-IN</td>
          				<td><?php echo $search[0]->odcPORTIN ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">ODC SP CABLE-IN</td>
          				<td><?php echo $search[0]->xConnectODCspin ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">ODC SP CABLE-OUT</td>
          				<td><?php echo $search[0]->xConnectODCspout ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">PORT ODC-OUT</td>
          				<td><?php echo $search[0]->odcPORTOUT ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">DISTRIBUTION CABLE</td>
          				<td><?php echo $search[0]->distributionCable ?></td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">FILE ABD DS</td>
          				<td><?php echo $search[0]->fileABDODC ?></td>
          			</tr>

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