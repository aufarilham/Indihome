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

      </div>

      <div class="row mb40">
      <div class="col-md-12 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                 <div class="card-header"><i class="fa fa-coffee"></i> Top 5 Menus </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAMA</th>
                                            <th>Alamat</th>
                                            <th>tipe</th>
                                            <th>Manager</th>
                                            
											
                                        </tr>
                                    </thead>
                                    <tbody>
									 <?php foreach ($cabang as $data){?>
									 
                                        <tr>
                                            <td><?php echo $data->CabangID;?></td>
                                            <td><?php echo $data->namaCabang;?></td>
                                            <td><?php echo $data->jalan;?>, <?php echo $data->kota;?>, <?php echo $data->kodePos;?></td>
                                            <td><?php echo $data->tipe;?></td>
                                            <td><?php echo $data->mgrID;?></td>
                                            
											
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                      </table>
                  </div>
             </div>
      </div>

      
             
      </div>
    </div>


