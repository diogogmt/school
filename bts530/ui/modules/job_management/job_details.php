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
	
	<div id="header">
		<h1><a href="index2.html">Sobol Inc</a></h1>
		
		<div id="info">
			<h4>Welcome Archie</h4>
			
			<p>
				Logged in as Editdmin
				<br />
				You have <a href="javascript:;">5 messages</a>
			</p>
			
			<img src="../../images/avatar.jpg" alt="avatar" />
		</div> <!-- #info -->
				
	</div> <!-- #header -->	
	
	
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
							<div class="field">
								<label for="fname">Job ID </label> 0420
								
							</div>
							
							</td>

						</tr>
						<tr>
							<td width="500">
							<div class="field"><label for="lname">Title </label> <input id="lname" name="lname" size="20" type="text" class="medium" value='Job1'/></div>
							<div class="field"><label for="lname">Description </label> <input id="lname" name="lname" size="30" type="text" class="medium" value='Replacement of old window' /></div>
				<button class="btn">Save</button>

							</td>
							<td>
							<div class="field">
								Created on: <b>April 20, 2011</b>
							</div>
							<div class="field">
								Status:
								<select>
									<option>Active</option>
									<option>Finished</option>
								</select>
							</div>

							</td>

						</tr>

						</form>
						</table>
						
				
				<button class="btn">Add Estimate</button>
				<br />
				<br />
				<a name="basic"></a>
				<h2>Estimates</h2>
				
				<table cellpadding="0" cellspacing="0" border="0" class="display">
					<thead>
						<tr>
							<th>Estimate ID</th>
							<th>Status</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							<td>80031</td>							
							<td>Active</td>
							<td><a href='../estimate_management/estimate_details.php'>Edit</a></td>
							<td class="center"><a href='#'>Delete</a></td>
						</tr>
						<tr class="even gradeC">
							<td>66398</td>							
							<td>Final</td>
							<td><a href='../estimate_management/estimate_details.php'>Edit</a></td>
							<td class="center"><a href='#'>Delete</a></td>
						</tr>
						<tr class="odd gradeA">
							<td>863407</td>						
							<td>Active</td>
							<td><a href='../estimate_management/estimate_details.php'>Edit</a></td>
							<td class="center"><a href='#'>Delete</a></td>
						</tr>
						<tr class="even gradeA">
							<td>80031</td>							
							<td>Active</td>
							<td><a href='../estimate_management/estimate_details.php'>Edit</a></td>
							<td class="center"><a href='#'>Delete</a></td>
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