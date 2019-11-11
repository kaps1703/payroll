<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('admin/pages/head.php')?>
</head>    
        <body class="skin-black">
       <div class="wrapper">
       <?php $this->load->view('admin/pages/header.php') ?>
      
      <!-- Left side column. contains the logo and sidebar -->
        <?php $this->load->view('admin/pages/leftsidebar.php') ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User
            <!--<small>advanced tables</small>-->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <!--<li><a href="#">Tables</a></li>-->
            <li class="active">Role Permission</li>
          </ol>
        </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    
                                    <h3 class="box-title pull-right">
                  <a href="<?=base_url()?>admin/PermissionController/add_role_permission"><button type="button" class="btn btn-success btn-xs">Add</button></a>
                 
                  
                  </h3>
                                                                     
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Role Id</th>
                                                <th>Role</th>
                                             
                                                <th>Action</th>
                                                
                                                                                           </tr>
                                        </thead>
                                        <tbody>
                                        <?php
										$i=1;
										 $perms_string ='';
				  foreach($data as $value)
				  {
										?>
                                            <tr>
                                                <td><?php echo $value['role_id']?></td>
                                                <td><?php echo $value['role_name']?></td>
                                               <td>
                                               <a href="<?=base_url()?>admin/PermissionController/edit_role_permission/<?=md5($value['role_id'])?>"><button type="button" class="btn btn-info btn-xs">Edit</button></a>
                      
                          <a onClick="return confirm('Are you sure you want to delete?')" href="<?=base_url()?>admin/PermissionController/delete_role_permission/<?=md5($value['role_id'])?>"><button type="button" class="btn btn-danger btn-xs">Delete</button></a> 
                                               
                                               
                                                </td>
                                            </tr>
                                            <?php
											}
											?>
                                        </tbody>
                                        
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

               </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       <?php $this->load->view('admin/pages/footer.php') ?>
        </div><!-- ./wrapper -->


      
        
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
				});
               
        </script>
    </body>
</html>