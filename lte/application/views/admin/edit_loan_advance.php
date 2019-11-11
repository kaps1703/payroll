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
                     Loan Advance Edit
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
                                    <a href=""><h1 class="box-title">Edit Advance Details</h1></a>
                                </div>
                                <!-- /.box-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="<?php echo base_url().'admin/Loan_advance/edit_save'?>" method="post" enctype="multipart/form-data">
                                  <div class="box-body">
                                    <div class="row">                                           
                                     <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Employee</label>
                                              <div class="form-select-list">
                                              <select class="form-control required" name="employee" id="emp_id" >
                                          <option value="" selected="selected">Select</option>
                                           <?php
                                          for($i=0;$i< sizeof($data1);$i++)
                               { ?>
                                <option <?php if($data1[$i]['emp_id'] == $data[0]['emp_id']) echo 'selected="selected"'; ?> value="<?php echo $data1[$i]['emp_id'] ;?>"><?php echo $data1[$i]['emp_name'] ;?></option>
                               <?php } ?>
                                             </select>
                                          </div>
                                        </div>
                                      </div>

                                       <div class="col-md-4">
                                         <div class="form-group">
                                              <label>Advance Taken Date</label>
                                               <div class="input-group">
                                                  <div class="input-group-addon">
                                                  <i class="fa fa-calendar"></i>
                                                      </div>
                                                <input type="date"  value="<?php echo $data[0]['advance_date'] ?>" class="form-control" name="advance_date" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                                    </div>
                                                </div>
                                </div>

                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Amount</label>
                                              <input type="text"  value="<?php echo $data[0]['amount'] ?>" name="amount" class="form-control" placeholder="Enter Amount"  required />
                                        </div>
                                      </div>
                                     </div>

                                      <div class="row">                                           
                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Purpose</label>
                                            <textarea type="text"  value="<?php echo $data[0]['purpose'] ?>" name="purpose" class="form-control" placeholder=""></textarea>
                                        </div>
                                      </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No. Of Installments</label>
                                              <input type="number"  value="<?php echo $data[0]['no_of_insta'] ?>" name="installments" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                     </div>

                                       <div class="row">
                                           <div class="col-md-6">
                                             <input type="hidden" value="<?php echo $data[0]['adv_id'] ?>"  name="id"/>
                                            <button type="submit" class="btn btn-primary" style="margin-top:15px;">Save</button>
                                            <button type="submit" class="btn btn-primary" style="margin-top:15px; ">Cancel</button>
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