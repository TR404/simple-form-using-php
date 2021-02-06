<!DOCTYPE html>
<html >
<head>
<title>Data Details</title>
</head>

<body bgcolor="#acb9bf">
<fieldset>
	<table border="3">
	<legend style="color:red">Ridobiko Solutions Private Limited</legend>
	<tr>
		<th>Id No.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Aadhar No.</th>
		<th>D.L Exp</th>
		<th>Address</th>
		<th>Driving Img</th>
		<th>Aadhar Front Img</th>
		<th>Aadhar Back Img</th>
		
	</tr>
	<?php

$con = mysqli_connect('localhost', 'root', '','db_connect');
$query = "select * from tbl_contact";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
	if($total!=0)
	{
		while($result=mysqli_fetch_assoc($data))
		{
			echo "
			<tr>
			<td>".$result['Id']."</td>
			<td>".$result['Name']."</td>
			<td>".$result['Email']."</td>
			<td>".$result['Phone']."</td>
			<td>".$result['AadharNum']."</td>
			<td>".$result['DlExp']."</td>
			<td>".$result['Address']."</td>
			<td>".$result['DL']."</td>
			<td>".$result['AadharFront']."</td>
			<td>".$result['AadharBack']."</td>
			
			</tr>
			";
		}
	}
?>
	</table>
</fieldset>
</body>
</html>


