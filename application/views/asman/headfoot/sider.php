<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $title; ?></title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css?version=<?php echo filemtime('bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css?version=<?php echo filemtime('font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url()?>assets/vendor/datatables/dataTables.bootstrap4.css?version=<?php echo filemtime('dataTables.bootstrap4.css'); ?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>assets/css/sb-admin.css" rel="stylesheet">
  
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/DataTables/datatables.min.css"/>
 <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-3.3.1.js"></script>
 

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #c90000;" id="mainNav">
    <img src="<?php echo base_url()?>assets/images/Indihome_Fiber2.png" style="max-width: 90px; margin-right: 20px">
    <a class="navbar-brand" href="<?php echo base_url()?>asman">Assistent Manager Dashboard</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url()?>admin/Dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Cable">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-coffee"></i>
            <span class="nav-link-text">Manage Cable</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="<?php echo base_url()?><?php echo $role; ?>/manageEA">EA</a>
            </li>
            <li>
              <a href="<?php echo base_url()?><?php echo $role; ?>/manageOA">OA</a>
            </li>
            <li>
              <a href="<?php echo base_url()?><?php echo $role; ?>/manageODC">ODC</a>
            </li>
            <li>
              <a href="<?php echo base_url()?><?php echo $role; ?>/manageODP">ODP</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Order">
          <a class="nav-link" href="<?php echo base_url()?><?php echo $role; ?>/managePelanggan">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Tracking</span>
          </a>
        </li>
          
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage User">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Manage User</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <?php if($this->session->userdata('loggedin')['role'] == '2') {?>
            <li>
              <a href="<?php echo base_url()?><?php echo $role; ?>/manageRole">Role</a>
            </li>
            <li>
              <a href="<?php echo base_url()?><?php echo $role; ?>/manageUser">User</a>
            </li>
            <?php } ?>
          </ul>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Order">
          <a class="nav-link" href="<?php echo base_url()?><?php echo $role; ?>/managePelanggan">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Manage Pelanggan</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>