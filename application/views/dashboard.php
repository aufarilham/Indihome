<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © IndiHome Fiber 2018</small>
        </div>
      </div>
    </footer>

<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.js"></script>
<script src="<?php echo base_url();?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url()?>assets/js/order.js"></script> 
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    
    <!-- Custom scripts for all pages-->
    <!-- Custom scripts for this page-->

    
	
     <!-- Icon Cards-->

<?php $roles = $this->session->userdata('loggedin')['role']; ?>
<?php
/* Mengambil query report*/
foreach($ea as $result){
$bulanEA = array(
        '1' => 'Januari',
        '2' => 'Februari',
        '3' => 'Maret',
        '4' => 'April',
        '5' => 'Mei',
        '6' => 'Juni',
        '7' => 'Juli',
        '8' => 'Agustus',
        '9' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember',
);





$bulan[] = $bulanEA[$result->bulan];
$valueEA[] = (float)( $result->nilai); //ambil nilai
}

foreach($pelanggan as $result){
  
  
  $bulan[] = $bulanEA[$result->bulan];
  $valuePelanggan[] = (float)( $result->nilai); //ambil nilai
    
}


foreach($oa as $result){
  
  
  
  
  
  $bulan[] = $bulanEA[$result->bulan];
  $valueOA[] = (float)( $result->nilai); //ambil nilai
  }
  foreach($odc as $result){
  
  
  
  
  
    $bulan[] = $bulanEA[$result->bulan];
    $valueODC[] = (float)( $result->nilai); //ambil nilai
    }
    foreach($odp as $result){
  
  
  
  
  
      $bulan[] = $bulanEA[$result->bulan];
      $valueODP[] = (float)( $result->nilai); //ambil nilai
      }
  
/* end mengambil query*/

 ?>
     <div class="row">

<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-primary o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-list"></i>
      </div>
      <div class="mr-5">
      <?php $num1 = $this->db->count_all_results('OA');
              if(empty($num1)) {
                echo '0';
              } else {
                echo $num1;
              } ?> OA Terpasang
      </div>
    </div>
   
            <a class="card-footer text-white clearfix small z-1" href="<?php if($roles != 6 ) {?><?php base_url()?><?php echo $role .'/manageOA'?><?php }?>">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>

<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-success o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-list"></i>
      </div>
      <div class="mr-5">
      <?php $num1 = $this->db->count_all_results('ODC');
              if(empty($num1)) {
                echo '0';
              } else {
                echo $num1;
              } ?> ODC Terpasang
      </div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="<?php if($roles != 6 ) {?><?php base_url()?><?php echo $role .'/manageDC'?><?php }?>">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>


<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-warning o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-list"></i>
      </div>
      <div class="mr-5">
      <?php $num1 = $this->db->count_all_results('ODP');
              if(empty($num1)) {
                echo '0';
              } else {
                echo $num1;
              } ?> ODP Terpasang
      </div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="<?php if($roles != 6 ) {?><?php base_url()?><?php echo $role .'/manageODP'?><?php }?>"">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>
<div class="col-xl-3 col-sm-6 mb-3">
  <div class="card text-white bg-danger o-hidden h-100">
    <div class="card-body">
      <div class="card-body-icon">
        <i class="fa fa-fw fa-user"></i>
      </div>
      <div class="mr-5">
      <?php $num1 = $this->db->count_all_results('pelanggan');
              if(empty($num1)) {
                echo '0';
              } else {
                echo $num1;
              } ?> Pelanggan Mendaftar
      </div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="<?php base_url()?><?php echo $role .'/managePelanggan'?>">
      <span class="float-left">View Details</span>
      <span class="float-right">
        <i class="fa fa-angle-right"></i>
      </span>
    </a>
  </div>
</div>


<div></div>



     

        <div class="col-md-6 col-sm-12">
                                    <div id="reports" ></div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                    <div id="report"></div>
                                    </div>
                                    
           
        </div>                
        
              

            






<script type="text/javascript">
$(function () {
$('#report').highcharts({
chart: {
    type: 'line',
    margin: 75,
    options3d: {
        enabled: false,
        alpha: 10,
        beta: 25,
        depth: 70
    }
},
title: {
    text: 'Statistik Jumlah Pelanggan',
    style: {
            fontSize: '18px',
            fontFamily: 'Verdana, sans-serif'
    }
},
subtitle: {
   text: 'per Bulan',
   style: {
            fontSize: '15px',
            fontFamily: 'Verdana, sans-serif'
    }
},
plotOptions: {
    column: {
        depth: 25
    }
},
credits: {
    enabled: false
},
xAxis: {
    categories:  <?php echo json_encode($bulan);?>
},
exporting: { 
    enabled: false 
},
yAxis: {
    title: {
        text: 'Jumlah'
    },
},
tooltip: {
     formatter: function() {
         return 'Nilai untuk Bulan <b>' + this.x + '</b> adalah <b>' + Highcharts.numberFormat(this.y,0) + '</b>, di '+ this.series.name;
     }
  },
series: [{
    name: 'Pelanggan',
    data: <?php echo json_encode($valuePelanggan);?>,
    shadow : true,
    dataLabels: {
        enabled: true,
        color: '#123456',
        align: 'center',
        formatter: function() {
             return Highcharts.numberFormat(this.y, 0);
        }, // one decimal
        y: 0, // 10 pixels down from the top
        style: {
            fontSize: '13px',
            fontFamily: 'Verdana, sans-serif'
        }
    }
}]
});
});

$(function () {
$('#reports').highcharts({
chart: {
    type: 'column',
    margin: 75,
    options3d: {
        enabled: false,
        alpha: 10,
        beta: 25,
        depth: 70
    }
},
title: {
    text: 'Statistik Jumlah Pemasangan EA OA ODC ODP',
    style: {
            fontSize: '18px',
            fontFamily: 'Verdana, sans-serif'
    }
},
subtitle: {
   text: 'per Bulan',
   style: {
            fontSize: '15px',
            fontFamily: 'Verdana, sans-serif'
    }
},
plotOptions: {
    column: {
        depth: 25
    }
},
credits: {
    enabled: false
},
xAxis: {
    categories:  <?php echo json_encode($bulan);?>
},
exporting: { 
    enabled: false 
},
yAxis: {
    title: {
        text: 'Jumlah'
    },
},
tooltip: {
     formatter: function() {
         return 'Nilai untuk Bulan <b>' + this.x + '</b> adalah <b>' + Highcharts.numberFormat(this.y,0) + '</b>, di '+ this.series.name;
     }
  },
series: [{
    name: 'EA',
    data: <?php echo json_encode($valueEA);?>,
    shadow : true,
    dataLabels: {
        enabled: true,
        color: '#123456',
        align: 'center',
        formatter: function() {
             return Highcharts.numberFormat(this.y, 0);
        }, // one decimal
        y: 0, // 10 pixels down from the top
        style: {
            fontSize: '13px',
            fontFamily: 'Verdana, sans-serif'
        }
    }
}, {
    name: 'OA',
    data: <?php echo json_encode($valueOA);?>,
    shadow : true,
    dataLabels: {
        enabled: true,
        color: '#123456',
        align: 'center',
        formatter: function() {
             return Highcharts.numberFormat(this.y, 0);
        }, // one decimal
        y: 0, // 10 pixels down from the top
        style: {
            fontSize: '13px',
            fontFamily: 'Verdana, sans-serif'
        }
    }
}, {
    name: 'ODC',
    data: <?php echo json_encode($valueODC);?>,
    shadow : true,
    dataLabels: {
        enabled: true,
        color: '#097555',
        align: 'center',
        formatter: function() {
             return Highcharts.numberFormat(this.y, 0);
        }, // one decimal
        y: 0, // 10 pixels down from the top
        style: {
            fontSize: '13px',
            fontFamily: 'Verdana, sans-serif'
        }
    }
} , {
    name: 'ODP',
    data: <?php echo json_encode($valueODP);?>,
    shadow : true,
    dataLabels: {
        enabled: true,
        color: '#123456',
        align: 'center',
        formatter: function() {
             return Highcharts.numberFormat(this.y, 0);
        }, // one decimal
        y: 0, // 10 pixels down from the top
        style: {
            fontSize: '13px',
            fontFamily: 'Verdana, sans-serif'
        }
    }
}
]
});
});

</script>
