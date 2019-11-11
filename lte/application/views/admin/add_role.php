<?php $this->load->view('admin/header') ?>
<style>
input.my-error-class{
    border-color:#FF0000;
}
select.my-error-class{
    border-color:#FF0000;
}
.my-error-class{
color:#FF0000;
}
</style>

<script type="text/javascript">
$(document).ready(function() {

 $( "#dob" ).datepicker({

changeMonth: true,

changeYear: true,
yearRange: '1900:' + new Date().getFullYear()



});	


});	


function check_form_valid()
{

$("#form-validate").validate({
		
		
		errorClass: "my-error-class",
		 validClass: "my-valid-class"		 
		
		});
		
		
		if ($('#form-validate').valid()) // check if form is valid
        {
		return true;
		
        }
		else
		{
		return false;
		
		}    

}
</script>



</head>

<body id="html-body" class=" adminhtml-customer-edit">
<div class="wrapper">
        <?php $this->load->view('admin/top_menu') ?>
        <div class="middle" id="anchor-content">
            <div id="page:main-container">
            
                <div class="columns ">
                    
                    <div class="main-col" id="content">
                        <div class="main-col-inner">
                            <div id="messages"></div>
                            
                                    <div id="customer_info_tabs_addresses_content" style=""><!-- Addresses list -->
                                     <table class="form-edit" cellspacing="0">
<tbody><tr>
<td>
 <form action="<?php echo base_url();?>admin_panel/PermissionController/roleSubmit" onSubmit="return check_form_valid()" method="post"   id="form-validate" enctype="multipart/form-data">  
<!-- Addresses forms Add category form -->
    <div class="entry-edit" id="address_form_container">
            <div style="" id="form_new_item1">
        <div class="entry-edit-head">
    <h4 class="icon-head head-edit-form fieldset-legend">ADD Role</h4>
    <div class="form-buttons"></div>
</div>
    <div class="fieldset " id="_item1address_fieldset">
    <div class="hor-scroll">
      <table class="form-list" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td class="label"><label for="_item1prefix">Role Name</label></td>
                                      <td class="value"><input id="role_name" name="role_name" class="input-text required" type="text">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="label"><label for="_item1prefix">Role Decription</label></td>
                                      <td class="value"><input id="role_desc" name="role_desc" class="input-text required" type="text">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="label"><label for="_item1prefix">Status</label></td>
                                      <td class="value"><select id="user_status" name="user_status" class="select required">
                                          <option value="" selected="selected">Status</option>
                                          <option value="Active">Active</option>
                                          <option value="Inactive">Inactive</option>
                                        </select>
                                      </td>
                                    </tr>
                                    
                                  </tbody>
                                </table>
    </div>
        </div>
    <input id="cancel_add_address_item1" value="Submit" name="cancel_address" title="Submit" type="submit" class="scalable cancel delete-address" />   </div></div>
</form>
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