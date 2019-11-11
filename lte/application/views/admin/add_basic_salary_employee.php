<!DOCTYPE html>
<html>
    <head>
<?php $this->load->view('admin/pages/head.php')?>
</head>    

    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('admin/pages/header.php') ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php $this->load->view('admin/pages/leftsidebar.php') ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     Add Basic Salary Of Employee
                    </h1>
                    <ol class="breadcrumb">
                       <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url();?>admin/categories/">Admin</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                             <!-- general form elements -->
                            <div class="box box-primary">
                               <div class="box-header" style="text-align: center">
                                    <a href=""><h1 class="box-title">Display Salary Details</h1></a>
                                </div>
                                <!-- /.box-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="<?php echo base_url().'admin/Add_basic_salary/save'?>" method="post" enctype="multipart/form-data">
                                  <div class="box-body">
                                    <div class="row">                                           
                                     <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Designation Category</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="designation_type">
                                                    <option>Select</option>
                                                    <option>Infort Technology</option>
                                                                           
                                              </select>
                                          </div>
                                        </div>
                                      </div>

                                   <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Designation Name</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="designation_name">
                                                    <option>Select</option>
                                                    <option>Infort Technology</option>
                                                                           
                                              </select>
                                          </div>
                                        </div>
                                      </div>
                                     <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Employee Name</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="employee_name">
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
                                            <label>Basic Salary</label>
                                              <input type="text" name="basic_salary" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>DA</label>
                                              <input type="text" name="da" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Basic + DA</label>
                                              <input type="text" name="total_basic" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>

                                     </div>

                                           <div class="row">
                                           <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary" style="margin-top:15px; width:100px">Calculate EMI</button>
                                       </div>
                                     </div>


                                   <div class="row">                                           
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>CITY/Shift/Conveyance/Other Allowance</label>
                                              <input type="text" name="allowance" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Other Deduction/Canteen</label>
                                              <input type="text" name="deduction" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>LWF Value</label>
                                              <input type="text" name="lwf_value" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>

                                     </div>
                                          <div class="row">                                           
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>HRA Value(%)</label>
                                              <input type="text" name="hra_value" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Gross Salary</label>
                                              <input type="text" name="gross_salary" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                            <label>PF Value(%)</label>
                                              <input type="text" name="pf_value" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>

                                     </div>

                                        <div class="row">                                           
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ESIC Value(%)</label>
                                              <input type="text" name="esic_value" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Profession Tax</label>
                                              <input type="text" name="profession_tax" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Total Deduction</label>
                                              <input type="text" name="total_deduction" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>

                                     </div>

                                        <div class="row">                                           
                                       <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Total Net Pay</label>
                                              <input type="text" name="net_pay" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                        <div class="col-md-3">
                                        <div class="form-group">
                                            <label>CTC Per Day Rate</label>
                                              <input type="text" name="ctc_per_date" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                       <div class="col-md-3">
                                         <div class="form-group">
                                              <label>From Date</label>
                                               <div class="input-group">
                                                  <div class="input-group-addon">
                                                  <i class="fa fa-calendar"></i>
                                                      </div>
                                                <input type="date" class="form-control" name="from_date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                                    </div>
                                                </div>
                                      </div>
                                       <div class="col-md-3">
                                         <div class="form-group">
                                              <label>To Date</label>
                                               <div class="input-group">
                                                  <div class="input-group-addon">
                                                  <i class="fa fa-calendar"></i>
                                                      </div>
                                                <input type="date" class="form-control" name="to_date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                                    </div>
                                                </div>
                                      </div>

                                     </div>

                                       <div class="row">
                                           <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary" style="margin-top:15px;">Add Salary</button>
                                       </div>
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

    </body>
</html>