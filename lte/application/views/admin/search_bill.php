<!DOCTYPE html>
<html>
    <head>
<?php $this->load->view('admin/sections/head.php')?>
</head>    

    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
       <div class="wrapper">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('admin/sections/navbar.php') ?>
       
        <!-- Right side column. Contains the navbar and content of the page -->
          <div class="content-wrapper">
            <!-- Left side column. contains the logo and sidebar -->
            <?php $this->load->view('admin/sections/sidebar.php') ?>  
                <!-- Content Header (Page header) -->
         <div class="content-header">
          <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Search Bill</h1>
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
                <section class="content"style="background: white">
                  <div class="container p-4">
                    <div class="row">
                      <div class="col-md-12">
                        <!-- left column -->
                             <!-- general form elements -->
                    <div class="card">  <!-- /.card-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Company Wise Search</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="companysearch">
                                                    <option>Select </option>
                                                    <option>Infort Technology</option>
                                                                           
                                              </select>
                                          </div>
                                        </div>
                                      </div>
                                                                                
                                       <div class="col-md-6">
                                       <div class="form-group">
                  <label>Company Wise Search</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="companysearch" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
                                     </div>
                                   </div>

                                     <div class="row">                            
                                       <div class="col-md-6">
                                            <div class="form-group">
                  <label>Date Search From:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
                                        </div>

                                   <div class="col-md-6">
                                             <div class="form-group">
                  <label>Date Search TO:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
                                        </div> 
                                     </div>

                                     <div class="row">
                                      <div class="col-md-6">

                                           <div class="form-group">
                                            <label>Select Bill No.</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="companysearch">
                                                    <option>Enter Bill No.</option>
                                                    <option>12345</option>                        
                                              </select>
                                          </div>
                                        </div>

                                        </div>
                                        <div class="col-md-6">
                                          <center>
                                          <a href=""><h4 style="margin-top:25px;"><u>OutStatnding Amount</u></h4></a>
                                        </center>
                                        </div>
                                      </div>
                                     </div>
                                     <div class="card-footer">
                                          <div class="row">
                                        <div class="col-md-4 ">
                                            <button type="submit" class="btn btn-primary px-4">View</button>
                                       </div>
                                     </div>
                                     </div>
                                            </form>                          
                                    </div>
                                    </div>
                            
                               </div>
                    </div> 
                </section><!-- /.content -->
            </div><!-- /.right-side -->
        </div><!-- ./wrapper -->

    </body>
</html>