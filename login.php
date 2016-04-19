<?php
require "init.php";

$user_name = $_POST["name"];
$user_pass = $_POST["password"];

session_start();
//echo $user_name; echo $user_pass;

$sql_query = "SELECT * FROM daftar_lab WHERE nama_lab = '$user_name' AND password = '$user_pass';";

$result = mysqli_query($con, $sql_query);

if(mysqli_num_rows($result)>0)
{
	$row = mysqli_fetch_assoc($result);
	// $id = $round(val)w["id"];
	// echo $id;
	echo "Login Sukses";
	$_SESSION['name'] = $user_name;
	echo $_SESSION['name'];
	header("Location: submit-project.php");
}
else
{
	echo "Login Gagal";
}

?>