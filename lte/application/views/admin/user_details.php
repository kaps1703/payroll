<?php $this->load->view('admin/header') ?>
<script src="<?php echo base_url() ?>js/tiny_mce/tiny_mce.js"></script>
<script>
function tiny_mce_all()
{
	 tinyMCE.init({
           theme : "advanced",
           mode : "exact",
			plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
			theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,fontselect,fontsizeselect,|,fullscreen,code",
			theme_advanced_buttons2 : ",formatselect,fontselect,fontsizeselect,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,forecolor,backcolor",
			theme_advanced_buttons3 : ",sub,sup,|link,unlink,anchor,charmap,emotions,iespell,media,image,|,hr,insertdate,inserttime,|,removeformat,visualaid,|,visualchars,nonbreaking,template,blockquote,pagebreak",
			
			elements: "contents",
			

			
		 });
		
}
</script>

  <script type="text/javascript">

 	 function submitformcategory()
     { 
	   $("#form-validate").validate({
		
		
		errorClass: "my-error-class",
		 validClass: "my-valid-class"		 
		
		});
		
		if ($('#form-validate').valid()) // check if form is valid
        {
		
		var city_name = document.getElementById('city_name').value;
		var state_name = document.getElementById('state_name').value;
		
	 $.ajax({

				type: "POST",

				url: '<?php echo base_url();?>admin_panel/countrycontroller/CitySubmit',

				data: '&city_name='+city_name+'&state_name='+state_name,

				cache: false,

				beforeSend : function ()

				{

					$("#idAjaxLoader").css("display",'');

				},

				success: function (data) {

					//$('#tryonbox').load(data);

			    window.location.href = "<?php echo base_url();?>admin_panel/countrycontroller/citylist"
				},

				

				error: function(data){

					alert("error here");

					//return false;

				}

		

	});	

	return false;

	}
  else
  {
  
  }
 

	 </script>
     
      
      <script type="text/javascript">

 	 function showdata(value)
	 {
	  	//alert(value);
		 $.ajax({
				type: "POST",
				url: '<?php echo base_url();?>admin_panel/ProductsController/show_statedrop',
				data: '&value='+value,
				cache: false,
				beforeSend : function ()
				{
					$("#idAjaxLoader").css("display",'');
				},
				success: function (data) {
				   	$("#attribute").html(data);    
				},

				error: function(data){
					alert("error here");

				}
	});	
	return false;
	 
	 }
	 
	 
	  function showcity(value)
	 {
	  	//alert(value);
		 $.ajax({
				type: "POST",
				url: '<?php echo base_url();?>admin_panel/ProductsController/show_citydrop',
				data: '&value='+value,
				cache: false,
				beforeSend : function ()
				{
					$("#idAjaxLoader").css("display",'');
				},
				success: function (data) {
				   	$("#attribute_city").html(data);    
				},

				error: function(data){
					alert("error here");

				}
	});	
	return false;
	 
	 }
	 
	 
	  function showarea(value)
	 {
	  	//alert(value);
		 $.ajax({
				type: "POST",
				url: '<?php echo base_url();?>admin_panel/ProductsController/show_areadrop',
				data: '&value='+value,
				cache: false,
				beforeSend : function ()
				{
					$("#idAjaxLoader").css("display",'');
				},
				success: function (data) {
				   	$("#attribute_area").html(data);    
				},

				error: function(data){
					alert("error here");

				}
	});	
	return false;
	 
	 }
	 
	 
	 </script>

</head>
<body id="html-body" class=" adminhtml-customer-edit" onLoad="tiny_mce_all();">
<div class="wrapper">
        <?php $this->load->view('admin/top_menu') ?>
        <div class="middle" id="anchor-content">
            <div id="page:main-container">
            
                <div class="columns ">
                    <div class="side-col" id="page:left">
                            <h3>Registration Details</h3>

					

                    </div>
                    <div class="main-col" id="content">
                        <div class="main-col-inner">
                            <div id="messages"></div>
                            
                                    <div id="customer_info_tabs_addresses_content" style=""><!-- Addresses list -->
                                     <table class="form-edit" cellspacing="0">
<tbody><tr>
<td>

   
<!-- Addresses forms Add category form -->
    <div class="entry-edit" id="address_form_container">
            <div style="" id="form_new_item1">
        <div class="entry-edit-head">
    <h4 class="icon-head head-edit-form fieldset-legend">User Info</h4>
    <div class="form-buttons"></div>
</div>
    <div class="fieldset " id="_item1address_fieldset">
    <div class="hor-scroll">
      <table class="form-list" cellspacing="0">
                                  <tbody>
                          
									<?php
								
									$form_fields=explode(',',$users_data['registration_field_values']);
									
									for($i=0;$i<count($form_fields);$i++)
									{
									
										$field_values=explode('=',$form_fields[$i]);
									?>	                                          
                                        <tr>
                                        <td class="label"><label for="_item1prefix"><?php echo $field_values[0]?> :</label></td>
                                        <td class="value" style="text-align:left">
                                       <?php echo $field_values[1]?>
                                        </td>
                                        </tr> 
                               	
                                	<?php
                                    }
									?>
                     
                     				  <tr>
                                      <td class="label"><label for="_item1prefix">Email :</label></td>
                                      <td class="value" style="text-align:left"><?php echo $users_data['email']?>
                                      </td>
                                    </tr>
                                    
                                        <tr>
                                      <td class="label"><label for="_item1prefix">Period :</label></td>
                                      <td class="value" style="text-align:left"><?php echo $users_data['period']?>
                                      </td>
                                    </tr>
                                        <tr>
                                      <td class="label"><label for="_item1prefix">Media Album :</label></td>
                                      <td class="value" style="text-align:left">
                                      <img style="cursor:pointer; cursor: hand;"  onClick="window.location.href='<?php echo base_url()?>media_album/<?php echo $users_data['media_album'];?>'" src="<?php echo base_url()?>media_album/<?php echo $users_data['media_album'];?>" height="200" width="200">
                                      
                                      </td>
                                    </tr>
                                    
                                    
                                     <tr>
                                      <td class="label"><label for="_item1prefix">Registration Date :</label></td>
                                      <td class="value" style="text-align:left">
                                      
                                      <?php echo $users_data['entry_on']?>
                                      </td>
                                    </tr>
                                    
                                    <form action="<?php echo base_url()?>admin_panel/UserRegistrations/change_status/<?php echo $users_data['user_id']?>" id="status_form" name="status_form" method="post"> 
                                    
                                     <tr>
                                      <td class="label"><label for="_item1prefix">Status :</label></td>
                                      <td class="value" style="text-align:left">
                                      <select id="status" name="status">
                                      <option <?php if($users_data['status']=='ACTIVE') echo "selected=\"selected\"" ?>  value="ACTIVE">Active</option>
                                      <option <?php if($users_data['status']=='INACTIVE') echo "selected=\"selected\"" ?> value="INACTIVE">InActive</option>
                                      </select>
                                      </td>
                                      
                                       <td class="value" style="text-align:left">
                                      <input type="submit" id="submit" name="submit" value="Change Status">
                                       </td>
                                      
                                      
                                    </tr>
                                    
                                   </form>
                                    
                                   
                                  </tbody>
                                </table>
    </div>
        </div>
        
      </div></div>

</td>
</tr>
</tbody></table>
                                    </div>          
                            </div>
                      </div>
                 </div>

             </div>
        </div>
        <div class="footer">
            
        </div>
    </div>
  
</body></html>