<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Menikmati Kopi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/bootstrap/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/bootstrap/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/plugins/select2/select2.min.css">

  <script src="<?php echo base_url(); ?>assets2/bootstrap/js/jquery-1.10.2.js"></script>
  <script src="<?php echo base_url(); ?>assets2/bootstrap/js/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets2/bootstrap/bootstrap-fileupload/bootstrap-fileupload.css" />
  
<style type="text/css">
     body .frmModalMsg {
      /* new custom width */
      width: 740px;
      /* must be half of the width, minus scrollbar on the left (30px) */
      margin-left: -280px;
     }
   
         #line-chart {
      height:300px;
      width:800px;
      margin: 0px auto;
      margin-top: 1em;
         }
         .brand { font-family: georgia, serif; }
         .brand .first {
         color: #ccc;
      font-style: italic;
         }
         .brand .second {
      color: #fff;
      font-weight: bold;
         }
     
     #loading-div-background{
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      background: #fff;
      width: 100%;
      height: 100%;
    }
    
    #loading-div{

      background-color: #fff;
      border:  solid #1468b3;
      text-align: center;
      color: #202020;
      position: absolute;
      left: 50%;
      top: 30%;
      margin-left: -150px;
      margin-top: -100px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
    }
      </style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Menikmati</b>Kopi</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets2/b.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php if(empty($this->session->userdata('username'))){
                                            echo "Guest";}
                                            else {echo $this->session->userdata('username');} ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url();?>dashboard/edit_user/<?php echo $this->session->userdata('id_user'); ?>" class="btn btn-default btn-flat">Ubah Password</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url();?>login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
