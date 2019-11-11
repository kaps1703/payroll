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
            <h1 class="m-0 text-dark">Report Index</h1>
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
                                    <a href=""><h6 class="">Display Report Index</h6></a>
                                </div>
                                <!-- /.card-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="<?php echo base_url().'admin/Reports_index'?>" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row">                                           
                                     <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Company</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="company">
                                                    <option>Select company</option>
                                                    <option>Infort Technology</option>
                                                                           
                                              </select>
                                          </div>
                                        </div>
                                      </div>

                                <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Month</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="month">
                                                    <option>Select Month</option>
                                                    <option>January</option>
                                                     <option>February</option>
                                                     <option>March</option>
                                                     <option>April</option>
                                                     <option>May</option>
                                                     <option>June</option>
                                                     <option>July</option>
                                                     <option>August</option>
                                                     <option>September</option>
                                                     <option>October</option> 
                                                     <option>November</option>
                                                     <option>December</option> 
                                                                           
                                              </select>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Year</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="year">
                                                    <option>Select</option>
                                                    <option>Infort Technology</option>
                                                                           
                                              </select>
                                          </div>
                                        </div>
                                      </div>
                                     </div>

                                       <div class="row">
                                           <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px; ">Muster</button></a>
                                        </div>
                                     <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px; ">Advance</button></a>
                                        </div>
                                         <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px; ">Damage/Loss</button></a>
                                        </div>
                                        <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px; ">Over Time</button></a>
                                        </div>
                                     </div>

                                           <div class="row">
                                           <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px; ">Leave</button></a>
                                        </div>
                                     <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px; ">Loan Apporval</button></a>
                                        </div>
                                         <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px;">ESIC Summary</button></a>
                                        </div>
                                        <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px;">PF Summary</button></a>
                                        </div>
                                     </div>

                                         <div class="row">
                                           <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px; ">PT Summary</button></a>
                                        </div>
                                     <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px; ">Salary Wage</button></a>
                                        </div>
                                         <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px;">Salary Wage For Clients</button></a>
                                        </div>
                                        <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px;">Workman Employes</button></a>
                                        </div>
                                     </div>

                                         <div class="row">
                                           <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px; ">Export All TO Excel Sheet</button></a>
                                        </div>
                                     <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px; ">PF Summary For Selected Year</button></a>
                                        </div>
                                         <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px;">PT Summary For Selected Year</button></a>
                                        </div>
                                        <div class="col-md-3">
                                          <a><button type="submit" class="btn btn-primary" style="margin-top:15px;">ESIC Summary For Selected Years</button></a>
                                        </div>
                                     </div>
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