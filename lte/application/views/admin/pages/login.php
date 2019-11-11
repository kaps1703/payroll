<!DOCTYPE html>
<html>
    <head>
<?php $this->load->view('admin/pages/head.php')?>
</head>    
<body class="login-page">  
<!--  style="
    padding-top: 10px !important;
"> -->
    <div class="login-box">
      <div class="login-logo bg-aqua color-palette">
          <center><img src="<?php echo base_url();?>img/logo.jpg" class="img-responsive"  
></center>
    <!--  POLYMOULD -->
     <hr style="margin:0px;">   
    <!--  <small style="font-size:60%;"><h4>CRM Software</h4></small>  -->   
     <hr style="margin:0px;">   
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Sign in</p>
        <form action="<?php echo base_url();?>admin/login/checklogin" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control"  required placeholder="User ID" name="userid"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" required placeholder="Password" name="password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <a href="<?php echo base_url().'admin/login/forget_password'?>">Forget Password</a>                       
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
             <div class="col-xs-12">    
           <p class="error"><?php if($this->session->flashdata('user')!='')
	          echo $this->session->flashdata('user');?></p>
          </div>
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

   
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
    
</html>