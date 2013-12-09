<!DOCTYPE HTML>
<head>
	<title>Tambah Data</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	<table>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim"> </td>
		</tr>	
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"> </td>
		</tr>	
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"> </td>
		</tr>	
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"> </td>
		</tr>	
	</table>
</form>
<?php
	require_once './koneksi.php';
	if(isset($_POST['nim']) && isset($_POST['nama'])){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];

		$sql="INSERT INTO mahasiswa VALUES ('".$nim."','".$nama."','".$alamat."')";

		$res=mysql_query($sql);
		if($res){
			echo "Data berhasil ditambahkan";
			mysql_close($res);
		}else{
			echo "Gagal menambah data";
			echo mysql_error();
		}
	}
	echo "<hr>";
	require_once './latihan3_1.php';
?>


</body>
</html>