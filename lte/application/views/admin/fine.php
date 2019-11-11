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
            <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Fine Details </h1>
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
                                    <a href=""><h6 class="text-center">Display Fine Details</h6></a>
                                </div>
                                <!-- /.card-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="<?php echo base_url().'admin/Fine/save'?>" method="post" enctype="multipart/form-data">
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
                                              <label>Final Date</label>
                                                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="date" name="final_date" class="form-control float-right" id="reservation">
                  </div>
                                                </div>
                                </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                            <label>Act/Omission For</label>
                                              <textarea type="text" name="act" class="form-control" placeholder=""  required></textarea>
                                        </div>
                                      </div>
                                      
                                     </div>

                                      <div class="row">                                           
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Amount</label>
                                              <input type="text" name="amount" class="form-control" placeholder="Enter Amount"  required />
                                        </div>
                                      </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                        <center>
                                        <h5>Whether Workman Showed Couse Against Deduction</h5>
                                         <label class="radio-inline">
                                            <input type="radio" value="yes" name="workman">Yes
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio" value="no" name="workman">No
                                          </label>
                                          </center>
                                        </div>
                                      </div>

                                     </div>

                                   <div class="row">                                           
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name Of Person In Whose Presence Employees Explaination Was Heard</label>
                                              <input type="text" name="name_person" class="form-control" placeholder="Enter Name"  required />
                                        </div>
                                      </div>
                                 <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Remarks</label><br>  
                                              <input type="text" name="remarks" class="form-control" placeholder=""  required />
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
                                    </div>
                                </form>
                              </div>
                            </div>

<div class="container">
                                  <div class="row">          
                                    <div class="col-md-12 col-xs-12">            
                                      <div class="card">              
                                       <div class="card-header">
                                        <h6 class="text-center">
                                           Fine List          
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
                                   <!--  <th>Employee</th> -->      
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Final Date</th> 
                                   <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Act/Omission</th> 
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Amount</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Workman Show</th>             
                                   <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Name Of Person</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Remarks</th>
                                           
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                 <?php $i=0;    
                                 foreach($fine as $row)
                                 {
                                    $i++;
                                    ?>
                                 <tr role="row" class="odd">
                                                <td class="sorting_1"><?=$i?></td>  
                                   <!--  <td><?=$row['emp_id']?></td>   -->
                                    <td><?=$row['final_date']?></td>
                                    <td><?=$row['act']?></td>                                               
                                     <td><?=$row['amount']?></td>
                                    <td><?=$row['wrokman_show']?></td>
                                    <td><?=$row['name_per']?></td>
                                    <td><?=$row['remark']?></td>
                                    
                                    <td>
                                      <a href="<?=base_url()?>admin/fine/edit/<?=md5($row['fine_id'])?>"><button type="button" class="btn btn-info btn-xs">Edit</button></a>                     
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

    </body>
</html>