<?php

$con = mysqli_connect('localhost', 'root', '','db_connect');

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$aadharNum = $_POST['aadharNum'];
$dlExp = $_POST['dlExp'];
$address = $_POST['address'];
$drive = $_POST['drive'];
$aadharFront = $_POST['aadharFront'];
$aadharBack = $_POST['aadharBack'];

$sql = "INSERT INTO `tbl_contact` (`Id`, `Name`, `Email`, `Phone`, `AadharNum`, `DlExp`, `Address`, `DL`, `AadharFront`, `AadharBack`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$aadharNum', '$dlExp', '$address', '$drive', '$aadharFront', '$aadharBack')";

$rs = mysqli_query($con, $sql);
if($rs)
{
	echo  "<script> location.href='record.php'; </script>";
}
?>
