<html>
<head>
	<title>Halaman Admin</title>
	<style type="text/css">
       .inner {
		margin: 200px auto;
		padding: 20px;
		width: 240px;
		border: 1px solid #333
		}
	</style>
</head>

<body>
<?php
	ini_set('display errors',1);
	define('_VALID',1);
	//memasukkan file eksternal
	require_once('./auth.php');
	init_login(); //cocokkan username dan passsword dengan input
	validate(); //tampilkan login atau logout jika session kosong atau jika session tidak kosong
?>

<h1 style="text-align:center">Simulasi Halaman Admin</h1>
<p style="text-align:center">
<a href="?m=Logout">Logout</a>
</p>
<div class="inner">
Menu-menu Admin Disini

<?php
	if($_SESSION['login']==''){ //hapus session jika checkbox tidak dicentang
	unset($_SESSION['login']);
	session_destroy();
	exit;
	}
?>

</div>
</body>
</html>