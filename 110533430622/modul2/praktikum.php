<html>
<head>
	<title>Identifikasi Metode</title>
	<style>
	body{background: grey; padding-top: 150px;}
	form{background: #d7d7d7; width: 500px; height: 200px; padding-top: 30px; padding-bottom: 50px;
		 border: 8px solid #407997;}
	h1{color: #407997; border-bottom: 3px dotted #407997; margin-left: 10px; margin-right: 10px; padding-bottom: 15px;}
	</style>
	
	<script>
	function cekinput(){
	var username=document.getElementById("username");
	var password=document.getElementById("password");
	
	if(username.value==''||password.value==''){
		alert('inputan tidak boleh kosong!!');
		}
	}
	</script>
</head>
<body>
<center>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="get" onSubmit="cekinput()">
<h1>LOGIN</h1>
Username : <br />
<input type="text" name="username" id="username"/> <br />
Password : <br />
<input type="text" name="password" id="password"/> <br /> <br />
<input type="submit" value="LOGIN" />
</form>

<?php
	if(isset($_GET['username'])){
		$isiusername	=$_GET['username'];
		$isipassword	=$_GET['password'];
		$uname="zufi";
		$pass="zufi";
		
		$string = 'abcdefghijklmnopqrstuvwxyz';
		if(!preg_match("/^[a-zA-Z]+$/", $isiusername)){
			echo "<br>Username & Password hanya huruf!!";
		}
		
		if($isiusername==$uname && $isipassword==$pass){
			echo "<br> Hai, ".$uname;
		}else{
			echo "<br>Username atau Password salah!!";
		}
	}
?>

</center>
</body>
</html>