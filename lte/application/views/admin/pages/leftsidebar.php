<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
            </div>
            <div class="pull-left info">
              <p><?=ucwords($this->session->userdata("adminusername"))?></p>
   
            </div>
          </div>
       
          <ul class="sidebar-menu">    
            <?php
  if(in_array(strtolower('Dashboard'),$this->session->userdata('tabs_allowed')))
  {
  ?>
  <li <?php if($this->uri->segment(2)=='' || $this->uri->segment(2)=='welcome'){echo 'class="active"';}?>>
              <a href="<?=base_url()?>admin/">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>
  <?php
  }
  ?>
  

 <!-- <?php
  if(in_array(strtolower('Master'),$this->session->userdata('tabs_allowed')))
  {
  ?>
            <li class="treeview <?php if($this->uri->segment(2)=='customer'){?>active<?php }?>">
            <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Master</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">        
 <?php
  if(in_array(strtolower('Customer'),$this->session->userdata('tabs_allowed')))
  {
  ?>
                <li <?php if($this->uri->segment(2)=='customer'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/customer"><i class="fa fa-circle-o"></i>Customer Master</a></li>
  <?php }
 ?>
 <?php
  if(in_array(strtolower('Ship'),$this->session->userdata('tabs_allowed')))
  {
  ?>
                <li <?php if($this->uri->segment(2)=='ship'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/ship"><i class="fa fa-circle-o"></i>Ship Master</a></li>
  <?php }
 ?>
 <?php
  if(in_array(strtolower('Item'),$this->session->userdata('tabs_allowed')))
  {
  ?>
                <li <?php if($this->uri->segment(2)=='customer'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/item/item_list"><i class="fa fa-circle-o"></i>Item Master</a></li>
  <?php }
 ?>
  
  
   </ul>
  </li>
 <?php }
 ?>  -->
<?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>               <li class="treeview <?php if($this->uri->segment(2)=='UserController' || $this->uri->segment(2)=='PermissionController'){?>active<?php }?>">
              <a href="#">
                <i class="fa big-icon fa-child"></i><span>Client Company<br>Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
             
  
 <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='UserController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/company_reg"><i class="fa fa-circle-o"></i>Company Registration</a></li>
            <?php }
 ?>     
<?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Basic_salary"><i class="fa fa-circle-o"></i>Add Basic Salary For Company</a></li>
            <?php }
 ?>   

  <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='UserController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Search_bill"><i class="fa fa-circle-o"></i>Search Bill</a></li>
            <?php }
 ?>  

  <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li><a href="<?=base_url()?>admin/Billing_company"><i class="fa fa-circle-o"></i>Billing For Company</a></li>
            <?php }
 ?>    

 
              </ul>
            </li>
 <?php }
 ?>

  
  <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?>
            <li class="treeview <?php if($this->uri->segment(2)=='sales_report' || $this->uri->segment(2)=='mould_repair_activity_report' || $this->uri->segment(2)=='foc_rejected_report' || $this->uri->segment(2)=='loc_rejected_report' || $this->uri->segment(2)=='breakdown_report'  || $this->uri->segment(2)=='inventory_report' || $this->uri->segment(2)=='pm_activity_report' || $this->uri->segment(2)=='cleaning_activity_report'){?>active<?php }?>">
            <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Employee Management</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
    
 <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Employee_reg"><i class="fa fa-circle-o"></i>Employee Registration</a></li>
    <?php }
 ?>
 <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Employee_reg/list"><i class="fa fa-circle-o"></i>Employee Registration List</a></li>
    <?php }
 ?>

  <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Allot_employee"><i class="fa fa-circle-o"></i>Allot Employee To Company</a></li>
    <?php }
 ?>
 <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Allot_employee/list"><i class="fa fa-circle-o"></i>Allot Employee To Company List</a></li>
    <?php }
 ?>
  <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Allot_material"><i class="fa fa-circle-o"></i>Allot Material To Company</a></li>
    <?php } 
 ?>
  
    <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Allot_material/list"><i class="fa fa-circle-o"></i>Allot Material To Company List</a></li>
    <?php } 
 ?>
 <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?>
            <li class="treeview <?php if($this->uri->segment(2)=='sales_report' || $this->uri->segment(2)=='mould_repair_activity_report' || $this->uri->segment(2)=='foc_rejected_report' || $this->uri->segment(2)=='loc_rejected_report' || $this->uri->segment(2)=='breakdown_report'  || $this->uri->segment(2)=='inventory_report' || $this->uri->segment(2)=='pm_activity_report' || $this->uri->segment(2)=='cleaning_activity_report'){?>active<?php }?>">
            <a href="#">
                <i class="fa fa-circle-o"></i>
                <span>Loan / Fine Register</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
               <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Loan_advance"><i class="fa fa-circle-o"></i>Loan Advance</a></li>
    <?php }
 ?>
              <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Loan_details"><i class="fa fa-circle-o"></i>Loan</a></li>
    <?php }
 ?>
 <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Loan_details/list"><i class="fa fa-circle-o"></i>Loan list</a></li>
    <?php }
 ?>
               <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Damage"><i class="fa fa-circle-o"></i>Damage or Loss</a></li>
    <?php }
 ?>
               <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Fine"><i class="fa fa-circle-o"></i>Fine</a></li>
    <?php }
 ?>
  <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Reports_index"><i class="fa fa-circle-o"></i>Register Reports Index</a></li>
    <?php }
 ?>
              </ul>
            </li>
             <?php }
 ?> 
 <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_basic_salary"><i class="fa fa-circle-o"></i>Add Basic Salary Details</a></li>
    <?php }
    ?>

   <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_basic_salary/list"><i class="fa fa-circle-o"></i>Add Basic Salary Details List</a></li>
    <?php }
    ?>
  <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Attendance_upload"><i class="fa fa-circle-o"></i>Attendance Upload</a></li>
    <?php }
 ?> 
 <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_monthly_salary"><i class="fa fa-circle-o"></i>Upload Monthly Salary</a></li>
    <?php }
 ?>

 <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/View_delete_monthly_salary"><i class="fa fa-circle-o"></i>View Monthly Salary</a></li>
    <?php }
 ?>
 <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Search_generate"><i class="fa fa-circle-o"></i>Search And Generate Monthly Salary</a></li>
    <?php }
 ?>
  <?php
  if(in_array(strtolower('Reports'),$this->session->userdata('tabs_allowed')))
  {
  ?> 
        <li <?php if($this->uri->segment(2)=='mould_repair_activity_report'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Cheque_print "><i class="fa fa-circle-o"></i>Cheque Print</a></li>
    <?php }
 ?>

  

   </ul>
            </li>
 <?php }
 ?>  
   
<?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>               <li class="treeview <?php if($this->uri->segment(2)=='UserController' || $this->uri->segment(2)=='PermissionController'){?>active<?php }?>">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
             
   <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='UserController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/User_registration"><i class="fa fa-circle-o"></i>User Registration</a></li>
            <?php }
 ?>
 <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='UserController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Owner_com"><i class="fa fa-circle-o"></i>Owner Company Registration</a></li>
            <?php }
 ?> 

  <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='UserController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Agreement"><i class="fa fa-circle-o"></i>Agreement</a></li>
            <?php }
 ?>     
<?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_branch"><i class="fa fa-circle-o"></i>Add Branch</a></li>
            <?php }
 ?>   

 <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_designation_type"><i class="fa fa-circle-o"></i>Add Designation Type</a></li>
            <?php }
 ?> 
 <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_designation"><i class="fa fa-circle-o"></i>Add Designation</a></li>
            <?php }
 ?> 
  <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_industry_type"><i class="fa fa-circle-o"></i>Add Industry Type</a></li>
            <?php }
 ?> 
  <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_shifts"><i class="fa fa-circle-o"></i>Add Shifts</a></li>
            <?php }
 ?>
  <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_services"><i class="fa fa-circle-o"></i>Add Services</a></li>
            <?php }
 ?>
  <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_department"><i class="fa fa-circle-o"></i>Add Departments</a></li>
            <?php }
 ?>
  <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_allowance"><i class="fa fa-circle-o"></i>Add Allowance Details</a></li>
            <?php }
 ?>
  <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_deduction"><i class="fa fa-circle-o"></i>Add Deduction Details</a></li>
            <?php }
 ?> 
 <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_profession"><i class="fa fa-circle-o"></i>Add Profession Tax</a></li>
            <?php }
 ?>
  <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_act"><i class="fa fa-circle-o"></i>Add Act(Central/State) Wise Rules</a></li>
            <?php }
 ?>
  <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_contractor"><i class="fa fa-circle-o"></i>Add Contractor</a></li>
            <?php }
 ?>
  <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li <?php if($this->uri->segment(2)=='PermissionController'){echo 'class="active"';}?>><a href="<?=base_url()?>admin/Add_material"><i class="fa fa-circle-o"></i>Material Entry</a></li>
            <?php }
 ?>
  <?php
  if(in_array(strtolower('System'),$this->session->userdata('tabs_allowed')))
  {
  ?>      
                <li><a href="<?=base_url()?>admin/Database_details"><i class="fa fa-circle-o"></i>Database Settings</a></li>
            <?php }
 ?>    
              </ul>
            </li>
 <?php }
 ?>     

      <?php
  if(in_array(strtolower('Sales'),$this->session->userdata('tabs_allowed')))
  {
  ?>
  <li <?php if($this->uri->segment(2)=='sales1'){echo 'class="active"';}?>>
              <a href="<?=base_url()?>admin/login/signout">
                <i class="fa fa-circle-o"></i> <span>Logout</span>
              </a>
            </li>
  <?php
  }
  ?>        
         
          </ul>          
        </section>
        <!-- /.sidebar -->
      </aside>