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


                <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Basic Salary</h1>
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
                        <div class="col-md-12">
                             <!-- general form elements -->
                            <div class="card">
                                <div class="card-header" style="text-align: center">
                                    <a href=""><h1 class="card-title">Display Salary Details</h1></a>
                                </div>
                                <!-- /.card-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row">
                                     <div class="col-md-6">
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
                                                                                
                                <div class="col-md-6">
                                     <div class="form-group">
                                          <label>Designation Name</label>
                                          <input type="text" name="designation_name" class="form-control required" placeholder="" />
                                        </div>
                            </div>         
   
                                   </div>
                                    <!-- /.card-body -->
                                    <div class="row">
                                      <div class="col-md-6">
                                             <div class="form-group">
                                          <label>Client Name</label>
                                          <input type="text" name="clientname" class="form-control required" placeholder="" />
                                        </div>
                                       </div>                                                                          <div class="col-md-6"> 
                                             <div class="form-group">
                                          <label>Owner Name</label>
                                          <input type="text" name="owner_name" class="form-control required" placeholder="" />
                                        </div>
                                       </div> 
                                    </div>
                                    
                                    <div class="row">
                                     <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Basic</label>
                                          <input type="number" name="basic" class="form-control " placeholder=""  required/>
                                        </div>
                                      </div>
                                                                                
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label>DA</label>
                                          <input type="number" name="da" class="form-control " placeholder=""  required/>
                                        </div>
                                      </div>

                                                     
                                     <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Basic+DA</label>
                                          <input type="number" name="basci_da" class="form-control " placeholder=""  required/>
                                        </div>
                                      </div>
                                   </div>
                                    <!-- /.card-body -->
                                     
                                    <a href=""><h6 class="text-center">Allowancess</h6></a><hr>
                                  <div class="row">
                                     <div class="col-md-2">
                                        <div class="form-group">
                                          <label>Allowance</label>
                                        
                                        <label class="checkbox-inline">
                                            <input type="radio" value="" required="">Leave Monthly
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="radio" value="" required="">Leave Yearly
                                          </label>
                                        
                                    
                                        </div>
                                      </div>
                                       <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Based On</label>
                                          <input type="text" name="based_on" class="form-control required" placeholder="" required />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Fixed Or %</label>
                                          <input type="text" name="fixed" class="form-control required" placeholder="" required />
                                        </div>
                                       </div> 
                                      <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Value</label>
                                          <input type="text" name="value" class="form-control required" placeholder="" required />
                                        </div>
                                       </div>
                                        <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Total</label>
                                          <input type="text" name="total" class="form-control required" placeholder=""  required/>
                                        </div>
                                       </div>
                                   </div> 
                                     <div class="row">
                                     <div class="col-md-2  ">
                                        <div class="form-group">
                                          <label>Allowance</label>
                                         <label class="checkcard-inline">
                                            <input type="checkcard" value=""  required>Allowance Name
                                          </label>
                                        </div>
                                      </div>
                                       <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Based On</label>
                                          <input type="text" name="based_on" class="form-control required" placeholder="" required />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Fixed Or %</label>
                                          <input type="text" name="fixed" class="form-control required" placeholder="" required />
                                        </div>
                                       </div> 
                                      <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Value</label>
                                          <input type="text" name="value" class="form-control required" placeholder="" required />
                                        </div>
                                       </div>
                                        <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Total</label>
                                          <input type="text" name="total" class="form-control required" placeholder=""  required/>
                                        </div>
                                       </div>
                                   </div>
                                     <div class="row">
                                     <div class="col-md-2 col-md-offset-1 ">
                                        <div class="form-group">
                                          <label>Allowance</label>
                                         <label class="checkcard-inline">
                                            <input type="checkcard" value=""  required>Allowance Name
                                          </label>
                                        </div>
                                      </div>
                                       <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Based On</label>
                                          <input type="text" name="based_on" class="form-control required" placeholder="" required />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Fixed Or %</label>
                                          <input type="text" name="fixed" class="form-control required" placeholder="" required />
                                        </div>
                                       </div> 
                                      <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Value</label>
                                          <input type="text" name="value" class="form-control required" placeholder="" required />
                                        </div>
                                       </div>
                                        <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Total</label>
                                          <input type="text" name="total" class="form-control required" placeholder=""  required/>
                                        </div>
                                       </div>
                                   </div>
                                   <div class="row">
                                     <div class="col-md-2 col-md-offset-1">
                                       <div class="form-group">
                                          <label>Gross Salary </label>
                                        </div>
                                     </div>
                                     <div class="col-md-4">
                                        <div class="form-group">
                                          <input type="text" name="deduction_name" class="form-control required" placeholder=""/>
                                        </div>
                                     </div>
                                     <div class="col-md-2">
                                          <p>(Basic + DA + Allowance)</p>
                                     </div>
                                   </div>
                                    <!--card-body-->
               
                                <div class="card-header" style="text-align: center">
                                    <a href=""><h1 class="card-title">Deduction</h1></a><hr>
                                </div>
                                    <div class="row">
                                     <div class="col-md-2">
                                        <div class="form-group">
                                          <label>Deduction</label>
                                         <label class="checkcard-inline">
                                            <input type="checkcard" value=""  required>Deduction Name
                                          </label>
                                        </div>
                                      </div>
                                       <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Based On</label>
                                          <input type="text" name="based_on" class="form-control required" placeholder="" required />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Fixed Or %</label>
                                          <input type="text" name="fixed" class="form-control required" placeholder="" required />
                                        </div>
                                       </div> 
                                      <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Employee Value</label>
                                          <input type="text" name="emp_value" class="form-control required" placeholder="" required />
                                        </div>
                                       </div>
                                        <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Total Value</label>
                                          <input type="text" name="total_value" class="form-control required" placeholder="" required />
                                        </div>
                                       </div>
                                        <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Total</label>
                                          <input type="text" name="total" class="form-control required" placeholder=""  required/>
                                        </div>
                                       </div>
                                   </div> 
                                    <div class="row">
                                     <div class="col-md-2">
                                        <div class="form-group">
                                          <label>Deduction</label>
                                         <label class="checkcard-inline">
                                            <input type="checkcard" value=""  required>Deduction Name
                                          </label>
                                        </div>
                                      </div>
                                       <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Based On</label>
                                          <input type="text" name="based_on" class="form-control required" placeholder="" required />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Fixed Or %</label>
                                          <input type="text" name="fixed" class="form-control required" placeholder="" required />
                                        </div>
                                       </div> 
                                      <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Employee Value</label>
                                          <input type="text" name="emp_value" class="form-control required" placeholder="" required />
                                        </div>
                                       </div>
                                        <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Total Value</label>
                                          <input type="text" name="total_value" class="form-control required" placeholder="" required />
                                        </div>
                                       </div>
                                        <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Total</label>
                                          <input type="text" name="total" class="form-control required" placeholder=""  required/>
                                        </div>
                                       </div>
                                   </div> 
                                    <div class="row">
                                     <div class="col-md-2">
                                        <div class="form-group">
                                          <label>Deduction</label>
                                         <label class="checkcard-inline">
                                            <input type="checkcard" value=""  required>Deduction Name
                                          </label>
                                        </div>
                                      </div>
                                       <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Based On</label>
                                          <input type="text" name="based_on" class="form-control required" placeholder="" required />
                                        </div>
                                       </div> 
                                       <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Fixed Or %</label>
                                          <input type="text" name="fixed" class="form-control required" placeholder="" required />
                                        </div>
                                       </div> 
                                      <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Employee Value</label>
                                          <input type="text" name="emp_value" class="form-control required" placeholder="" required />
                                        </div>
                                       </div>
                                        <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Total Value</label>
                                          <input type="text" name="total_value" class="form-control required" placeholder="" required />
                                        </div>
                                       </div>
                                        <div class="col-md-2">
                                             <div class="form-group">
                                              <label>Total</label>
                                          <input type="text" name="total" class="form-control required" placeholder=""  required/>
                                        </div>
                                       </div>
                                   </div> 
                                   <div class="row">
                                     <div class="col-md-2 ">
                                       <div class="form-group">
                                          <label>Total Deduction</label>
                                        </div>
                                     </div>
                                     <div class="col-md-4">
                                        <div class="form-group">
                                          <input type="text" name="deduction_name" class="form-control required" placeholder=""/>
                                        </div>
                                     </div>

                                   </div><hr>

                                    <!--card-body-->

                                  <div class="row">
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Net Pay</label>
                                        </div>
                                    </div>
                                         <div class="col-md-4">
                                        <div class="form-group">
                                          <input type="text" name="total_deduction" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
                                       <div class="col-md-3">
                                         <p>(Gross - Deduction)<p>
                                       </div> 
                                      </div>

                                       <div class="row">
                                        <div class="col-md-2">
                                      <div class="form-group">
                                          <label>Per Day Salary</label>
                                        </div>
                                    </div>
                                         <div class="col-md-4">
                                        <div class="form-group">
                                          <input type="text" name="total_deduction" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
                                       <div class="col-md-4">
                                         <p>Net Pay/Total Working Days Of Client Company</p>
                                       </div>
                                      </div>
                                 
                         <div class="row">
                            <div class="col-md-4">
                              <button type="submit" class="btn btn-primary">Add Salary</button>
                              </div>                                   
                        </div>
                      </div>
                       </div>
                    </form>


                   </div>
                 </div> <!-- /.column -->

              </div>   <!-- /.row -->
</div><!-- /.container -->
                </section><!-- /.content -->
       </div>
        </div><!-- ./wrapper -->

    </body>
</html>