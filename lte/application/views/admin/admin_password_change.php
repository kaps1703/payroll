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
                       Change Password
                    </h1>
                    <ol class="breadcrumb">
                       <li><a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="<?php echo base_url();?>admin/categories/">Admin</a></li>
                        <li class="active">Change Password</li>
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
                                    <h3 class="box-title">Change Password</h3>
                                </div><!-- /.box-header -->
                                 <!-- form start -->
                                <form role="form" id="form" action="<?php echo base_url();?>admin/change_password/submitnewpassword" method="post" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                           
                                              <input id="old_pass" name="old_pass" class="form-control required" type="password" onBlur="checkpassword(this.val)" style="width:250px">
                                        </div>
                                        
                                         <div class="form-group" id="showmatch" style="color:#00CC33;display:none">
                                            <label>Entered password is incorrect</label>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="text" class="form-control required"  name="new_pass" id="new_pass" style="width:250px">
                                        </div>
                                        
                                        
                                          <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="text" class="form-control required"   name="confirmation" id="confirmation" style="width:250px">
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
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
 <script type="text/javascript">

 	 function checkpassword()
     { 
	  
		var old_pass =document.getElementById('old_pass').value;
		//alert(old_pass);return false;
	 $.ajax({

				type: "POST",

				url: '<?php echo base_url();?>admin/change_password/chekpassword',

				data: '&old_pass='+old_pass,

				cache: false,

				beforeSend : function ()

				{

					$("#idAjaxLoader").css("display",'');

				},

				success: function (data) {

             				if(data=="notpresent")
							{
								$("#showmatch").show();
							
							}
						    if(data=='present')
							{
							    $("#showmatch").hide();
							}
					
				
				},

				

				error: function(data){

					alert("error here");

					//return false;

				}

		

	});	

	
	return false;

	}
  

	 </script>       
<script>
   $(document).ready(function(){
   
   $("#form").validate();
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