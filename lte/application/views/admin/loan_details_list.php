<!DOCTYPE html>
<html>
  <head>
     <?php $this->load->view('admin/sections/head.php')?>     
  </head>
  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
       <?php $this->load->view('admin/sections/navbar.php') ?>      
      <!-- Left side column. contains the logo and sidebar -->
       <div class="content-wrapper">
        <?php $this->load->view('admin/sections/sidebar.php') ?>
      <!-- Content Wrapper. Contains page content -->
     
        <!-- Content Header (Page header) -->
            <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Loan Details List</h1>
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
        <section class="content "style="background: white"> 

                  <div class="container">      
          <div class="row">          
            <div class="col-md-12 col-xs-12">            
              <div class="card">              
                <div class="card-header">
                                    <a href=""><h6 class="text-center">Add Designation</h6></a>
                                </div>
                <div class="card-body">
                  <div style="overflow-x:auto;">
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
                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Sr. No.</th>
                     <!-- <th>Employee</th>  -->
                           <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Loan taken Date</th> 
                               <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Purpose</th>  
                               <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Amount</th>
                               <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Interest rate</th> 
                               <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No. Of Months</th> 
                               <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">EMI</th> 
                               <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Float Of Interest Rate Yearly</th>
                               <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Float Of Interest Rate Monthly</th>
                               <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Yearly Interest Amount</th>  
                               <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Total Interest Amount</th>
                               <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Remarks</th>
                                  
                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php $i=0;
                     foreach($loan_details as $row)
                     {
						 $i++;
						 ?>
                      <tr role="row" class="odd">
                                                <td class="sorting_1"><?=$i?></td>                     
                     <!--    <td><?=$row['emp_id']?></td> -->
                        <td><?=$row['loan_date']?></td>
                        <td><?=$row['purpose']?></td>
                        <td><?=$row['amount']?></td>
                        <td><?=$row['interest_rate']?></td>
                        <td><?=$row['months']?></td>
                        <td><?=$row['emi']?></td>
                        <td><?=$row['inte_rate_year']?></td>
                        <td><?=$row['inte_rate_month']?></td>
                        <td><?=$row['year_inte_amount']?></td>
                        <td><?=$row['total_inte_amount']?></td>
                        <td><?=$row['remarks']?></td>


                        <td>
                          <a href="<?=base_url()?>admin/loan_details/edit/<?=md5($row['loan_id'])?>"><button type="button" class="btn btn-info btn-xs">Edit</button></a>                     
                          <a onClick="return confirm('Are you sure you want to delete?')" href="<?=base_url()?>admin/loan_details/delete/<?=md5($row['loan_id'])?>"><button type="button" class="btn btn-danger btn-xs">Delete</button></a>
                       </td>
                      </tr>
                      <?php }?>
                   </tbody>
                                            
                                          </table>
                                        </div>
                                        </div><!-- /.box-body -->
                                      </div><!-- /.box -->
                                    </div><!-- /.col -->
                                  </div><!-- /.row -->
                            </div>
                          </div>
                 </section><!-- /.content -->

                  
            </div><!-- /.right-side -->
        </div><!-- ./wrapper -->-->
       <?php $this->load->view('admin/pages/footer.php') ?>
    </div><!-- ./wrapper -->

    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
       
      });
    </script>

  </body>
</html>
