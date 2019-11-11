<?php $this->load->view('admin/header') ?>
	<script type="text/javascript" language="javascript" src="<?php echo base_url();?>media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="<?php echo base_url();?>media/js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			var asInitVals = new Array();
			
			$(document).ready(function() {
				var oTable = $('#customerGrid_table').dataTable( {
					"oLanguage": {
						"sSearch": "Search all columns:"
					}
				} );
				
				$("thead input").keyup( function () {
					/* Filter on the column (the index) of this element */
					oTable.fnFilter( this.value, $("thead input").index(this) );
				} );
				
				
				
				/*
				 * Support functions to provide a little bit of 'user friendlyness' to the textboxes in 
				 * the footer
				 */
				$("thead input").each( function (i) {
					asInitVals[i] = this.value;
				} );
				
				$("thead input").focus( function () {
					if ( this.className == "search_init" )
					{
						this.className = "";
						this.value = "";
					}
				} );
				
				$("thead input").blur( function (i) {
					if ( this.value == "" )
					{
						this.className = "search_init";
						this.value = asInitVals[$("thead input").index(this)];
					}
				} );
			} );
		</script>

</head>
<body id="html-body" class=" adminhtml-customer-index">
<div class="wrapper">
  <?php $this->load->view('admin/top_menu') ?>
  <div class="middle" id="anchor-content">
    <div id="page:main-container">
      <div id="messages"></div>
      <div class="content-header">
        <table cellspacing="0">
          <tbody>
            <tr>
              <td style="width:50%;"><h3 class="icon-head head-customer">User <?php echo $users_data['email']; ?> Adds</h3></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div>
        <div id="customerGrid">
          <table cellspacing="0" class="actions">
            <tbody>
              
            </tbody>
          </table>
          <div id="customerGrid_massaction">
            <table cellspacing="0" cellpadding="0" class="massaction">
              <tbody>
                
              </tbody>
            </table>
          </div>
          <div class="grid">
            <div class="hor-scroll">
              <table cellspacing="0" class="data" id="customerGrid_table">
                <colgroup>
                <col width="20" class="a-center">
                <col width="50">
                <col>
                <col width="150">
                <col width="100">
                <col width="100">
                <col width="90">
                <col width="100">
                <col width="100">
                <col>
                <col width="80">
                <col width="100">
                </colgroup>
                <thead>
                  <tr class="headings">
                    <th><span class="nobr">&nbsp;</span></th>
                    <th><span class="nobr"><a href="" name="entity_id" title="asc" class="sort-arrow-desc"><span class="sort-title">Sr.No</span></a></span></th>
                   
                  
                     <th><span class="nobr"><a href="" name="name" title="asc" class="not-sort"><span class="sort-title">Add Type</span></a></span></th>               
       
                     <th><span class="nobr"><a href="" name="name" title="asc" class="not-sort"><span class="sort-title">Description</span></a></span></th>               
       
       
                     <th><span class="nobr"><a href="" name="name" title="asc" class="not-sort"><span class="sort-title">State</span></a></span></th>   
                     
                        <th><span class="nobr"><a href="" name="name" title="asc" class="not-sort"><span class="sort-title">City</span></a></span></th>              
       
       
                     <th><span class="nobr"><a href="" name="name" title="asc" class="not-sort"><span class="sort-title">Area</span></a></span></th>   
                      <th><span class="nobr"><a href="" name="name" title="asc" class="not-sort"><span class="sort-title">Add Image</span></a></span></th>               
                     
                  </tr>
                   <tr>
                    <th style="text-align:justify" class="search-filter"><input style="width:140px; display:none" type="text" name="Search_check" value="Search_check" class="search_init" /></th>
                    <th style="text-align:justify" class="search-filter"><input style="width:140px;" type="text" name="Search_Order_ID" value="" class="search_init" /></th>
                    <th style="text-align:justify" class="search-filter"><input style="width:140px;" type="text" name="Search_Order_Date" value="" class="search_init" /></th>
                
                 <th style="text-align:justify" class="search-filter"></th>
                 <th style="text-align:justify" class="search-filter"></th>
                 <th style="text-align:justify" class="search-filter"></th>
                    <th style="text-align:justify" class="search-filter"></th>
                    <th style="text-align:justify" class="search-filter"></th>
                </tr>
                </thead>
                <tbody>
                 
                    <?php
			//	 echo '<pre>';print_r($data);die;
				  
				  foreach($users_adds_data as $value)
				  {
				  $i=1;
				   
				?>
                    <tr class="even pointer">
                    <td class="a-center "><input type="checkbox" name="customer" value="1660" class="massaction-checkbox">
                    </td>
                    <td class="  "> <?php echo $i;?></td>
                  
                    <td class=" "><?php echo $value['add_type']?></td>
          
          
                     <td class=" "><?php echo $value['description']?></td>
                     
                      <td class=" "><?php echo $value['state']?></td>
                      
                       <td class=" "><?php echo $value['city']?></td>
                      
                       <td class=" "><?php echo $value['area']?></td>
   
                                        
                    <td class=" "><img height="200" width="200" src="<?php echo base_url();?>media_album/<?php echo $value['add_image'];?>"</td>
                  </tr>
                   <?php
				   $i++;
				   }
				   ?>
                   
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
