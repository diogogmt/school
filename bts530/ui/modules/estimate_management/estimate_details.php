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
			<div class="portlet-header"><h4>Estimate Details</h4></div>
			
			<div class="portlet-content">
				
				<form action="#" method="post" class="form label-inline">
	
					<table>
						<tr>
							<td colspan="2" align="left">
							<div class="field">
								<label for="fname">Estimate ID </label> 0420
							</div>
							<button >Set final</button>

							</td>
						</tr>
					</form>
					</table>
						
				
				<button class="btn">Add Estimate line item</button>
				<br />
				<br />
				
				<table cellpadding="0" cellspacing="0" border="0" class="display">
					<thead>
						<tr>
							<th>Image</th>
							<th>Description</th>
							<th>Quantity</th>
							<th>Cost</th>
							<th>Total</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							<td><img src='door1.jpg' width="80" height="80"/></td>							
							<td>Pella all weather basement model 19 x 25 inches. 
								Heavy duty glass quick install</td>
							<td>3</td>
							<td>$1,000.00</td>
							<td>$3,000.00</td>
							<td><a href='#'>Edit</a></td>
							<td class="center"><a href='#'>Delete</a></td>
						</tr>
						<tr class="even gradeC">
							<td><img src='door2.jpg' width="80" height="80"/></td>							
							<td>Old style double door</td>
							<td></td>
							<td>$5,000.00</td>
							<td>$5000.00</td>
							<td><a href='#'>Edit</a></td>
							<td class="center"><a href='#'>Delete</a></td>
						</tr>
						<tr class="odd gradeA">
							<td><img src='door3.jpg' width="80" height="80"/></td>							
							<td>Roman architecture with a little touch of ancients greeks</td>
							<td>10</td>
							<td>$1,500.00</td>
							<td>$15,000.00</td>
							<td><a href='#'>Edit</a></td>
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