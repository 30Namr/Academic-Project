<?php
	session_start();
	include_once "./config/dbconnect.php";
	if(isset($_POST['submit'])) {
		$username=mysqli_real_escape_string($conn,$_POST['username']);
		$password=mysqli_real_escape_string($conn,$_POST['password']);
		$password=md5($password);
		$sql=mysqli_query($conn,"SELECT * FROM `admin` WHERE `user_name`='$username' && `password`='$password'");
		$num=mysqli_num_rows($sql);
		if($num>0) {
			$row=mysqli_fetch_assoc($sql);
			$_SESSION['ADMIN_ID']=$row['admin_id'];
			$_SESSION['ADMIN_NAME']=$row['user_name'];
			header("location:index.php");
		}else {
			$msg[]="Please Enter Valid Details !";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/css/loginstyle.css"></link>
	<title>Sainath Motors | Login Page</title>
</head>
<body>
	<div class="center">
		<h1>Admin Login Page</h1>
		<form action="" method="post">
			<?php
				if(isset($msg)) {
					foreach ($msg as $error) {
						echo '<span class="error">'.$error.'</span>';
					}
				}
			?>
			<div class="textfield">
				<input type="text" name="username" required>
				<span></span>
				<label>UserName</label>
			</div>
			<div class="textfield">
				<input type="password" name="password" required>
				<span></span>
				<label>Password</label>
			</div>
			<div class="button">
				<input type="submit" value="Login" name="submit">
			</div>
		</form>
	</div>
</body>
</html>