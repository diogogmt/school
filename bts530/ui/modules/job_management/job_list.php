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
					<h2>Jobs List</h2>
					
					<br />
					<br />
				
				<table cellpadding="0" cellspacing="0" border="0" class="display">
					<thead>
						<tr>
							<th>Customer</th>
							<th>Title</th>
							<th>Description</th>
							<th>Creation date</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							<td class="center"><a href='../customer_management/customer_details.php'>Joe Doe</a></td>
							<td class="center"><a href='../job_management/job_details.php'>Job 2</a></td>
							<td>Replacement of old window</td>
							<td class="center"> 3/7/2003</td>
							<td class="center">Completed</td>
						</tr>
						<tr class="even gradeC">
							<td class="center"><a href='../customer_management/customer_details.php'>Pedo DiLara</a></td>
							<td class="center"><a href='../job_management/job_details.php'>Job 2</a></td>
							<td>Installation of kitchen door</td>
							<td class="center"> 10/9/2007</td>
							<td class="center">Completed</td>
						</tr>
						<tr class="odd gradeA">
							<td class="center"><a href='../customer_management/customer_details.php'>Salci Fu</a></td>
							<td class="center"><a href='../job_management/job_details.php'>Job 2</a></td>
							<td>Replacement of all windows and doors</td>
							<td class="center"> 1/1/2001</td>
							<td class="center">Pending</td>
							<td class="center"><a href='../customer_management/customer_details.php'>Salci Fu</a></td>
						</tr>
						<tr class="even gradeA">
							<td class="center"><a href='../customer_management/customer_details.php'>Marie Doe</a></td>
							<td class="center"><a href='../job_management/job_details.php'>Job 1</a></td>
							<td>IBedroom windows</td>
							<td class="center"> 7/4/2005</td>
							<td class="center">Pending</td>
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