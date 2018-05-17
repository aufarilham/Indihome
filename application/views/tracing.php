<link href="<?php echo base_url()?>assets/css/tracing.css?version=<?php echo filemtime('bootstrap.min.css'); ?>" rel="stylesheet">

<div class="card mb-3">
        <div class="card-header">
          <h3 style="padding-top: 2px; text-align: center;">Tracing Seqment</h3>
          </div>
        <div class="grid">

    		<form style="margin-top: 20px" action="" method="get" class="search">

      	<div class="form__field">
        		<input type="search" name="search" placeholder="Search here..." class="form__input">
        <input type="submit" value="Search" class="button">
      </div>

    </form>

  </div>
        <div class="card-body">
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
          				<td style="text-align: right;">USER</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">ADDRESS</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">OPERATION DATE</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">ODP SP CABLE-OUT</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">S/N MODEM</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">INT</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">TLP</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">TV</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">EQP.IP</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">EQPPORT</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">EQP.TERM</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">X-CONNECT CABLE</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">OSP TERM</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">FEEDER CABLE</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">PRIMARY FIBER CABLE</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">FILE ABD OSP</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">LOSS CORE (dB)</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">ODC KOORD.</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">PORT ODC-IN</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">ODC SP CABLE-IN</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">ODC SP CABLE-OUT</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">PORT ODC-OUT</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">DISTRIBUTION CABLE</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">FILE ABD DS</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">ODP KOORD.</td>
          				<td>Test2</td>
          			</tr>
          			<tr>
          				<td style="text-align: right;">ODP SP CABLI-IN</td>
          				<td>Test2</td>
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