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
            <h1 class="m-0 text-dark">Aggreement</h1>
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
                        <!-- left column -->
                             <!-- general form elements -->
                          <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href=""><h6 class="text-center">Aggreement Details</h6></a>
                                </div>
                                <!-- /.box-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row">
                                     <div class="col-md-4">
                                    <div class="form-group">
                                            <label>Owner Company</label>
                                      <div class="form-select-list">
                                           <select class="form-control custom-select-value" name="owner_companny">
                                                    <option>Select </option>
                                                    <option>Infort Technology</option>
                    
                                        </select>
                                  </div>
                              </div>
                            </div> 
                                                                                
                               <div class="col-md-4">
                                    <div class="form-group">
                                            <label>Client Company</label>
                                      <div class="form-select-list">
                                           <select class="form-control custom-select-value" name="client_companny">
                                                    <option>Select </option>
                                                    <option>Infort Technology</option>
                    
                                        </select>
                                  </div>
                              </div>
                            </div>   

                                    <div class="col-md-4">
                                             <div class="form-group">
                                          <label>Agreement Id</label>
                                          <input type="text" name="agreement_id" class="form-control required" placeholder="" />
                                        </div>
                                       </div>   
   
                                   </div>
                                    <!-- /.box-body -->
                                    <div class="row">
                                       <div class="col-md-4">
                                             <div class="form-group">
                                          <label>Agreement No</label>
                                          <input type="number" name="agreement_number" class="form-control required" placeholder="" />
                                        </div>
                                       </div>                                                                                                                        <div class="col-md-4">
                                         <div class="form-group">
                                              <label>Agreement Date</label>
                                             <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" name="agreement_date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                  </div>
                                                </div>
                                </div>

                                 <div class="col-md-4">
                                            <div class="form-group">
                                            <label>Agreement Type</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="agreement_type">
                                                    <option>Select</option>
                                                    <option>Infort Technology</option>
                                                                           
                                              </select>
                                          </div>
                                        </div>
                                       </div>

                                    </div>
                                    
                                    <div class="row">
                                       <div class="col-md-4">
                                            <div class="form-group">
                                            <label>Agreement Authority</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="agreement_authority">
                                                    <option>Select</option>
                                                    <option>Infort Technology</option>
                                                                           
                                              </select>
                                          </div>
                                        </div>
                                       </div>
                                                                                
                                      <div class="col-md-4">
                                         <div class="form-group">
                                              <label>Agreement Start Date</label>
                                               <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" name="agreement_start_date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                  </div>
                                                </div>
                                </div>

                                                     
                                     <div class="col-md-4">
                                         <div class="form-group">
                                              <label>Agreement End Date</label>
                                              <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" name="agreement_end_date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                  </div>
                                                </div>
                                </div>
                                   </div>
                
                               <div class="text-center">
                                    <h6 style="color:red">Select Designation</h6><hr>
                                </div> 
                               
                                 <div class="row">
                                     <div class="col-md-3 col-md-offset-1">
                                        <div class="form-group">
                                         <label class="checkbox-inline">
                                            <input type="checkbox" value=""  required="">Designation Name
                                          </label>
                                        </div>
                                      </div>
                                       <div class="col-md-2">
                                             <div class="form-group">
                                          <input type="text" name="yes" class="form-control required" placeholder="Yes/No" />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                         <h6>(Requirenments)</h6>
                                       </div> 
                                        <div class="col-md-2">
                                             <div class="form-group">
                                          <input type="text" name="yes" class="form-control required" placeholder="Enter Days" />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                         <h6>Total Working Days</h6>
                                       </div> 
                                   </div> 
                                    <div class="row">
                                     <div class="col-md-3 col-md-offset-1">
                                        <div class="form-group">
                                         <label class="checkbox-inline">
                                            <input type="checkbox" value=""  required="">Designation Name
                                          </label>
                                        </div>
                                      </div>
                                       <div class="col-md-2">
                                             <div class="form-group">
                                          <input type="text" name="yes" class="form-control required" placeholder="Yes/No" />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                         <h6>(Requirenments)</h6>
                                       </div> 
                                        <div class="col-md-2">
                                             <div class="form-group">
                                          <input type="text" name="yes" class="form-control required" placeholder="Enter Days" />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                         <h6>Total Working Days</h6>
                                       </div> 
                                   </div> 
                                    <div class="row">
                                     <div class="col-md-3 col-md-offset-1">
                                        <div class="form-group">
                                         <label class="checkbox-inline">
                                            <input type="checkbox" value=""  required="">Designation Name
                                          </label>
                                        </div>
                                      </div>
                                       <div class="col-md-2">
                                             <div class="form-group">
                                          <input type="text" name="yes" class="form-control required" placeholder="Yes/No" />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                         <h6>(Requirenments)</h6>
                                       </div> 
                                        <div class="col-md-2">
                                             <div class="form-group">
                                          <input type="text" name="yes" class="form-control required" placeholder="Enter Days" />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                         <h6>Total Working Days</h6>
                                       </div> 
                                   </div> 
                                    <div class="row">
                                     <div class="col-md-3 col-md-offset-1">
                                        <div class="form-group">
                                         <label class="checkbox-inline">
                                            <input type="checkbox" value=""  required="">Designation Name
                                          </label>
                                        </div>
                                      </div>
                                       <div class="col-md-2">
                                             <div class="form-group">
                                          <input type="text" name="yes" class="form-control required" placeholder="Yes/No" />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                         <h6>(Requirenments)</h6>
                                       </div> 
                                        <div class="col-md-2">
                                             <div class="form-group">
                                          <input type="text" name="yes" class="form-control required" placeholder="Enter Days" />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                         <h6>Total Working Days</h6>
                                       </div> 
                                   </div> 
                                    <div class="row">
                                     <div class="col-md-3 col-md-offset-1">
                                        <div class="form-group">
                                         <label class="checkbox-inline">
                                            <input type="checkbox" value=""  required="">Designation Name
                                          </label>
                                        </div>
                                      </div>
                                       <div class="col-md-2">
                                             <div class="form-group">
                                          <input type="text" name="yes" class="form-control required" placeholder="Yes/No" />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                         <h6>(Requirenments)</h6>
                                       </div> 
                                        <div class="col-md-2">
                                             <div class="form-group">
                                          <input type="text" name="yes" class="form-control required" placeholder="Enter Days" />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                         <h6>Total Working Days</h6>
                                       </div> 
                                   </div>     <div class="text-center">
                                   <h6 style="color:red">Add Basic Salary</h6><hr>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                    <div class="form-group">
                                            <label>Agreement Id</label>
                                      <div class="form-select-list">
                                           <select class="form-control custom-select-value" name="agreementid">
                                                    <option>Select </option>
                                                    <option>Infort Technology</option>
                    
                                        </select>
                                  </div>
                              </div>
                            </div> 
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label>Client Company</label>
                                      <div class="form-select-list">
                                           <select class="form-control custom-select-value" name="client_companny">
                                                    <option>Select </option>
                                                    <option>Infort Technology</option>
                    
                                        </select>
                                  </div>
                              </div>
                            </div>  
                             <div class="col-md-4">
                                       <div class="form-group">
                                            <label>Owner Company</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="ownercompany">
                                                    <option>Select</option>
                                                    <option>Infort Technology</option>
                                              </select>
                                          </div>
                                        </div>
                                      </div>

                                </div> 
</div>
                                <div class="card-footer">
                                    <div class="col-md-6">
                                      <button type="submit" class="btn btn-primary">Save</button>
                                      <button type="submit" class="btn btn-primary">Cancel</button>
                                    </div>                                   
                              </div>
                          
                           
                            </div>
                          </div>
                        </form>
                       </div>
                   </div>

              </div>   <!-- /.row -->
            </div>  <!-- /container -->
        </section><!-- /.content -->
          
        </div><!-- ./wrapper -->
</div>
    </body>
</html>