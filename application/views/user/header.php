<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Monitoring Kegiatan IPDS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/select2/dist/css/select2.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="http://localhost/monitorci/admin" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BPS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Monitoring</b>&nbsp;BPS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>assets/dist/img/bps.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Bidang IPDS</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>assets/dist/img/bps.jpg" class="img-circle" alt="User Image">

                <p>
                  Selamat Datang <?php $nama=$this->session->userdata('nama'); echo $nama; ?>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url().'admin/logout'; ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
                <div class="pull-left">
                  <a href="<?php echo base_url().'admin/ganti_password'; ?>" class="btn btn-default btn-flat">Ganti Password</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/dist/img/bps.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Bidang IPDS</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url().'admin/index'; ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
        </li>
        
        <li class="treeview"><a href="#"> <em class="fa fa-laptop"></em> <span>Kegiatan</span> <span class="pull-right-container"> <em class="fa fa-angle-left pull-right"></em> </span> </a>
          <ul class="treeview-menu">
            <li class="<?php echo active_link('admin/listkegiatan'); ?>"><a href="<?php echo base_url().'admin/listkegiatan'; ?>"><i class="fa fa-circle-o"></i> List Kegiatan</a></li>
            <?php 
          $userstatus = $this->session->userdata('userstatus');
          if( $userstatus == 'admin'){ 
          ?>
            <li><a href="<?php echo base_url().'admin/timelinekab'; ?>"><i class="fa fa-circle-o"></i> Timeline Kegiatan Kabupaten</a></li>
          <?php } ?>
            <li><a href="<?php echo base_url().'admin/lihatmasalah'; ?>"><i class="fa fa-circle-o"></i> Lihat Masalah/Solusi</a></li>
            <li><a href="<?php echo base_url().'admin/evaluasiadd'; ?>"><i class="fa fa-circle-o"></i> Evaluasi Pimpinan</a></li>
          </ul>
        </li>
        <?php 
          $userstatus = $this->session->userdata('userstatus');
          if( $userstatus == 'admin'){ 
          ?>
          <li>
          <a href="<?php echo base_url().'admin/listuser'; ?>">
            <i class="fa fa-user"></i> <span>Pengguna</span>
            
          </a>
        </li>
        <?php
		     } ?>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>