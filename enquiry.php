<?php
$con = mysqli_connect("localhost:3325", "root", "", "merabharat");

$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userPhone = $_POST['userPhone'];
$destOption = $_POST['destOption'];

$sql_add = "INSERT INTO `enquiry` (`name`, `email`, `phone`, `destination`, `id`) VALUES ('$userName', '$userEmail', '$userPhone', '$destOption', 0)";

$rs = mysqli_query($con, $sql_add);

if($rs)
{
	header("Refresh:0; url = http://localhost/meraBharat/index.html");
}
else {
	echo("error". mysqli_error($con));
}
?>