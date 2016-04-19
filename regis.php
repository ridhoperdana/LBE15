<?php
require "init.php ";

$uname = $_POST["login_name"];
$pass = $_POST["login_pass"];

$sql = "INSERT INTO lbe_daftar VALUES('','$uname','$pass');";

if(mysqli_query($con,$sql))
{
	echo "<br><h3>One row inserted...</h3>";
}
else
{
	echo "Error in insertion ..." . mysqli_error($con);
}

?>