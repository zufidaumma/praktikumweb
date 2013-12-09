<!DOCTYPE HTML>
<head>
	<title>Akses & Manipulasi Data</title>
</head>
<body>
<?php
	ini_set('display_errors',1);

	require_once '../koneksi.php';
	require_once './data_handler.php';

	define('MHS','mahasiswa');
	data_handler('?m=data');
?>
</body>
</html>	