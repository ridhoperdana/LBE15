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
$sql = 'CREATE TABLE daftar_lab( '.
       'id_lab INT NOT NULL AUTO_INCREMENT, '.
       'nama_lab VARCHAR(100) NOT NULL, '.
       'password VARCHAR(20) NOT NULL,' .
       'kelas INT NOT NULL,' .
       'gambar_lab VARCHAR(200) NOT NULL,' .
       'deskripsi_lab TEXT NOT NULL,' .
       'primary key ( id_lab ))';
 
$buattabel = mysqli_query($conn, $sql);
if(! $buattabel )
{
  die('Gagal Membuat Tabel: ' . mysqli_error($conn));
}
echo "Tabel daftar_lab sukses dibuat\n";
mysqli_close($conn);
?>