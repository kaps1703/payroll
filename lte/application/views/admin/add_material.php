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
            <h1 class="m-0 text-dark">Add Material Entry</h1>
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
                                    <a href=""><h6 class="">Material Details</h6></a>
                                </div>
                                <!-- /.box-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="<?php echo base_url().'admin/Add_material/save'?>" method="post" enctype="multipart/form-data">
                                  <div class="card-body">
                                    <div class="row"> 
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Material Name</label>
                                              <input type="text" name="materialname" class="form-control" placeholder="Enter Material Name"  required />
                                        </div>
                                      </div>                                         
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Size</label>
                                              <input type="number" name="size" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                              <input type="number" name="quantity" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Quality</label>
                                              <input type="text" name="quality" class="form-control" placeholder=""  required />
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                    <div class="form-group">
                                            <label>Unit</label>
                                              <input type="number" name="unit" class="form-control" placeholder=""  required />
                                        </div>
                                    </div>
                                    </div>
                                  </div>
                                       <div class="card-footer">
                                           <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                       </div>
                                     </div>
                                     </div>
                                                                    
                                    </div>
                                  </form>
                                                               <div class="container">
                                  <div class="row">          
                                    <div class="col-md-12 col-xs-12">            
                                      <div class="card">              
                                       <div class="card-header">
                                        <h6 class="text-center">
                                           Allowance List          
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
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Material Name</th>
                                       <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Size</th>
                                    <th>    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Quantity</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Quality</th>   
                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Unit</th>                  
                                           
                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                 <?php $i=0;    
                                 foreach($material as $row)
                                 {
                         $i++;
                         ?>
                                   <tr role="row" class="odd">
                                                <td class="sorting_1"><?=$i?></td>    
                                    <td><?=$row['material_name']?></td>
                                    <td><?=$row['size']?></td>
                                    <td><?=$row['quantity']?></td>
                                    <td><?=$row['quality']?></td>
                                    <td><?=$row['unit']?></td>                                               
                                    
                                    <td>
                                      <a href="<?=base_url()?>admin/Add_material/edit/<?=md5($row['id'])?>"><button type="button" class="btn btn-info btn-xs">Edit</button></a>                     
                                   <!--    <a onClick="return confirm('Are you sure you want to delete?')" href="<?=base_url()?>admin/Add_services/delete/<?=md5($row['id'])?>"><button type="button" class="btn btn-danger btn-xs">Delete</button></a> -->
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