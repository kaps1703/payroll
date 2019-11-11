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
            <h1 class="m-0 text-dark">Owner Company</h1>
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
                                <form role="form" id="form" action="<?php echo base_url().'admin/Owner_com/save'?>" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row">
                               <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Company Name</label>
                                              <input type="text" name="companyname" class="form-control required" placeholder="Enter Your Company Name" />
                                        </div>
                                      </div>
                                                                                
                                       <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Address</label>
                                              <input type="text" name="address" class="form-control required" placeholder="Enter Your Address" />
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Area</label>
                                              <input type="text" name="area" class="form-control required" placeholder="Enter Your Area"/>
                                        </div>
                                       </div>
                                   
                                    <!-- /.box-body -->
                                     <div class="col-md-4">
                                        <div class="form-group">
                                          <label>City</label>
                                          <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="City">
                                                    <option>Select City</option>
                                                    <option>Pune</option>
                                                    <option>Other</option>
                                                                           
                                              </select>
                                          </div>

                                        </div>
                                      </div>
                                                                                
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Other City (If Not In A List)</label>
                                              <input type="text" name="othercity" class="form-control required" placeholder="Enter Your City" />
                                        </div>
                                      </div> 

                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label>State</label>
                                          <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="state">
                                                    <option>Select State</option>
                                                    <option>Maharashtra</option>
                                                                           
                                              </select>
                                          </div>

                                        </div>
                                      </div>  
                                    
                                  
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Country</label>
                                          <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="country">
                                                    <option>India</option>
                                                    <option>United States</option>
                                                                           
                                              </select>
                                          </div>

                                        </div>
                                      </div>
                                                                                
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Pincode</label>
                                              <input type="text" name="pincode" class="form-control required" placeholder="Enter Your Pincode" />
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Telephone Number</label>
                                          <input type="number" name="tele" class="form-control required" placeholder="Enter your telephone number"/>
                                        </div>
                                      </div>
                                   
                                    <!-- /.box-body -->
                                    
                              <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Email Id</label>
                                          <input type="email" name="email" class="form-control required" placeholder="Enter Your Email Id" />
                                        </div>
                                      </div>
                                                                                
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Website</label>
                                              <input type="text" name="website" class="form-control required" placeholder="Enter the new website" />
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Establishment Code GST</label>
                                          <input type="number" name="gst" class="form-control required" placeholder="Enter GST Number"/>
                                        </div>
                                      </div>  
                               
                                    <!--box-body-->
                                   
                                     <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Income Tax</label>
                                          <input type="number" name="income" class="form-control required" placeholder="Enter tax number" />
                                        </div>
                                      </div>
                                                                                
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>PF Account No.</label>
                                              <input type="number" name="Pf" class="form-control required" placeholder="Enter PF Account number" />
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-4">
                                        <div class="form-group">
                                          <label>ESIC Account No.</label>
                                          <input type="number" name="esic" class="form-control required" placeholder="Enter the esic Acoount number"/>
                                        </div>
                                      </div>
                                   
                                    <!--box-body-->
                                      
                                   <div class="col-md-4">
                                        <div class="form-group">
                                          <label>LWF Acount No.</label>
                                          <input type="number" name="lwf" class="form-control required" placeholder="Enter LWF Account number" />
                                        </div>
                                      </div>
                                                                                
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>PAN No.</label>
                                              <input type="number" name="pan" class="form-control required" placeholder="Enter PAN Number" />
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-4">
                                        <div class="form-group">
                                          <label>PT Account No.</label>
                                          <input type="number" name="pt" class="form-control required" placeholder="Enter PT Account Number"/>
                                        </div>
                                      </div>
                                    </div>
                            
                                 
                                           <h6 class="text-center"><b>Bank Details</b></h6><hr>
                                       
                                           <div class="row">
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Bank Account Number</label>
                                              <input type="number" name="banknumber" class="form-control required" placeholder="Enter Your Acount Number" />
                                        </div>
                                      </div>
                                                                                
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Owner Company</label>
                                              <input type="name" name="ocompanyname" class="form-control required" placeholder="Enter Your Compny Name" />
                                        </div>
                                      </div> 
                                                     
                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Bank Name</label>
                                              <input type="name" name="bankname" class="form-control required" placeholder="Enter Your Bank Name"/>
                                        </div>
                                       </div>

                                     </div>
                                     <div class="row">
                                                                                                                    
                                   <div class="col-md-4">
                                        <div class="form-group">
                                            <label>IFSC Code</label>
                                              <input type="text" name="ifscnumber" class="form-control required" placeholder="Enter Your IFSC Code" />
                                        </div>
                                      </div>  

                                   <div class="col-md-4">            
                                      <div class="form-group">
                                        <label>UPI Number</label>
                                          <input type="number" name="upinumber" class="form-control required" placeholder="Enter Your UPI Number " />
                                      </div>
                                      </div>   

                                     <div class="col-md-4">
                                         <div class="form-group">
                                          <label>Select Logo</label>
                                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="userfile" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                                      </div>
                                    </div>
                                  </div></div>
                                   <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Register</button>
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