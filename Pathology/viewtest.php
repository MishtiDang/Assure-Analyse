<?php
include_once('hms/include/config.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>AA | Contact us</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
		<a href="index.html" style="font-size: 30px;">Assure Analyse</a> 
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.html">Home</a></li>
					
						<li ><a href="contact.php">contact</a></li>

						<li class="active"><a href="contact.php">View Tests</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
            <!DOCTYPE html>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: Dodgerblue;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>#</th>
    <th>Test Name</th>
    <th>Test Detail</th>
    <th>Test Price</th>
  </tr>
  <?php
$sql=mysqli_query($con,"select specilization,Detail,TestFee from tests ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td><?php echo $row['specilization'];?></td>
												<td><?php echo $row['Detail'];?></td>
												<td><?php echo $row['TestFee'];?> </td>
							
                                                </tr>
											
											<?php 
$cnt=$cnt+1;
											 }?>
											

</table>

</body>
</html>