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
            Role Permission
            <!--<small>Preview sample</small>-->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url();?>admin/PermissionController/rolepermissionlisting">Role Permission</a></li>
            <li class="active">Edit Role Permission</li>
          </ol>
        </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                           
                             <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Role and set Permissions</h3>
                                </div><!-- /.box-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="<?php echo base_url();?>admin/PermissionController/rolePermissionUpdate" method="post" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Edit Role</label>
                                            <input type="text" class="form-control required"  placeholder="Enter Role name" name="role_name" id="role_name" value="<?php echo $data4['role_name'];?>" style="width:250px">
                                        </div>
                                        <input type="hidden" id="role_id" name="role_id" value="<?php echo $data4['role_id']?>">
                                        
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
                                                  <input type="checkbox" name="permission_id[]" <?php if(in_array(@$data[$i]['permission_id'],@$listArr)) echo 'checked="checked"'; ?> value="<?php echo $data[$i]['permission_id'] ;?>"> <?php echo $data[$i]['permission'] ;?>
                                                </label>
                                             
                                              </div>
                                       <?php } ?>         
                                         </div>
                                            
                                            
                                        </div>
                                
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->

                        </div><!--/.col (left) -->
                        <!-- right column -->
                        <!--/.col (right) -->
                    </div>   <!-- /.row -->
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
<script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('e1');
              
               
			    //bootstrap WYSIHTML5 - text editor
               
            });
        </script>
    </body>
</html>