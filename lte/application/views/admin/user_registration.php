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
            <h1 class="m-0 text-dark">User Registration</h1>
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
                                    <a href=""><h6 class="text-center">User Registration</h6></a>
                                </div>
                                <!-- /.box-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="<?php echo base_url().'admin/User_registration/save'?>" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row">
                                                                                
                                    <div class="col-md-6">
                                       <div class="form-group">
                                            <label>Owner Company</label>
                                              <div class="form-select-list">
                                             <!--  <select class="form-control custom-select-value" name="ownercompany">
                                                    <option>Select</option>
                                                    <option>Infort Technology</option>
                                              </select> -->
                                                 <select class="form-control required" name="oc_id" id="oc_id">
                                            <option value="" selected="selected">Select</option>
                                           <?php
                            
                                           for($i=0;$i< sizeof($data1);$i++)
                                           { ?>
                                            <option value="<?php echo $data1[$i]['oc_id'] ;?>">
                                              <?php echo $data1[$i]['oc_companyname'] ;?></option>
                                           <?php } ?>
                                             </select>

                                          </div>
                                        </div>
                                      </div>

                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Designation</label>
                                              <input type="text" name="designation" class="form-control" placeholder="Enter Your designation"  required/>
                                        </div>
                                       </div> 
             
                                     </div>
                                   
                                    <!-- /.box-body -->
                                    <div class="row">
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Branch</label>
                                              <input type="text" name="branch" class="form-control" placeholder="Enter Your Branch"  required/>
                                        </div>
                                       </div>

                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                              <input type="text" name="employee_name" class="form-control" placeholder="Enter Your  Name"  required/>
                                        </div>
                                       </div>  
                                    </div>
                                    
                                    <div class="row">
                                   <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Employee Father/Husband Name</label>
                                              <input type="text" name="employee_father_name" class="form-control" placeholder="Enter Your  Father/Husband Name"  required/>
                                        </div>
                                       </div> 
                                                                                
                                        <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Employee Mother Name</label>
                                              <input type="text" name="employee_mother_name" class="form-control" placeholder="Enter Your  Monther Name"  required/>
                                        </div>
                                       </div> 

                                                     
                                       <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Employee Temporary Address</label>
                                              <textarea type="text" name="employee_temp_add" class="form-control" placeholder="Enter Address here"  required></textarea>
                                        </div>
                                       </div> 

                                       <div class="col-md-3">
                                       <div class="form-group">
                                            <label>Temporary State</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="tstate">
                                                    <option>Select </option>
                                                    <option>Infort Technology</option>
                                              </select>
                                          </div>
                                        </div>
                                      </div>
                                   </div>
                                    <!-- /.box-body -->
   
                                  <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Employee Permanent Address</label>
                                              <textarea type="text" name="employee_perm_add" class="form-control" placeholder="Enter Address here"  required></textarea>
                                        </div>
                                       </div> 
                                                                                
                                        <div class="col-md-3">
                                       <div class="form-group">
                                            <label>Permanant State</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="pstate">
                                                    <option>Select</option>
                                                    <option>Infort Technology</option>
                                              </select>
                                          </div>
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-3">
                                        <div class="form-group">
                                          <label>Contact Number</label>
                                          <input type="number" name="mobile" class="form-control required" placeholder=""/>
                                        </div>
                                      </div> 

                                      <div class="col-md-3">
                                        <div class="form-group">
                                          <label>Alternate Contact Number</label>
                                          <input type="number" name="alter_mobile" class="form-control required" placeholder=""/>
                                        </div>
                                      </div> 
                                      </div>

                                      <div class="row">
                                         <div class="col-md-3">
                                        <div class="form-group">
                                          <label>Email Id</label>
                                          <input type="email" name="email" class="form-control required" placeholder="Enter Your Email Id" />
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-3">
                                        <div class="form-group">
                                        <center>
                                        <h5>Gender</h5>
                                         <label class="radio-inline">
                                            <input type="radio" name="gender" value=""  required="">Male
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="gender" value="" required="">Female
                                          </label>
                                          </center>
                                        </div>
                                      </div>

                                      <div class="col-md-3">
                                         <div class="form-group">
                                              <label>Date Of Birth</label>
                                               <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="pccdate" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
                                                </div>
                                

                                <div class="col-md-3">
                                         <div class="form-group">
                                              <label>Date Of Joining</label>
                                               <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="joiningdate" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
                                              
                                </div>

                               </div>
                                    <!--box-body-->

                                  <div class="row">
                                    <div class="col-md-4">
                                       <div class="form-group">
                                            <label>Residential Proof</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="residential_proof">
                                                    <option>Select </option>
                                                    <option>Infort Technology</option>
                                              </select>
                                          </div>
                                        </div>
                                      </div>
                                                                                
                                         <div class="col-md-4">
                                       <div class="form-group">
                                            <label>ID Proof</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="id_proof">
                                                    <option>Select </option>
                                                    <option>Infort Technology</option>
                                              </select>
                                          </div>
                                        </div>
                                      </div>
                                                     
                                         <div class="col-md-4">
                                       <div class="form-group">
                                            <label>Birth Proof</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="birth_proof">
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
                                          <label>Education</label>
                                          <input type="text" name="education" class="form-control required" placeholder="Enter Your Education" />
                                        </div>
                                      </div>

                                       <div class="col-md-4">
                                        <div class="form-group">
                                          <label>School/College Name</label>
                                          <input type="text" name="college_name" class="form-control required" placeholder="Enter Your School/College Name" />
                                        </div>
                                      </div>
                                                     
                                      <div class="col-md-4">
                                        <div class="form-group">
                                        <center>
                                        <h5>Maritial Status</h5>
                                         <label class="radio-inline">
                                            <input type="radio" name="marriedstatus" value=""  required="">Married
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" name="marriedstatus" value="" required="">Unmarried
                                          </label>
                                          </center>
                                        </div>
                                      </div>

                                    

                                       </div> 

                                       <div class="row">
                                              <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nominee Full Name</label>
                                              <input type="text" name="nominee_name" class="form-control" placeholder="Enter Your Nominee Name"  required/>
                                        </div>
                                       </div> 

                                                               <div class="col-md-4">
                                         <div class="form-group">
                  <label>Nominee Full Name</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="nominee_name" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
                                </div>
                                           <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nominee Relation With Employee</label>
                                              <input type="text" name="nominee_relation" class="form-control" placeholder="Enter Your Nominee Relation"  required/>
                                        </div>

                                       </div>


                                <div class="col-md-4">
                                         <div class="form-group">
                              <label>Nominee DOB</label>
 <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="nomineedob" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
                              <!-- /.input group -->
                            </div>
                                </div>



                                
                                    <!--box-body-->
                                  
                               
                                           <h6 class="text-center" style="color:red">Reference Person Detail(1)</h6><hr>
                                        
                               
                                  <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Reference Person Name</label>
                                              <input type="text" name="refer_per_name1" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
                                                                                
                                     <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Reference Person Address</label>
                                          <textarea type="text" name="ref_per_add1" class="form-control required" placeholder="Enter Address Here" ></textarea>
                                        </div>
                                      </div>
                                                     
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Reference Contact Number</label>
                                          <input type="number" name="refer_per_mobile1" class="form-control required" placeholder=""/>
                                        </div>
                                      </div> 
                                  </div>
                                     
                                   
                                           <h6 class="text-center" style="color:red">Reference Person Detail(2)</h6><hr>
                                        
                                
                                   <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Reference Person Name</label>
                                              <input type="text" name="refer_per_name2" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
                                                                                
                                     <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Reference Person Address</label>
                                          <textarea type="text" name="ref_per_add2" class="form-control required" placeholder="Enter Address Here" ></textarea>
                                        </div>
                                      </div>
                                                     
                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Reference Contact Number</label>
                                          <input type="number" name="refer_per_mobile2" class="form-control required" placeholder=""/>
                                        </div>
                                      </div> 
                                  </div>
                                 
                                 <div class="row">     
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Refered By Name</label>
                                          <input type="text" name="refer_by_name" class="form-control required" placeholder=""/>
                                        </div>
                                  </div>    
                                   

                                <div class="col-md-4">
                                         <div class="form-group">
                  <label>PCC Date</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="pccdate" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
                                </div>

                               <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Remarks</label>
                                          <input type="text" name="refer_remark" class="form-control required" placeholder=""/>
                                        </div>
                                  </div> 

                              </div>
                               <div class="row">
                               <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Bank Name</label>
                                          <input type="text" name="refer_bank_name" class="form-control required" placeholder=""/>
                                        </div>
                                  </div>      

                                <div class="col-md-4">
                                      <div class="form-group">
                                          <label>Bank Account No.</label>
                                          <input type="number" name="refer_bank_number" class="form-control required" placeholder=""/>
                                        </div>
                                  </div>                                            
                                   <div class="col-md-4">
                                      <div class="form-group">
                                          <label>PAN No.</label>
                                          <input type="number" name="refer_pan_no" class="form-control required" placeholder=""/>
                                        </div>
                                  </div>   
                              </div>
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label>IFSC No.</label>
                                          <input type="number" name="refer_ifsc_number" class="form-control required" placeholder=""/>
                                        </div>
                                  </div> 

                              <div class="col-md-4">
                                      <div class="form-group">
                                          <label>UAN</label>
                                          <input type="number" name="refer_uan_number" class="form-control required" placeholder=""/>
                                        </div>
                                  </div> 

                               <div class="col-md-4">
                                      <div class="form-group">
                                          <label>PF Account No.</label>
                                          <input type="number" name="refer_pf_number" class="form-control required" placeholder=""/>
                                        </div>
                                  </div> 
                              </div>
                            <div class="row">
                             <div class="col-md-6">
                                      <div class="form-group">
                                          <label>ESIC No.</label>
                                          <input type="number" name="refer_esic_number" class="form-control required" placeholder=""/>
                                        </div>
                                  </div>  
                              <div class="col-md-6">
                                      <div class="form-group">
                                          <label>WCP No.</label>
                                          <input type="number" name="refer_wcp_number" class="form-control required" placeholder=""/>
                                        </div>
                                  </div> 
                        </div>
                   </div>
                   
                         <div class="card-footer">
                                           <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <button type="submit" class="btn btn-primary">Cancel</button>
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