<?php 
$koneksi = mysqli_connect("localhost", "root", "", "sekolahan");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysql_connecterror();
}
 ?>