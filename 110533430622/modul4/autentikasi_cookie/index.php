<head>
<title> halaman administrator </title>
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
ini_set('diplay_errors', 1);
define('VALID', 1);

// include file eksternal
require_once('./auth.php');

init_login();
validate();
?>

<h3> silmulasi halaman admin </h3>
<p>
<a href="?m=logout">Logout</a>
<p>
menu menu admin ada disini
</body>
</html>
