<!DOCTYPE html>
<html>
<head>
	<title>LOGIN USER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>LOGIN USER <br/> </h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="table.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required"> <br> <br>
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<br><input type="submit" class="tombol_login" value="LOGIN"></br>
 
			<br/>
			<br/>
			<center>
				<a class="link" href="ppp"></a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>