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
            S.O. Details
            <!--<small>advanced tables</small>-->
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <!--<li><a href="#">Tables</a></li>-->
            <li class="active">S.O. Details</li>
          </ol>
        </section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <form action="<?php echo base_url(); ?>index.php/admin/inward/editsave_so" method="post">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                         <th>SO.No.</th>
                                        <th>Model</th>
                                        <th>Quantity</th>
                                 <!--        <th>Avialble Quantity</th> -->
                                         <th>Desc</th>
                                        <th>Unit Price</th>
                                        <th>Amount</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php 
                    $cnr=1;
                           foreach ($so_edit as $store_info)
                        {
                            echo "<tr id=''><td>";
                            echo $cnr++."</td>"; 
                                    
                              ?>


                                        <td align="center">

                                         <?php echo $store_info['so_no'];?> 

                                          
                                        </td>
                                        <td align="center">
                                           <?php echo $store_info['model'];?>                         
                                        </td>
                                           <td align="center">
                                        <?php echo $store_info['quantity']?>
                                        </td>
                                          <!-- <td align="center">
                                        <?php echo $store_info['temp_quantity']?>
                                        </td> -->
                                        <td align="center">
                                         
                                                <?php echo trim($store_info['desc']);?>
                                           
                                        </td>
                                        <td align="center">
                                        <?php echo $store_info['unit_price']; ?>                                    
                                        </td>
                                        <td align="center">
                                         <?php echo $store_info['amount'];?>                                        
                                        </td>
                                        </tr>
                                </tbody>


                                <tfoot>
                                </tfoot>

                                <?php   }?>

                            </table>
                          
                        </div>


                    </form>
                    <input type="hidden" name="server_url" id="server_url" value="<?= site_url()?>">
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->






<script>
    function myFunction() {      

        $pick = $("#pick").val();
        $conf = $("#conf").val();
     


        if ($pick < $conf) 
        {
            alert("Order Quantity is Less thank Confirm Quantity");
            document.getElementById('conf').value = '';
            return false;
        }
        else {

        }
    }
</script>