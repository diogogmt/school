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
			<div class="portlet-header"><h4>Customer Details</h4></div>
			
			<div class="portlet-content">
				
				<form action="#" method="post" class="form label-inline">
					<table>
						<tr>
							<td colspan="2" align="left">
								<h3>
									<a href="customer_management.php">Customers</a> -> Joe Doe
								</h3>
								
							
							</td>

						</tr>
						<tr>
							<td >
							<div class="field">
								<label for="lname">First name </label> 
								<input id="fname" name="lname" size="20" type="text" class="medium notEditable" value='Joe' readonly="true"/>
							</div>
							<div class="field">
								<label for="lname">Last name </label> 
								<input id="lname" name="lname" size="20" tyDeletetext" class="medium notEditable" value='Doe' readonly="true" />
							</div>
							
							<div class="field">
								<input type="radio" name="status" id="radioActive" disabled="disabled" checked="checked"/> Active
								<br />
								<input type="radio" name="status" id="radioArchived" disabled="disabled" /> Archive
							</div>
							
							<br />
							<br />
							<button class="btn" id="actionBtn">Edit</button>
							<a href="#manageNotes" class="btn" id="notes">Manage Notes</button>
							</td>
							
							<td>
							<div class="field">
								<label for="lname">Email </label> 
								<input id="email" name="lname" value='joe@doe.com' size="20" type="text" class="medium notEditable" readonly="true" />
							</div>
							<div class="field phone_field">
								<label for="telephone">Telephone</label> 
								<input id="telephone1" value='416' size="3" type="text" class="xsmall notEditable" readonly="true" /> 
								- <input size="3" id="telephone2" value='647' type="text" class="xsmall notEditable" readonly="true" /> 
								- <input size="4" id="telephone3" value="9381" type="text" class="xsmall notEditable" readonly="true" />
								<br />
								<br />
							<div class="field">
								<label for="address1">Address 1 </label> 
								<input id="address1" value="Infinite Loop 1" size="40" type="text" class="large notEditable" readonly="true" />
							</div>

							</td>
						</tr>
						</table>
					</form>
					
					
					
					<div style="display: none;">
						<div id="manageNotes" style="width:1000px;height:800px;overflow:auto;">
							Manage Notes page
						</div>
				</div>


					<a href="#newJob" class="btn" id="addJob">Add Job</a>
					
					<div style="display: none;">
						<div id="newJob" style="width:800px;height:200px;overflow:auto;">
							<form action="#" method="post" class="form label-inline">
								<table>
									<tr>
										<td width="500">
											<div class="field">
												<label for="lname">Title </label> 
												<input id="title" name="lname" size="20" type="text" class="medium" value='' />
											</div>
											<div class="field">
												<label for="lname">Description </label> 
												<input id="description" name="lname" size="30" type="text" class="medium" value=''/>
											</div>
											<button class="btn" id="actionBtnJobs">Save</button>
										</td>
										<td>
										</td>
			
									</tr>
			
									</table>
								</form>
							</div>
						</div>
					
					<br />
					<br />
					

				<a name="basic"></a>
				<h2>Jobs</h2>
				
				<table cellpadding="0" cellspacing="0" border="0" class="display">
					<thead>
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Creation date</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							<td class="center"><a href='../job_management/job_details.php'>Job 2</a></td>
							<td>Replacement of old window</td>
							<td class="center"> 3/7/2003</td>
							<td class="center">Completed</td>
						</tr>
						<tr class="even gradeC">
							<td class="center"><a href='../job_management/job_details.php'>Job 2</a></td>
							<td>Installation of kitchen door</td>
							<td class="center"> 10/9/2007</td>
							<td class="center">Completed</td>
						</tr>
						<tr class="odd gradeA">
							<td class="center"><a href='../job_management/job_details.php'>Job 2</a></td>
							<td>Replacement of all windows and doors</td>
							<td class="center"> 1/1/2001</td>
							<td class="center">Pending</td>
						</tr>
						<tr class="even gradeA">
							<td class="center"><a href='../job_management/job_details.php'>Job 1</a></td>
							<td>IBedroom windows</td>
							<td class="center"> 7/4/2005</td>
							<td class="center">Pending</td>
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