<header class="main-header">
        <!-- Logo -->
    
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="company_name col-lg-3  col-xs-3"> &nbsp; </div><div class="company_name col-lg-5 col-xs-5"><center>
         <!--    <img src="<?=base_url()?>admindata/img/logo.png" width="150" height="51" class="img-responsive"> -->
          </center></div>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
                      <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   <span class="hidden-xs"><?=ucwords($this->session->userdata("adminusername"))?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="<?php echo base_url().'admin/login/signout';?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>
        </nav>
      </header>

