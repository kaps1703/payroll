 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin/pages/home" class="brand-link">
      <img src="<?php echo base_url().'dist/img/AdminLTELogo.png'?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Payroll</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar p-0">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url().'dist/img/user2-160x160.jpg'?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
             Dashboard
              <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <span>
                  Client Company <br><p class="pl-2 ml-4">Management</p>
                </span>
                <i class="right fas fa-angle-left"></i>
              
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/company_reg'?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Company Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Basic_salary'?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Basic Salary</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Search_bill'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search Bill</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Billing_company'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Billing For Company</p>
                </a>
              </li>
            </ul>
          </li>
       
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Employee Management
                <i class="fas fa-angle-left right"></i>
        <!--  <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Employee_reg'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Employee_reg/list'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Registration List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Allot_employee'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Allot Employee To Company</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Allot_employee/list'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee To Company List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Allot_material'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Allot Material To Company</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Allot_material/list'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Material To Company List</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Loan/Fine register
                <i class="fas fa-angle-left right"></i>
              <!--<span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Loan_advance'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loan Advance</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="<?php echo base_url().'admin/Loan_details'?>"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loan </p>
                </a>
              </li>
                <li class="nav-item">
                <a href="<?php echo base_url().'admin/Loan_details/list'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loan List</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="<?php echo base_url().'admin/Damage'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Damage Or Loss</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Fine'?>"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fine</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="<?php echo base_url().'admin/Reports_index'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reister Report Index</p>
                </a>
              </li>
            </ul>
                <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_basic_salary'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Basic Salary</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_basic_salary/list'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Basic Salary List</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="<?php echo base_url().'admin/Attendance_upload'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Attendance Upload</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_monthly_salary'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload Monthly Salary</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/View_delete_monthly_salary'?>"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Monthly Salary</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Search_generate'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Monthly Salary</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Cheque_print'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cheque Print</p>
                </a>
              </li>
          </li>
          </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
               Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/User_registration'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Owner_com'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Owner Company Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Agreement'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agreement</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_branch'?>"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Branch</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_designation_type'?>"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Designation Type</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_designation'?>"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Designation</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_industry_type'?>"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Industry Type</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_shifts'?>"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Shifts</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_services'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Services</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_department'?>"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Departments</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_allowance'?>"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Allowance Details</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_deduction'?>"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Deduction Details</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_profession'?>"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Profession Tax</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_act'?>"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Act(Central/State)</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_contractor'?>"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Contractor</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Add_material'?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Material Entry</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'admin/Database_details'?>"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Database Settings</p>
                </a>
              </li>



            </ul>
              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
             Log Out
              <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          </li>

        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>