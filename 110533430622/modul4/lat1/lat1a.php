<html>
<head>
	<title>Set Cookie</title>
</head>
<body>

<?php

//Men-set nilai cookie
setcookie('nama_cookie', 'nilai_cookie');

//Mendapat nilai cookie
echo $_COOKIE['nama_cookie'];

?>

<p>
Tekan Refresh (F5);
</p>

</body>
</html>