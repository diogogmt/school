<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Table Styles | Slate Admin</title>	
	
	<!--Includes menu-->
        <?php require_once('../../components/external_files.php'); ?>
		
		<style>
		</style>
</head>

<body>
	
<div id="wrapper">
	
	
	
		<!--Includes menu-->
		<?php require_once('../../components/menu.php'); ?>
                
	
	
	
	<div id="content" class="xfluid">
		
		<div class="portlet x12">
			<div class="portlet-header"><h4>Estimate Details</h4></div>
			
			<div class="portlet-content">
				
				<form action="#" method="post" class="form label-inline">
	
					<table>
						<tr>
							<td colspan="2" align="left">
								<h3>
									<a href="customer_management.php">Customers</a> 
									-> <a href="../customer_management/customer_details.php">Joe Doe</a>
									-> <a href="../job_management/job_details.php">Job 2</a>
									-> Estimate 20 April, 2011
								</h3>
							</td>
						</tr>
						
						<tr>
							<td width="500">
								
								<input type="radio" name="status" id="radioActive" checked="checked"/> Open
								<br />
								<input type="radio" name="status" id="radioFinished" /> Finalized
							</td>

						</tr>
					</form>
					</table>
						
				
				<a href='#singleItem' id="addEstimate">Add Estimate line item</a>
				<div style="display: none;">
					<div id="singleItem" style="width:800px;height:600px;overflow:auto;">
						<table cellpadding="0" cellspacing="0" border="0" class="display">
							<thead>
								<tr>
									<th>Image</th>
									<th>Title</th>
									<th>Description</th>
									<th>Quantity</th>
									<th>Cost</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="odd gradeX">
									<td><img src='door1.jpg' width="80" height="80"/></td>
									<td><input id="title" name="title" size="15" type="text" class="medium" value='' /></td>
									<td>
										<textarea></textarea>
									</td>
									<td><input id="quantity" name="quantity" size="5" type="text" class="medium" value='' /></td>
									<td><input id="quantity" name="quantity" size="10" type="text" class="medium" value='' /></td>
									<td>....</td>
								</tr>
							</tbody>
						</table>
						<button class="btn" id="">View Images</button>
						<br />
						Search Images<br />
						<input id="searchImgs" name="searchImgs" size="25" type="text" class="medium" value='' />
						<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
						<button class="btn" id="">Save</button>
				</div>
				</div>
				<br />
				<br />
				
				<table cellpadding="0" cellspacing="0" border="0" class="display">
					<thead>
						<tr>
							<th>Image</th>
							<th>Title</th>
							<th>Description</th>
							<th>Quantity</th>
							<th>Cost</th>
							<th>Total</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						</tbody>
					</table>
					
					<br /><br /><br />
				
				
				<table>
					<tr>
						<td width="500">
							<div class="field">
								<label for="lname">Sub Total </label> 
								<input id="description" name="lname" size="30" type="text" class="medium notEditable" value='' readonly="true"/>
							</div>

							<div class="field">
								<label for="lname">Final Total </label> 
								<input id="title" name="lname" size="20" type="text" class="medium notEditable" value='' readonly="true"/>
							</div>
							
						</td>

					</tr>
				</table>
				

				
				
			
			</div>
		</div>
		

		
	</div> <!-- #content -->
	
	
	<!--Includes footer-->
        <?php require_once('../../components/footer.php'); ?>
	
</div> <!-- #wrapper -->

	
</body>

</html>