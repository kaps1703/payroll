<!DOCTYPE html>
<html>
  <head>
     <?php $this->load->view('admin/sections/head.php')?>     
  </head>
  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
       <?php $this->load->view('admin/sections/navbar.php') ?>      
      <!-- Left side column. contains the logo and sidebar -->
        <div class="content-wrapper">
        <?php $this->load->view('admin/sections/sidebar.php') ?>
      <!-- Content Wrapper. Contains page content -->
        <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Employee Registration List</h1>
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
        <section class="content"style="background: white">  
        <div class="container"      
          <div class="row">          
            <div class="col-md-12 col-xs-12">            
              <div class="card">              
                  <div class="card-header">
                                        <h6 class="text-center">
                                          Employee List          
                                          </h6>
                                        </div><!-- /.box-header -->
                <div class="card-body">
                  <div style="overflow-x:auto;">
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
                    <!--     <th>Name</th> -->   
                     <!--     <th>Client Company</th>  -->
                          <!-- <th>Owner Company</th> 
                           <th>Agreement</th>            
                            <th>Employee Id</th> --> 
                             <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Designation</th> 
                             <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Branch</th> 
                               <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Employee Name</th> 
                                 <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Employee Father/Husband Name</th> 
                                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Employee Mother Name</th> 
                                     <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Employee Temporary Address</th> 
                                      <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Temporary State</th> 
                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Permanent Address</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">State</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Contact Number</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Alternate Contact Number</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Email Id </th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Gender</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">DOB</th> 
                                       <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">DOJ</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Residential Proof</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID Proof</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Birth Proof</th> 
                                       <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Education</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">School/Collge</th>
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Maritial Status</th>  
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nominee Name</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nominee Relation</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nominee DOB</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Reference Person Name(1)</th>
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Reference Person Address(1)</th>  
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Reference Person Contact(1)</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Reference Person Name(2)</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Reference Person Address(2)</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Reference Person Contact(2)</th> 
                                         <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Refered By Name</th>
                                          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">PCC Date</th>
                                          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Remark</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Bank Name</th>
                                             <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Bank Account No.</th>
                                              <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">PAN No.</th>
                                               <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">IFSC No.</th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">UAN No./th>
                                                   <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">PF Account No.</th>
                                                   <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ESIC NO.</th>
                                                     <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">WCP No.</th>
                       <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php $i=0;
                     foreach($employee as $row)
                     {
						 $i++;
						 ?>
                      <tr role="row" class="odd">
                       <td class="sorting_1"><?=$i?></td>                     
                        <td><?=$row['designation']?></td>
                        <td><?=$row['branch']?></td> 
                        <td><?=$row['emp_name']?></td>                   
                        <td><?=$row['emp_father_name']?></td>
                        <td><?=$row['emp_mother_name']?></td>
                        <td><?=$row['emp_temp_address']?></td>
                        <td><?=$row['emp_temp_state']?></td>
                        <td><?=$row['emp_perm_address']?></td>
                        <td><?=$row['emp_state']?></td>
                        <td><?=$row['emp_contact']?></td>
                        <td><?=$row['emp_alter_contact']?></td>
                        <td><?=$row['emp_emailid']?></td>
                         <td><?=$row['emp_gender']?></td>
                          <td><?=$row['emp_dob']?></td>
                           <td><?=$row['emp_doj']?></td>
                            <td><?=$row['emp_reside_proof']?></td> 
                            <td><?=$row['emp_id_proof']?></td>
                             <td><?=$row['emp_birth_proof']?></td>
                              <td><?=$row['emp_education']?></td>
                               <td><?=$row['emp_school']?></td>
                                <td><?=$row['emp_maritial_status']?></td>
                                 <td><?=$row['emp_nominee_name']?></td>
                                <td><?=$row['emp_relation_nominee']?></td>
                                 <td><?=$row['emp_nom_dob']?></td>
                                   <td><?=$row['emp_ref_name_one']?></td>
                                     <td><?=$row['emp_ref_addre_one']?></td>
                                       <td><?=$row['emp_ref_conta_one']?></td>
                                         <td><?=$row['emp_ref_name_two']?></td>
                                           <td><?=$row['emp_ref_addre_two']?></td>  
                                           <td><?=$row['emp_ref_conta_two']?></td>
                                             <td><?=$row['emp_referd_name']?></td>
                                               <td><?=$row['emp_pcc_date']?></td>
                                                 <td><?=$row['emp_remark']?></td>
                                                   <td><?=$row['emp_bank_name']?></td>
                                                     <td><?=$row['emp_bank_account']?></td>
                                                       <td><?=$row['emp_pan_no']?></td>
                                                         <td><?=$row['emp_ifsc_no']?></td>
                                                         <td><?=$row['emp_uan']?></td>
                                                         <td><?=$row['emp_pf_acount']?></td>
                                                         <td><?=$row['emp_esic_no']?></td>
                                                         <td><?=$row['emp_wcp_no']?></td>
                        <td>
                          <a href="<?=base_url()?>admin/employee_reg/edit/<?=md5($row['emp_id'])?>"><button type="button" class="btn btn-info btn-xs">Edit</button></a>                     
                          <a onClick="return confirm('Are you sure you want to delete?')" href="<?=base_url()?>admin/employee_reg/delete/<?=md5($row['emp_id'])?>"><button type="button" class="btn btn-danger btn-xs">Delete</button></a>
                       </td>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
                  </div>
                </div>
                    
                  </div>
                </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       <?php $this->load->view('admin/pages/footer.php') ?>
    </div><!-- ./wrapper -->

    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
       
      });
    </script>

  </body>
</html>
