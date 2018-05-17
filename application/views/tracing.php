<div class="card mb-3">
        <div class="card-header">
          <h3 style="padding-top: 2px; text-align: center;">Tracing Seqment</h3>
          </div>
        <div class="card-body">
          <div class="table-responsive">
            
           
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