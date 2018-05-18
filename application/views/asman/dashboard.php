<link href="<?php echo base_url()?>assets/images/Indihome_Icon.png" rel="shortcut icon">

     <!-- Icon Cards-->
       <div class="row">

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <div class="mr-5">
                 User Terdaftar
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php base_url()?>Dashboard/manageUser">
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
               Menu Terdaftarkan
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php base_url()?>Dashboard/manageMenu">
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
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">
                 Pesanan Diterima
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php base_url()?>Dashboard/manageOrders">
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
                <i class="fa fa-fw fa-coffee"></i>
              </div>
              <div class="mr-5">
                Menu Terjual
              </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?php base_url()?>Dashboard/manageOrders">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

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
        foreach($oa as $result2){
          $bulanOA = array(
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

		
		$bulan[] = $bulanEA[$result->bulan]; //ambil bulan
    $value[] = (float) $result->nilai; //ambil nilai
		$value2[] = (float) ($result2->nilai2); //ambil nilai
    }
    /* end mengambil query*/
     
?>

        <div id = "report">
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
            text: 'Statistik Jumlah Komentar',
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
            name: 'Statistik Data',
            data: <?php echo json_encode($value);?>,
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
        }, 
		{
            name: 'Statistik Data2',
            data: <?php echo json_encode($value2);?>,
            shadow : true,
            dataLabels: {
                enabled: true,
                color: '#211456',
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


