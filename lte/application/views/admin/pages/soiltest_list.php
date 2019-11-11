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
            Soil Test List

              <?php 
           if($this->session->flashdata('success'))
           { ?>
      <?php echo $this->session->flashdata('success'); ?>
         <?php    } ?>
            <!--<small>advanced tables</small>-->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <!--<li><a href="#">Tables</a></li>-->
            <li class="active">Soil Test List</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">        
          <div class="row">          
            <div class="col-xs-12">            
              <div class="box">              
               <div class="box-header">
               <!--  <h3 class="box-title pull-right">
                  <a href="<?=base_url()?>admin/customer/create"><button type="button" class="btn btn-success btn-xs">Add</button></a>
                  <a href="<?=base_url()?>admin/customer/upload"><button type="button" class="btn btn-success btn-xs"><i class="fa fa-files-o"></i>Upload Excel</button></a>
 <a href="<?=base_url()?>admin/customer/excel_export"><button type="button" class="btn btn-success btn-xs"><i class="fa fa-download"></i>Download Excel</button></a>
                  </h3> -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div style="overflow-x:auto;">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sr. No.</th>
                        <th>Temperature</th>
                        <th>Mochery</th> 
                        <th>PH</th>
                        <th>Water level</th>    
                        <th>Date & Time</th>                  
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php $i=0;
                     foreach($soiltest as $row)
                     {
						 $i++;
						 ?>
                      <tr>
                        <td><?=$i?></td>                     
                        <td><?=$row['temp']?></td>
                        <td><?=$row['mochery']?></td>
                        <td><?=$row['ph']?></td>                     
                        <td><?=$row['water_level']?></td>  
                        <td><?=$row['entry_date']?></td>  
              
                      
                        <td>
             <!--              <a href="<?=base_url()?>admin/inward/so_edit/<?=md5($row['so_no'])?>"><button type="button" class="btn btn-info btn-xs">Edit</button></a>
                             <a href="<?=base_url()?>admin/inward/so_view/<?=md5($row['so_no'])?>"><button type="button" class="btn btn-info btn-xs">View SO Item</button></a>
                         

                             <a href="<?=base_url()?>admin/inward/sales_order/<?=$row['so_no']?>"><button type="button" class="btn btn-info btn-xs">View SO</button></a>                     
                          <a onClick="return confirm('Are you sure you want to delete?')" href="<?=base_url()?>admin/inward/delete/<?=$row['so_no']?>"><button type="button" class="btn btn-danger btn-xs">Delete</button></a> -->
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
