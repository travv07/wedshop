<?php 
	session_start();
	include ("connect.php");
	if(isset($_POST['login'])){
		$email = mysqli_real_escape_string($conn,$_POST['user']);
		$pass = mysqli_real_escape_string($conn,$_POST['password']);
		$qr = "select * from User where email_address='{$email}' and password='{$pass}'";
		$rs = mysqli_query($conn,$qr);
		if(mysqli_num_rows($rs)>0){
			while ($row = mysqli_fetch_array($rs)) {
				$_SESSION['id'] = $row['id'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['email_address'] = $row['email_address'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['image'] = $row['image'];
				$_SESSION['rule'] = $row['rule'];
			}
			header("location:index.php");
		}else{
			header("location:login.php");
		}
	}

?>
