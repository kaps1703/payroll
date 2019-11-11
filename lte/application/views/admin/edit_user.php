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
            <!--<small>Preview sample</small>-->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo base_url();?>admin/UserController/userlisting">Admin Users</a></li>
            <li class="active">Edit User</li>
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
                                    <h3 class="box-title"> Edit User</h3>
                                </div><!-- /.box-header -->
                                 <!-- form start -->
                                <form role="form_user" id="form_user" action="<?php echo base_url();?>admin/UserController/user_update" method="post" enctype="multipart/form-data">
                                 <?php
                                 if($this->session->flashdata('login_error')!='')
								 echo $this->session->flashdata('login_error');
								 ?>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>User Full Name</label>
                                            <input type="text" class="form-control required"  name="user_name" id="user_name" style="width:250px" value="<?php echo $data[0]['user_name']?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Role</label>
                                            <select class="form-control required" name="role_id" id="role_id" >
                                          <option value="" selected="selected">Select</option>
                                           <?php
                               //echo '<pre>';print_r($productArr);die;
                               // echo $productArr[0]
                               for($i=0;$i< sizeof($data2);$i++)
                               { ?>
                                <option <?php if($data2[$i]['role_id'] == $data[0]['role_id']) echo 'selected="selected"'; ?> value="<?php echo $data2[$i]['role_id'] ;?>"><?php echo $data2[$i]['role_name'] ;?></option>
                               <?php } ?>
                                             </select>
                                        </div>
                                         <div class="row">   
                                        <div class="col-lg-6 col-md-8 col-xs-10 form-group">
                                            <label>Email</label>
                                            <input  type="email" class="form-control required" name="email" id="email" value="<?php echo $data[0]['email']?>">
                                        </div>
                                        </div>

                                        <div class="row">   
                                        <div class="col-lg-6 col-md-8 col-xs-10 form-group">
                                            <label>Login (will be used for login, Min-8 Characters)</label>
                                            <input minlength="8" type="text" class="form-control required "  name="login_id" id="login_id" value="<?php echo $data[0]['user_login_id']?>">
                                        </div>
                                        </div>
                                        
                                        <div class="row">   
                                        <div class="col-lg-6 col-md-8 col-xs-10 form-group">
                                            <label>Reset Password</label>
                                            <input type="checkbox" class="minimal-red" id="reset_pass" name="reset_pass"/>
                                        </div>
                                        </div>
                                        <div id="pass_div" class="row" style="display:none">
                                        <div class="col-lg-6 col-md-8 col-xs-10 form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control required"   name="password" id="password" value="">
                                        </div>
                                        
                                        
                                        <div class="col-lg-6 col-md-8 col-xs-10 form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control required"   name="confirmation" id="confirmation" value="">
                                        </div>
                                        </div>

                                        
                                      <div class="form-group">
                                            <label>Status</label>
                                            <select id="user_status" name="user_status" class="form-control required">
                                           <option value="" selected="selected">Status</option> 
                                          <option <?php if($data[0]['status']=='Active') echo "selected=\"selected\"" ?>  value="Active">Active</option>
                                          <option <?php if($data[0]['status']=='Inactive') echo "selected=\"selected\"" ?>  value="Inactive">Inactive</option>
                                        </select>
                                        </div>
                                             <input type="hidden" id="user_id" name="user_id" value="<?php echo md5($data[0]['user_id'])?>" />
                                
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
  <link href="<?=base_url()?>admindata/plugins/fileupload/dropzone.css" rel="stylesheet" type="text/css" />
         <script src="<?=base_url()?>admindata/plugins/fileupload/dropzone.js" type="text/javascript"></script>
    <script>
	var url2;
Dropzone.autoDiscover = false;
 url2="<?php echo base_url();?>admin/UserController/fileupload/";

   var myDropzone= $("#mydiv").dropzone({ url: url2,uploadMultiple: false
   
   , accept: function(file, done) {
            console.log(file);
            if (file.type != "image/jpeg" && file.type != "image/png"  && file.type != "image/bmp") {
                done("Error! Files of this type are not accepted");
            }
            else { done(); }
        },
  init: function() {
	
	this.on("addedfile", function() {
      if (this.files[1]!=null){
        this.removeFile(this.files[0]);
      }
    });
  },
   success: function(file, response){
                $("#photo").val(response);
			
            }
  });
  
    
  
    </script>            
<script>
   $(document).ready(function(){
   
   $("#form").validate();
   
   $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
   });
   
  $('#reset_pass').on('ifChecked', function(event){
    $("#pass_div").show();
});
$('#reset_pass').on('ifUnchecked', function(event){
    $("#pass_div").hide();
});

 </script>  
<script>
$(document).ready(function(e) {
    

$('#form_user').validate({
            rules : {
                password : {
                    minlength : 5
                },
                confirmation : {
                    minlength : 5,
                    equalTo : "#password"
                }
            }
})
});
</script> 
 
    </body>
</html>