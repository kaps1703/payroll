<!DOCTYPE html>
<html>
    <head>
<?php $this->load->view('admin/sections/head.php')?>
</head>    

    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
       <div class="wrapper">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('admin/sections/navbar.php') ?>
       
          <div class="content-wrapper">
            <!-- Left side column. contains the logo and sidebar -->
            <?php $this->load->view('admin/sections/sidebar.php') ?>

            <!-- Right side column. Contains the navbar and content of the page -->
           

                <!-- Content Header (Page header) -->
                <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Database Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

                <!-- Main content -->
                <section class="content" style="background: white">
                  <div class="container p-4">
                    <div class="row">
                      <div class="col-md-12">
                        <!-- left column -->
                             <!-- general form elements -->
                            <div class="card">
                               <div class="card-header" style="text-align: center">
                                    <a href=""><h6 class="">Details</h6></a>
                                </div>
                                <!-- /.box-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row"> 

                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Select Logo</label>
                                        <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                                      </div>
                                    </div>
                                    </div>
                                  </div>
                                       <div class="card-footer">
                                           <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary" >Restore</button>
                                            <button type="submit" class="btn btn-primary">Backup Database</button>

                                       </div>
                                     </div>
                                     </div>
                                                                    
                                    </div>
                                    
                                </form>

</div>
                               </div>

                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.right-side -->
        </div><!-- ./wrapper -->

    </body>
</html>