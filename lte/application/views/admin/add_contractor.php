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
            <h1 class="m-0 text-dark">Add Contractor</h1>
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
                                    <a href=""><h6 class="text-center">Contractor Details</h6></a>
                                </div>
                                <!-- /.box-header -->
                                 <!-- form start -->
                                <form role="form" id="form" 
                                action="<?php echo base_url().'admin/Add_contractor/save'?>" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Contractor Name</label>
                                           <input type="text" name="contractorname"
                                               class="form-control" 
                                               placeholder="Enter Contractor Name" />
                                               
                                        </div>
                                      </div>
                                   
                                                                                
                                       <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Contractor Address</label>
                                              <input type="text" name="caddress" class="form-control required" placeholder="Enter Address" required/>
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Contractor Billing Address</label>
                                              <input type="text" name="billingaddress" class="form-control required" placeholder="Enter Your Area" required/>
                                        </div>
                                       </div>
                                     </div>
                                   
                                    <!-- /.box-body -->
                                    <div class="row">
                                  <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Telephone Number</label>
                                         <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" name="tele" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
                  </div>
                                        </div>
                                      </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Fax Number</label>
                                          <input type="number" name="fax" class="form-control required" placeholder="" required/>
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Website</label>
                                              <input type="text" name="website" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
</div>
                                       <!--  <div class="box-header" style="text-align: center">
                                           <h1 class="box-title" style="color:red">Key Contract Person Commercial Details</h1>
                                        </div> -->
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
                                          <label>Telephone Number</label>
                                          <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" name="ctele" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
                  </div>
                                        </div>
                                      </div>
                                   </div>
                                    <!-- /.box-body -->
                                    <div  style="text-align: center">
                                           <h6  style="color:red">Key Contract Person Billing Details</h6><hr>
                                      </div> 
<div class="row">
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name</label>
                                              <input type="text" name="bname" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
                                                                                
                                        <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Email Id</label>
                                          <input type="email" name="bemail" class="form-control required" placeholder="Enter Your Email Id" />
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Telephone Number</label>
                                          <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" name="btele" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
                  </div>
                                        </div>
                                      </div> 
                               </div>
                                    <!--box-body-->

                                    <div  style="text-align: center;">
                                           <h6 style="color:red">Key Contract Person Operation Details</h6><hr>
                                      </div>
<div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name</label>
                                              <input type="text" name="oname" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
                                                                                
                                        <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Email Id</label>
                                          <input type="email" name="oemail" class="form-control required" placeholder="Enter Your Email Id" />
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-4">
                                        <div class="form-group">
                                          <label>Telephone Number</label>
                                         <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" name="otele" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
                  </div>

                                        </div>
                                      </div>
                                   </div>
                                    <!--box-body-->
                                      
                              <div  style="text-align: center;">
                                           <h6 style="color:red">Tax Details</h46>
                                      </div> <hr>
<div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>State</label>
                                              <input type="text" name="cstate" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
                                                                                
                                        <div class="col-md-4">
                                        <div class="form-group">
                                          <label>GST NO.</label>
                                          <input type="number" name="cgst" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
                                                     
                                       <div class="col-md-4">
                                        <div class="form-group">
                                          <label>PAN</label>
                                          <input type="number" name="cpan" class="form-control required" placeholder=""/>
                                        </div>
                                      </div>
</div>
<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State Code</label>
                                              <input type="number" name="statenumber" class="form-control required" placeholder="" />
                                        </div>
                                      </div>
                                                                                
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Licence Code</label>
                                              <input type="name" name="licencecode" class="form-control required" placeholder="Enter Your Compny Name" />
                                        </div>
                                      </div> 
   </div>
 </div>
    <div class="card-footer">
                                   <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                     </div>   
                                     </div>                                
                                    </div>
                                    </div>
                                </form>


                               </div>

                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
                                    <div class="card-footer">
                        <div class="row">
                                        
                                            <button type="submit" class="btn btn-primary">Save</button>
                                       
                        </div>
                      </div>
                      </form>
                       </div>
                    


                   </div>
                   </div>
                  </div>
              </div>   <!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.right-side -->
        </div><!-- ./wrapper -->

    </body>
</html>