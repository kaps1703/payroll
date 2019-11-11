<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('admin/pages/head.php')?>
          <link rel="stylesheet" href="<?php echo base_url()?>admindata/js/chosen_v1.2.0/chosen.css">
<!--        <script src="<?php echo base_url();?>admindata/js/AdminLTE/dashboard.js" type="text/javascript"></script> -->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('admin/pages/header.php') ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php $this->load->view('admin/pages/leftsidebar.php') ?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
          <img src="<?=base_url();?>uploads/logo2111.jpg" class=" " alt="User Image" style="margin-left: 284px;"> 
    </body>
</html>