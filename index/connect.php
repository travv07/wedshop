<?php
	$username = "root";//sql12207584
	$password = "1";//KzyYpsTKu2
	$servername ="localhost";//sql12.freemysqlhosting.net

	$dbname = "wedshop";//sql12207584
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	mysqli_set_charset($conn, 'utf8');
	if(!$conn){
		die("không thể kết nối..".mysqli_connect_error());
	}
	
?>
