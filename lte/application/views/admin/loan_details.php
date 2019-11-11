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
           <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Loan Details</h1>
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
                            <div class="card">
                               <div class="card-header" style="text-align: center">
                                    <a href=""><h6 class="">Display Loan Details</h6></a>
                                </div>
                                <!-- /.card-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="<?php echo base_url().'admin/Loan_details/save'?>" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row">                                           
                                     <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Employee</label>
                                              <div class="form-select-list">
                                              <select class="form-control custom-select-value" name="employee">
                                                    <option>Select</option>
                                                    <option>Infort Technology</option>
                                                                           
                                              </select>
                                          </div>
                                        </div>
                                      </div>

                                       <div class="col-md-4">
                                         <div class="form-group">
                                              <label>Loan Taken Date</label>
                                              <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="loan_taken_date" class="form-control float-right" id="reservation">
                  </div>
                                                </div>
                                </div>
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Purpose</label>
                                            <textarea type="text" name="purpose" class="form-control" placeholder=""  required></textarea>
                                        </div>
                                      </div>
                                      
                                     </div>

                                      <div class="row">                                           
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Amount</label>
                                              <input type="text" name="amount" class="form-control" placeholder="Enter Amount"  required />
                                        </div>
                                      </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Interest Rate</label>
                                              <input type="text" name="interest_rate" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>No. Of months</label>
                                              <input type="number" name="no_months" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>

                                     </div>

                                           <div class="row">
                                           <div class="col-md-4">
                                            <button type="submit" class="btn btn-primary">Calculate EMI</button>
                                       </div>
                                     </div>


                                   <div class="row">                                           
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>EMI</label>
                                              <input type="text" name="emi" class="form-control" placeholder="Enter EMI"  required />
                                        </div>
                                      </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Float Of Interest Rate Yearly</label>
                                              <input type="text" name="interest_rate_yearly" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Float Of Interest Rate Monthly</label>
                                              <input type="text" name="interest_rate_monthly" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>

                                     </div>

                                          <div class="row">                                           
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Yearly Interest Amount</label>
                                              <input type="text" name="amount_yearly" class="form-control" placeholder="Enter Amount"  required />
                                        </div>
                                      </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Total Interest Amount</label>
                                              <input type="text" name="total_amount" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Remarks</label>
                                              <input type="text" name="remarks" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>

                                     </div>

                                        <div class="card-footer">
                        <div class="row">
                                        
                                            <button type="submit" class="btn btn-primary">Save</button>
                                           
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