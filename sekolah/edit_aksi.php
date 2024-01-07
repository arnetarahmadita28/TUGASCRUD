<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['NIM'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "update siswa set nama='$nama', nim='$nim', alamat='$alamat' where id='$id'");
header("location:index.php");
 ?>