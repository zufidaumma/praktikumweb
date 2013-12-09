<!DOCTYPE HTML>
<head>
	<title>Kalkulator</title>
</head>
<body>
<?php
			$angka1  =$_POST['angka1'];
			$angka2  =$_POST['angka2'];
			$operator=$_POST['operator'];

			if($operator=='+'){
				$hasil=$angka1+$angka2;
			}else if($operator=='-'){
				$hasil=$angka1-$angka2;
			}else if($operator=='x'){
				$hasil=$angka1*$angka2;
			}if($operator==':'){
				$hasil=$angka1/$angka2;
			}
		
	?>

	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="angka1" value="<?php echo isset($_POST['angka1']) ? $_POST['angka1']:''?>">
		<select name="operator">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="x">x</option>
			<option value=":">:</option>
		</select>	
		<input type="text" name="angka2" value="<?php echo isset($_POST['angka2']) ? $_POST['angka2']:''?>">
		<input type="submit" value="=">
		<input type="text" name="hasil" id="hasil" value="<?php echo isset($hasil) ? $hasil:''?>">
	</form>
	
</body>
</html>