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
            <?php $this->load->view('admin/sections/sidebar.php') ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            
                <!-- Content Header (Page header) -->
                         <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Loan Advance Details</h1>
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
                            <div class="card card-primary">
                              <div class="card-header" style="text-align: center">
                                    <a href=""><h6 class="">Display Employee Allotments</h6></a>
                                </div>
                                <!-- /.card-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="<?php echo base_url().'admin/Loan_advance/save'?>" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row">                                           
                                     <div class="col-md-4">
                                           <div class="form-group">
                                            <label>Employee</label>
                                              <div class="form-select-list">
                                              <select class="form-control required" name="employee" id=" emp_id">
                                            <option value="" selected="selected">Select</option>
                                           <?php
                            
                                           for($i=0;$i< sizeof($data1);$i++)
                                           { ?>
                                            <option value="<?php echo $data1[$i]['emp_id'] ;?>">
                                              <?php echo $data1[$i]['employee'] ;?></option>
                                           <?php } ?>
                                             </select>
                                          </div>
                                        </div>
                                      </div>

                                       <div class="col-md-4">
                                         <div class="form-group">
                                              <label>Advance Taken Date</label>
                                             <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="advance_date" class="form-control float-right" id="reservation">
                  </div>
                                                </div>
                                </div>

                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Amount</label>
                                              <input type="text" name="amount" class="form-control" placeholder="Enter Amount"  required />
                                        </div>
                                      </div>
                                     </div>

                                      <div class="row">                                           
                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Purpose</label>
                                            <textarea type="text" name="purpose" class="form-control" placeholder=""></textarea>
                                        </div>
                                      </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No. Of Installments</label>
                                              <input type="number" name="installments" class="form-control" placeholder=""  required />
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
                                     </div>
                                                                    
                             
                                </form>
                              </div>
                           

                                                        <div class="container">
                                  <div class="row">          
                                    <div class="col-md-12 col-xs-12">            
                                      <div class="card">              
                                       <div class="card-header">
                                        <h6 class="text-center">
                                           Designation List          
                                          </h6>
                                        </div><!-- /.box-header -->
                                        <div class="card-body">
                                          <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <div class="row">
                                              <div class=" col-md-6 col-sm-12">
                                                <div class="dataTables_length" id="example1_length">
                                                  <label>Show <select name="example1_length" aria-controls="example1" class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                  </select> entries</label>
                                                </div>
                                              </div>
                                               <div class="col-md-6 col-sm-12  ">
                                                <div id="example1_filter" class="dataTables_filter float-right ">
                                                  <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                            <thead>
                                 <tr role="row">                                   
                                  <!--  <th>Employee</th> -->
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Sr. No.</th>    
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Advance Taken Date</th>      
                                   <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Amount</th> 
                                     <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Purpose</th> 
                                      <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No. Of Installments</th>             
                                           
                                   <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <!--  <?php $i=0; 

                                 foreach($abc as $row)
                                ///  echo print_r(loan_advance)
                                 {
                                    $i++;
                                    ?>
 -->                                 <tr role="row" class="odd">
                                                <td class="sorting_1"><?=$i?></td>  
                                   <!--  <td><?=$row['emp_id']?></td>   -->
                                    <td><?=$row['advance_date']?></td>
                                    <td><?=$row['amount']?></td>                                               
                                     <td><?=$row['purpose']?></td>
                                    <td><?=$row['no_of_insta']?></td>
                                    
                                    <td>
                                      <a href="<?=base_url()?>admin/Loan_advance/edit/<?=md5($row['adv_id'])?>"><button type="button" class="btn btn-info btn-xs">Edit</button></a>                     
                                   </td>
                                  </tr>
                                  <?php }?>
                                </tbody>
                                
                              </table>
                            </div>
                            </div><!-- /.card-body -->
                          </div><!-- /.card -->
                        </div><!-- /.col -->
                      </div><!-- /.row -->


                               </div>

                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.right-side -->
        </div><!-- ./wrapper -->
 <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
       
      });
    </script>
    </body>
</html>