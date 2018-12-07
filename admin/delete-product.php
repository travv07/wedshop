<?php
	session_start();
	if(isset($_GET['id'])){
		include ("../index/connect.php");
		$id = $_GET['id'];
		$qr = "delete from Products where id_product='$id' ";
		if(mysqli_query($conn,$qr)){
			header("location:product-admin.php");
		}
		else{
			echo mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>
