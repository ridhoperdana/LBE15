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
echo 'Koneksi Berhasil';
$sql = 'CREATE TABLE karya_lab( '.
       'id_karya INT NOT NULL AUTO_INCREMENT, '.
       'nama_lab VARCHAR(20) NOT NULL, '.
       'judul_karya  VARCHAR(20) NOT NULL, '.
       'kategori   VARCHAR(20) NOT NULL, '.
       'primary key ( id_karya ))';
 

$buattabel = mysqli_query($conn, $sql);
if(! $buattabel )
{
  die('Gagal Membuat Tabel: ' . mysqli_error($conn));
}
echo "Tabel Karyawan sukses dibuat\n";
mysqli_close($conn);
?>