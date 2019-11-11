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
           Employee Details
            <!--<small>advanced tables</small>-->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <!--<li><a href="#">Tables</a></li>-->
            <li class="active">Employee Registration List</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">        
          <div class="row">          
            <div class="col-xs-12">            
              <div class="box">              
               <div class="box-header">
                <h3 class="box-title pull-right">
                  <a href="<?=base_url()?>admin/add_basic_salary_employee"><button type="button" class="btn btn-success btn-xs">Add</button></a>                  
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div style="overflow-x:auto;">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. No.</th>
                    <!--     <th>Designation Category</th> -->   
                     <!--     <th>Designation Name</th>  -->
                          <!-- <th>Employee Name</th>  -->
                           <th>Basic Salary</th>            
                            <th>DA</th> 
                             <th>Basic + DA</th> 
                               <th>City/Shift..</th> 
                                 <th>Other Deduction/Canteen</th> 
                                   <th>LWF Value</th> 
                                     <th>HRA Value</th> 
                                       <th>Gross Salary</th> 
                                         <th>PF Value</th> 
                                         <th>ESIC Value</th> 
                                         <th>Profession Tax</th> 
                                         <th>Total Deduction</th> 
                                         <th>Total Net Pay </th> 
                                         <th>CTC Per Day Rate</th> 
                                         <th>From Date</th> 
                                         <th>To Date</th> 
                                         
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php $i=0;
                     foreach($bas_salary as $row)
                     {
						 $i++;
						 ?>
                      <tr>
                        <td><?=$i?></td>                     
                        <!-- <td><?=$row['dt_id']?></td>
                        <td><?=$row['d_id']?></td> 
                        <td><?=$row['emp_id']?></td>   -->                 
                        <td><?=$row['basic_sal']?></td>
                        <td><?=$row['da']?></td>

                        <td><?=$row['total']?></td>
                        <td><?=$row['city']?></td>
                        <td><?=$row['other']?></td>
                        <td><?=$row['lwf']?></td>
                        <td><?=$row['hra']?></td>
                        <td><?=$row['gross_salary']?></td>
                        <td><?=$row['pf_value']?></td>
                         <td><?=$row['esic_value']?></td>
                          <td><?=$row['prof_tax']?></td>
                           <td><?=$row['total_dedu']?></td>
                            <td><?=$row['total_net']?></td> 
                            <td><?=$row['ctc']?></td>
                             <td><?=$row['from_date']?></td>
                              <td><?=$row['to_date']?></td>
                             <td> 
                          <a href="<?=base_url()?>admin/add_basic_salary_employee/edit/<?=md5($row['emp_bas_id'])?>"><button type="button" class="btn btn-info btn-xs">Edit</button></a>                     
                          <a onClick="return confirm('Are you sure you want to delete?')" href="<?=base_url()?>admin/add_basic_salary_employee/delete/<?=md5($row['emp_bas_id'])?>"><button type="button" class="btn btn-danger btn-xs">Delete</button></a>
                       </td>
                      </tr>
                      <?php }?>
                    </tbody>
                    
                  </table>
                </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
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
