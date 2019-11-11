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
            <h1 class="m-0 text-dark">Add New Role And Set Permisions</h1>
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
                                    <a href=""><h6 class="">Role Details</h6></a>
                                </div>
                                 <!-- form start -->
                                <form role="form" id="form" action="<?php echo base_url()."admin/PermissionController/rolePermissionSubmit" ?>" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Add New Role</label>
                                            <input type="text" class="form-control required"  placeholder="Enter Role name" name="role_id" id="role_id" style="width:250px">
                                        </div>
                                         
                                        <div class="form-group">
                                            <label>Set Department</label>
                                             <div class="row">
                                             
                                              <div class="col-lg-3 col-md-2 col-xs-2"></div>
                                             <div class="col-lg-8 col-md-12 col-xs-12  checkbox icheck">
                                                <label>
                                                  <input type="checkbox" id="allselect">Select All
                                                </label>
                                             
                                              </div>
                                             
                                            <?php
                              
                               for($i=0;$i< sizeof($data);$i++)
                               { ?>
                               
                                          <div class="col-lg-3 col-md-2 col-xs-2"></div>
                                <div class="col-lg-8 col-md-12 col-xs-12  checkbox icheck">
                                                <label>
                                                  <input type="checkbox" name="permission_id[]" value="<?php echo $data[$i]['permission_id'] ;?>"> <?php echo $data[$i]['permission'] ;?>
                                                </label>
                                             
                                              </div>
                                       <?php } ?>         
                                         </div>    
                                        </div>
                                       
                                
                                    </div><!-- /.box-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->

                        </div><!--/.col (left) -->
                        <!-- right column -->
                        <!--/.col (right) -->
                    </div>   <!-- /.row -->
                  </div>
                 </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       <?php $this->load->view('admin/pages/footer.php') ?>
    </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        
<script>
   $(document).ready(function(){
   
   $("#form").validate();
    $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
		
		$('#allselect').on('ifChecked', function(event){
			
		$("input[type='checkbox']").each(function() {
		  
		 $(this).iCheck('check');
		});
		});
		
		$('#allselect').on('ifUnchecked', function(event){
			
		$("input[type='checkbox']").each(function() {
		  
		 $(this).iCheck('uncheck');
		});
});
	  
	
   });
</script>  

    </body>
</html>