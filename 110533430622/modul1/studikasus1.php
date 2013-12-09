<html>
<head>
	<title>Studi Kasus 1</title>
</head>
<body>

<?php
	function greeting($h, $m, $s){
	if ($h <= 23 && $m <= 60 && $s <=60){
	if (($s >= 0 && $m >= 0 && $h == 0) || ($s < 60 && $m < 60 && $h == 11)){
		echo "Selamat Pagi";
	} elseif (($s >= 0 && $m >= 0 && $h == 12) || ($s < 60 && $m < 60 && $h == 17)){
		echo "Selamat Siang";
	} elseif (($s >= 0 && $m >= 0 && $h == 18) || ($s < 60 && $m < 60 && $h == 20)){
		echo "Selamat Malam";
		}
	}
}			
greeting(0,59,59);
?>

</body>
</html>