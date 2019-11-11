<!DOCTYPE html>
<html>
    <head>
<?php $this->load->view('admin/sections/head.php')?>
</head>    

    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
       <div class="wrapper">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('admin/sections/navbar.php') ?>
       
            <!-- Left side column. contains the logo and sidebar -->
            <div class="content-wrapper">
            <?php $this->load->view('admin/sections/sidebar.php') ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            
                <!-- Content Header (Page header) -->
                         <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Allot Material To Company</h1>
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
                                    <a href=""><h6 class="">Display Employee Allotments</h6></a>
                                </div>
                                <!-- /.card-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="<?php echo base_url().'admin/Allot_material/save'?>" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row">                                           
                                     <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Select Company</label>
                                              <div class="form-select-list">
                                              <select class="form-control required" name="c_id" id=" c_id">
                                            <option value="" selected="selected">Select</option>
                                           <?php
                            
                                           for($i=0;$i< sizeof($data1);$i++)
                                           { ?>
                                            <option value="<?php echo $data1[$i]['c_id'] ;?>">
                                              <?php echo $data1[$i]['c_c_name'] ;?></option>
                                           <?php } ?>
                                             </select>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Select Designation</label>
                                              <div class="form-select-list">
                                              <select class="form-control required" name="d_id" id=" d_id">
                                            <option value="" selected="selected">Select</option>
                                           <?php
                            
                                           for($i=0;$i< sizeof($data2);$i++)
                                           { ?>
                                            <option value="<?php echo $data2[$i]['d_id'] ;?>">
                                              <?php echo $data2[$i]['designation_name'] ;?></option>
                                           <?php } ?>
                                             </select>
                                          </div>
                                        </div>
                                      </div>

                                        <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Employee Name</label>
                                              <div class="form-select-list">
                                             <select class="form-control required" name="employee" id=" emp_id">
                                            <option value="" selected="selected">Select</option>
                                           <?php
                            
                                           for($i=0;$i< sizeof($data3);$i++)
                                           { ?>
                                            <option value="<?php echo $data3[$i]['emp_id'] ;?>">
                                              <?php echo $data3[$i]['emp_name'] ;?></option>
                                           <?php } ?>
                                             </select>
                                          </div>
                                        </div>
                                      </div>
                                     </div>

                                      <div class="row">                                           
                                       <div class="col-md-4">
                                         <div class="form-group">
                                              <label>From Date</label>
                                                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="mat_from_date" class="form-control float-right" id="reservation">
                  </div>
                                                </div>
                                </div>

                                 <div class="col-md-4">
                                         <div class="form-group">
                                              <label>To Date</label>
                                             <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="mat_to_date" class="form-control float-right" id="reservation">
                  </div>
                                                </div>
                                               </div>

                                 <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Select Material</label>
                                              <div class="form-select-list">
                                             <select class="form-control required" name="material" id=" m_id">
                                            <option value="" selected="selected">Select</option>
                                           <?php
                            
                                           for($i=0;$i< sizeof($data4);$i++)
                                           { ?>
                                            <option value="<?php echo $data4[$i]['m_id'] ;?>">
                                              <?php echo $data4[$i]['material_name'] ;?></option>
                                           <?php } ?>
                                             </select>
                                          </div>
                                        </div>
                                      </div>
                                     </div>

                                     <div class="row">
                                         <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Size</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="size">
                                                    <option>Select Size</option>
                                                    <option>Infort Technology</option>
                                                                           
                                              </select>
                                          </div>
                                        </div>
                                      </div>

                                   <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Material Deduction Month</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="deduction_month">
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
                                        <center>
                                        <h5>Deduction Status</h5>
                                         <label class="radio-inline">
                                            <input type="radio" value="Deducted" name="deduction_status">Deducted
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" value="Not Deducted" name="deduction_status">Not Deducted
                                          </label>
                                          </center>
                                        </div>
                                      </div>

                                     </div>
                                   </div>

                                             <div class="card-footer">
                        <div class="row">
                                        
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="submit" class="btn btn-primary ml-2">Update</button>
                                            <button type="submit" class="btn btn-primary ml-2">Cancel</button>
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