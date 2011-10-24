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
			<div class="portlet-header"><h4>Job Details</h4></div>
			
			<div class="portlet-content">
				
				<form action="#" method="post" class="form label-inline">
	
					<table>
						<tr>
							<td colspan="2" align="left">
								<h3>
									<a href="../customer_management/customer_management.php">Customers</a> 
									-> <a href="../customer_management/customer_details.php">Joe Doe</a>
									-> Job 2
								</h3>
							
							</td>

						</tr>
						<tr>
							<td width="500">
								<div class="field">
									<label for="lname">Title </label> 
									<input id="title" name="lname" size="20" type="text" class="medium notEditable" value='Job1' readonly="true"/>
								</div>
								<div class="field">
									<label for="lname">Description </label> 
									<input id="description" name="lname" size="30" type="text" class="medium notEditable" value='Replacement of old window' readonly="true"/>
								</div>
								<button class="btn" id="actionBtnJobs">Edit</button>
							</td>
							<td>
								<div class="field">
									Created on: <b>April 20, 2011</b>
								</div>
								<div class="field">
									Status:
									<br />
									<input type="radio" name="status" id="radioActive" disabled="disabled"/> Active
									<br />
									<input type="radio" name="status" id="radioFinished" disabled="disabled" /> Completed
									<br />
									<input type="radio" name="status" id="radioFinished" disabled="disabled" /> Canceled
								</div>
							</td>

						</tr>

						</table>
					</form>

						
				<a href="../estimate_management/estimate_details_blank.php">
					<button class="btn">Add Estimate</button>
				</a>
				<br />
				<br />
				<a name="basic"></a>
				<h2>Estimates</h2>
				
				<table cellpadding="0" cellspacing="0" border="0" class="display">
					<thead>
						<tr>
							<th>Created</th>
							<th>Status</th>
							<th>No Line Items</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							<td><a href="../estimate_management/estimate_details.php">20 April, 2011</a></td>							
							<td>Open</td>
							<td>8</td>
							<td>$14,000</td>
						</tr>
						<tr class="even gradeC">
							<td><a href="../estimate_management/estimate_details.php">10 Jan, 2011</a></td>							
							<td>Open</td>
							<td>12</td>
							<td>$13,000</td>
						</tr>
						<tr class="odd gradeA">
							<td><a href="../estimate_management/estimate_details.php">13 June, 2003</a></td>						
							<td>Finalized</td>
							<td>3</td>
							<td>$11,000</td>
						</tr>
						<tr class="even gradeA">
							<td><a href="../estimate_management/estimate_details.php">04 Oct, 2016</a></td>							
							<td>Open</td>
							<td>7</td>
							<td>$2,000</td>
						</tr>
						</tbody>
					</table>
					
					<br /><br /><br />
				
				
				
				
				
				
				
			
			</div>
		</div>
		

		
	</div> <!-- #content -->
	
	
	<!--Includes footer-->
        <?php require_once('../../components/footer.php'); ?>
	
</div> <!-- #wrapper -->

	
</body>

</html>