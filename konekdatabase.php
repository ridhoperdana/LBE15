<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'lbe';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
  die('Gagal Koneksi: ' . mysqli_error());
}
else
	echo 'sukses';
?>