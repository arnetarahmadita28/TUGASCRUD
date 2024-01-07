<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>SI Sekolah | Edit Data Siswa</h2>
	<br/>
	<a href="index.php">Kembali</a>
	<h3>Edit Data Siswa</h3>

<?php 
	include 'koneksi.php';
	$id = $_GET['id'];
	$query = mysqli_query($koneksi, "select * from siswa where id='$id'");
	while($data = mysqli_fetch_array($query)){
	?>
	<form method="post" action="edit_aksi.php">
		<table>
			<tr>
				<td>
					<input type="hidden" name="id" value="<?php echo $data ['id']; ?>">
					<input type="text" name=nama"" value="<?php echo $data ['nama']; ?>">
				</td>
			</tr>
			<tr>
				<td>NIS</td>
				<td><input type="number" name="nis" value="<?php echo $data ['nim']; ?>">></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="SIMPAN">></td>
			</tr>
		</table>
	</form>
	<?php 
	}
	 ?>
</body>
</html>