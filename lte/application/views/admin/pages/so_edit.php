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
                                         <th>HSN</th>
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

                                            <input name="so_no[]" type="text" id="so_no" value="<?php echo $store_info['so_no'];?>"> 

                                            <input name="item_id[]" type="text" id="picklist_gen" value="<?php echo $store_info['item_id'];?>"  hidden>  
                                             <!--  <input name="so_no[]" type="text" id="picklist_gen" value="<?php echo $store_info['so_no'];?>"  hidden>    -->             
                                        </td>
                                        <td align="center">
                                            <input name="model[]" type="text" id="picklist_gen" value="<?php echo $store_info['model'];?>"">                         
                                        </td>
                                           <td align="center">
                                            <input name="quantity[]" type="text" id="quantity" value="<?php echo $store_info['quantity']?>"">
                                        </td>
                                        <td align="center">
                                            <textarea name="desc[]">
                                                <?php echo trim($store_info['desc']);?>
                                            </textarea>
                                        </td>
                                        <td align="center">
                                            <input name="unit_price[]" type="text"  onkeyup="mult();" id="unit_price" value="<?php echo $store_info['unit_price']; ?>">                                    
                                        </td>
                                        <td align="center">
                                            <input name="amount[]" type="text" id="amount" value="<?php echo $store_info['amount'];?>"">                                         
                                        </td>
                                        </tr>
                                </tbody>
                                <tfoot>
                                </tfoot>
                                <?php   }?>

                            </table>
                             <?php 


                            foreach ($so_list as $row) {


                                ?>
                               
                         
                            <!--   <input type="text" name="reupiesinword" class="form-control" placeholder="Rupies into Word entry" value="<?php echo $row['reupiesinword'] ?>"> -->
                                        <input type="text" name="dollerinword" class="form-control" placeholder="dollars into Word Entry" value="<?php echo $row['dollerinword'] ?>">

                                       <?php } ?>
                            <div align="center">
                                <input type="submit" class="btn btn-success" id="Submit" name="Submit" value="Submit">
                              

                            </div>
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
      function mult() {


            var txtqua = document.getElementById('quantity').value;
            var unit_price = document.getElementById('unit_price').value;
            var result =  txtqua*unit_price;
                 document.getElementById('amount').value = result;


        }
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