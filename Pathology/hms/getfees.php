<?php
include('include/config.php');
if(!empty($_POST["specilizationid"])) 
{

 $sql=mysqli_query($con,"select TestFee from tests where specilization='".$_POST['specilizationid']."'");?>

 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['TestFee']); ?>"><?php echo htmlentities($row['TestFee']); ?></option>
  <?php
}
}