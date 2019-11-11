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
            <h1 class="m-0 text-dark">Client Company</h1>
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
                                    <a href=""><h6 class="text-center">Display Company Details</h6></a>
                                </div>
                                <!-- /.box-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                              <input type="text" name="clientcompany" class="form-control" placeholder="Enter Your Company Name"  required />
                                        </div>
                                      </div>
                                                                                
                                       <div class="col-md-4">
                                         <div class="form-group">
                                            <label> Company Address</label>
                                              <input type="text" name="companyaddress" class="form-control" placeholder="Enter Your Address"  required/>
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>State</label>
                                              <input type="text" name="state" class="form-control" placeholder="Enter Your State"  required/>
                                        </div>
                                       </div>
                                     </div>
                                   
                                    <!-- /.box-body -->
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Billing State</label>
                                              <input type="text" name="billingstate" class="form-control" placeholder="Enter Your Billing State"  required/>
                                        </div>
                                       </div>                                                                                
                                      <div class="col-md-4">
                                  
                                        <div class="form-group p-3 mt-3 text-center" >
                                         <label class="checkbox-inline">
                                            <input type="radio" value="" required="">State
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="radio" value="" required="">Central
                                          </label>
                                        </div>
                                     
                                      </div> 

                                        <div class="col-md-4">
                                        <div class="form-group">
                                          <label>GST NO.</label>
                                          <input type="number" name="cgst" class="form-control required" placeholder="" />
                                        </div>
                                      </div> 
                                    </div>
                                    
                                    <div class="row">
                                     <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Telephone Number</label>
                                          <input type="number" name="tele" class="form-control " placeholder=""  required/>
                                        </div>
                                      </div>
                                                                                
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Fax Number</label>
                                          <input type="number" name="fax" class="form-control required" placeholder=""/>
                                        </div>
                                      </div>

                                                     
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Website</label>
                                              <input type="text" name="website" class="form-control " placeholder=""  required/>
                                        </div>
                                      </div>
                                   </div>
                                    <!-- /.box-body -->
                                    
                                  <h6 class="text-center"style="color:red">Key Contract Person Commercial Details</h6><hr>
                              
                                  <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name</label>
                                              <input type="text" name="cname" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
                                                                                
                                        <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Email Id</label>
                                          <input type="email" name="cemail" class="form-control required" placeholder="Enter Your Email Id" />
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Mobile Number</label>
                                          <input type="number" name="mobile" class="form-control required" placeholder=""/>
                                        </div>
                                      </div> 
                                      </div>
                                      <div class="row">
                                         <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Alternate Email Id</label>
                                          <input type="email" name="cemail" class="form-control required" placeholder="Enter Your Email Id" />
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Alternate Mobile Number</label>
                                          <input type="number" name="mobile" class="form-control required" placeholder=""/>
                                        </div>
                                      </div> 
                               </div>
                                    <!--box-body-->

                                           <h6 class="text-center" style="color:red">Key Contract Billing Commercial Details</h6><hr>

                                  <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name</label>
                                              <input type="text" name="cname" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
                                                                                
                                        <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Email Id</label>
                                          <input type="email" name="cemail" class="form-control required" placeholder="Enter Your Email Id" />
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Mobile Number</label>
                                          <input type="number" name="mobile" class="form-control required" placeholder=""/>
                                        </div>
                                      </div> 
                                      </div>
                                      <div class="row">
                                         <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Alternate Email Id</label>
                                          <input type="email" name="cemail" class="form-control required" placeholder="Enter Your Email Id" />
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-6">
                                        <div class="form-group">
                                          <label>Alternate Mobile Number</label>
                                          <input type="number" name="mobile" class="form-control required" placeholder=""/>
                                        </div>
                                      </div> 
                               </div>
                                   
                                    <!--box-body-->
          
                                           <h6 class="text-center" style="color:red">Key Contract Person Commercial Details</h6><hr>
  
                                  <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name</label>
                                              <input type="text" name="cname" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
                                                                                
                                     <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Email Id</label>
                                          <input type="email" name="cemail" class="form-control required" placeholder="Enter Your Email Id" />
                                        </div>
                                      </div>
                                                     
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Mobile Number</label>
                                          <input type="number" name="mobile" class="form-control required" placeholder=""/>
                                        </div>
                                      </div> 
                                  </div>

                                  <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Alternate Email Id</label>
                                          <input type="email" name="cemail" class="form-control required" placeholder="Enter Your Email Id" />
                                        </div>
                                      </div>
                                                     
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Alternate Mobile Number</label>
                                          <input type="number" name="mobile" class="form-control required" placeholder=""/>
                                        </div>
                                    </div>

                                  <div class="col-md-4">
                                       <div class="form-group">
                                            <label>Client Company</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="companysearch">
                                                    <option>Select company</option>
                                                    <option>Infort Technology</option>
                                              </select>
                                          </div>
                                        </div>
                                      </div> 
                                 </div>
                                 
                                 <div class="row">     
                                  <div class="col-md-4">
                                       <div class="form-group">
                                            <label>Shift</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="companysearch">
                                                    <option>Select</option>
                                                    <option>Infort Technology</option>
                                              </select>
                                          </div>
                                        </div>
                                  </div>    

                                  <div class="col-md-4">
                                          <div class="form-group p-3 mt-3 text-center" >
                                         <label class="checkbox-inline">
                                            <input type="radio" value="" required="">ESIC
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="radio" value="" required="">WC
                                          </label>
                                        </div>
                                </div> 

                                <div class="col-md-4">
                                         <div class="form-group p-3 mt-3 text-center" >
                                         <label class="checkbox-inline">
                                            <input type="radio" value="" required="">Monthly Bonus
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="radio" value="" required="">Yearly Bonus
                                          </label>
                                        </div>
                                </div> 
                              </div>
                               <div class="row">
                               <div class="col-md-4">
                                   <div class="form-group">
                                      <label>Enter Bonus % / Amount</label>
                                        <input type="text" name="bonus" class="form-control required" placeholder="Enter Bonus % / Amount" />
                                    </div>
                                </div>     
      

                                  <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Manpower Limit</label>
                                              <input type="text" name="manpowerliit" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
                                            <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Working Days</label>
                                              <input type="number" name="workingday" class="form-control required" placeholder="" />
                                        </div>
                                      </div>  
                              </div>
                              <div class="row">
                                  <div class="col-md-4">
                                        <div class="form-group p-3 mt-3 text-center" >
                                         <label class="checkbox-inline">
                                            <input type="radio" value="" required="">Fixed Bonus
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="radio" value="" required="">Percentage Bonus
                                          </label>
                                        </div>
                                </div>

                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Enter % Bonus / Amount</label>
                                              <input type="text" name="bonus" class="form-control required" placeholder="" />
                                        </div>
                              </div> 

                              <div class="col-md-4">
                                          <div class="form-group p-3 mt-3 text-center" >
                                         <label class="checkbox-inline">
                                            <input type="radio" value="" required="">Leave Monthly
                                          </label>
                                          <label class="checkbox-inline">
                                            <input type="radio" value="" required="">Leave Yearly
                                          </label>
                                        </div>
                                </div>
                              </div>
                            <div class="row">
                             <div class="col-md-4">
                                    <div class="form-group">
                                            <label>Sub-Contractor Name</label>
                                      <div class="form-select-list">
                                           <select class="form-control custom-select-value" name="subcontractorname">
                                                    <option>Select </option>
                                                    <option>Infort Technology</option>
                    
                                        </select>
                                  </div>
                              </div>
                            </div> 
                             <div class="col-md-4">
                                         <div class="form-group">
                  <label>Registration Date</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="registrationdate" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
                                </div>

                                      
                        </div>
                   
                      </div>
                          <div class="card-footer">
                         <div class="row">
                            <div class="col-md-4">
                              <button type="submit" class="btn btn-primary">Save</button>
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