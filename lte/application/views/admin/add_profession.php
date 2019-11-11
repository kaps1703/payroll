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
            <h1 class="m-0 text-dark">Add Profession Tax</h1>
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
                                    <a href=""><h6 class="">Tax Details</h6></a>
                                </div>
                                <!-- /.box-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="<?php echo base_url().'admin/Add_profession/save'?>" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row"> 
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Minimum Salary</label>
                                              <input type="number" name="minimumsalary" class="form-control" placeholder="0.0"  required />
                                        </div>
                                      </div>                                         
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Maximum Salary</label>
                                              <input type="number" name="maximumsalary" class="form-control" placeholder="0.0"  required />
                                        </div>
                                      </div>
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Taxsable Ammount</label>
                                              <input type="number" name="taxsableamount" class="form-control" placeholder="0.0"  required />
                                        </div>
                                      </div>
                                         </div></div>
                                       <div class="card-footer">
                                           <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary" >ADD</button>
                                           <!--  <button type="submit" class="btn btn-primary" style="margin-top:15px; width:80px">Update</button>
                                            <button type="submit" class="btn btn-primary" style="margin-top:15px; width:80px">Cancel</button> -->
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
                                           Tax List          
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
                                   <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Sr. No.</th>
                                   <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Minimum Salary</th>      
                                    <th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Maximum Salary</th>   
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Taxsable Ammount</th>   
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                 <?php $i=0;    
                                 foreach($profession as $row)
                                 {
                         $i++;
                         ?>
                                   <tr role="row" class="odd">
                                                <td class="sorting_1"><?=$i?></td>  
                                    <td><?=$row['min_salary']?></td>  
                                    <td><?=$row['max_salary']?></td>
                                    <td><?=$row['tax_amount']?></td>                                               
                                    
                                    <td>
                                      <a href="<?=base_url()?>admin/Add_profession/edit/<?=md5($row['id'])?>"><button type="button" class="btn btn-info btn-xs">Edit</button></a>                     
                                     <!--                                          -->
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

                    </div>   <!-- /.row -->
                  </div>
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