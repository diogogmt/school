<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Table Styles | Slate Admin</title>	
	
	<!--Includes menu-->
  <?php require_once('../../components/external_files.php'); ?>
		
</head>

<body>
	
<div id="wrapper">
	
	
		<!--Includes menu-->
		<?php require_once('../../components/menu.php'); ?>
                
	
	
	
	<div id="content" class="xfluid">
		
		<div class="portlet x12">
			<div class="portlet-header"><h4>Tables</h4></div>
			
			<div class="portlet-content">
				
				<br />

					
					<a name="plugin"></a>
					<h2>Customer Management</h2>
					<a href="#newCustomer" class="btn" id="addCustomer">Add Customer</a>
					
					<div style="display: none;">
						<div id="newCustomer" style="width:800px;height:300px;overflow:auto;">
							<form action="#" method="post" class="form label-inline">
								<table>
								<tr>
									<td >
									<div class="field">
										<label for="lname">First name </label> 
										<input id="fname" name="lname" size="20" type="text" class="medium " value=''/>
									</div>
									<div class="field">
										<label for="lname">Last name </label> 
										<input id="lname" name="lname" size="20" type="text" class="medium " value='' />
									</div>
									<button class="btn" id="actionBtn">Save</button>
									</td>
									
									<td>
									<div class="field">
										<label for="lname">Email </label> 
										<input id="email" name="lname" value='' size="20" type="text" class="medium "/>
									</div>
									<div class="field phone_field">
										<label for="telephone">Telephone</label> 
										<input id="telephone1" value='' size="3" type="text" class="xsmall " /> 
										- <input size="3" id="telephone2" value='' type="text" class="xsmall "  /> 
										- <input size="4" id="telephone3" value="" type="text" class="xsmall"  />
										<br />
										<br />
									<div class="field">
										<label for="address1">Address 1 </label> 
										<input id="address1" value="" size="40" type="text" class="large " />
									</div>
		
									</td>
								</tr>
								</table>
						</form>
					</div>
				</div>
					
					<br />
					<br />
					
					<input type="checkbox" id="showArchived" name="showArchived" /> Show Archived
					
					
					<br />
					<br />
				
				<table cellpadding="0" cellspacing="0" border="0" class="display" rel="datatable" id="example">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Jobs pending</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							<td class="center"><a href='customer_details.php'>Joe Doe</a></td>
							<td>joe@doe.com</td>
							<td>416 647-938</td>
							<td class="center"> 4</td>
							<td>Active</td>
						</tr>
						<tr class="even gradeC">
							<td class="center"><a href='customer_details.php'>Pedo DiLara</a></td>
							<td>pedo@dilara.com</td>
							<td>416 647-938</td>
							<td class="center">1</td>
							<td>Archived</td>
						</tr>
						<tr class="odd gradeEdit">
							<td class="center"><a href='customer_details.php'>Trident</a></td>
							<td>Internet
								 Explorer 5.5</td>
							<td>416 647-938</td>
							<td class="center">0</td>
							<td>Active</td>
						</tr>
						<tr class="even gradeA">
							<td class="center"><a href='customer_details.php'>Salci Fu</a></td>
							<td>salci@fu.com</td>
							<td>416 647-938</td>
							<td class="center">2</td>
							<td>Archived</td>
						</tr>
						<tr class="odd gradeA">
							<td class="center"><a href='customer_details.php'>Marie Doe</a></td>
							<td>marie@doe.com</td>
							<td>416 647-938</td>
							<td class="center">0</td>
							<td>Archived</td>
						</tr>
					</tbody>
				</table>
				
				
				
				
				
				
				
			
			</div>
		</div>
		

		
	</div> <!-- #content -->
	
	
	<!--Includes footer-->
  <?php require_once('../../components/footer.php'); ?>
	
</div> <!-- #wrapper -->

	
</body>

</html>