<html>
<head>
	<title>Studi Kasus 2</title>
</head>
<body>
		
<?php 
	function tabel($baris, $kolom){
		echo "<table border=1>";
	for($i = 1; $i <=$baris; $i++){
		echo "<tr height=100>";
	for($j = 1; $j <=$kolom; $j++){
		echo "<td width=100></td>";
	}
		echo "</tr>";
	}
		echo "</table>";
	}
tabel(3,5);
?>

	</body>
</html>