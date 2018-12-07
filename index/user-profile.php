<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>user-profile</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/user-profile.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- header -->
	<?php
	include 'connect.php';
    if(isset($_POST['save'])){    
        $fullname = $_POST['name'];
        $address = $_POST['address'];
        $email_address = $_POST['email'];
        $password = $_POST['password'];
        $avatar = $_POST['image'];
        $email_old = $_SESSION['email_address'];
        $qrup = "update User set name='$fullname',address='$address',email_address='$email_address',image='$avatar', password = '$password' where email_address='$email_old'";
        if(mysqli_query($conn,$qrup)){
            $_SESSION['noti-update']= "You updated successful";
            header("location:user-profile.php");
        }
    }
?>
	<?php include "header.php" ?>
	<!-- user-info -->
	<?php
		include("connect.php");
		$id = $_SESSION['id'];
		$sql = "SELECT * from User where id='$id'";
		$result = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_array($result)) {
	?>

	<div class="page-connter">
		<div class="page-user-info">
			<div class="container-left">
				<div class="user">

					<div class="user-img">
						<img src="../image/<?php echo $row['image'] ?>" alt="" width="40px" height="48px">
					</div>
					<div class="user-name">
						<p><?php echo $row['name'] ?></p>
					</div>	
				</div>	
				<div class="clearfix"></div>
				<div class="side-bar-menu">
					<ul>
						<li><a href="user-profile.php">Infor</a></li>
						<li><a href="#" id="edit-infor">Update infor</a></li>
						<li><a href="">Bill</a></li>
						<li><a href="">Adress</a></li>
					</ul>
				</div>
			</div>
			<div class="container-right">
				<div class="user-info">
					<div class="user-info-label">
						<h2>Infor user</h2>
					</div>
					<div class="user-info-list">
						<div class="khungrow">
							    <div class="form-group2">
							      	<div class="row-left">
							      		<label for="name">Name</label>
							      	</div>
							      	<div class="row-right">
							      		<p><?php echo $row['name'] ?></p>
							      	</div>
							    </div>
							    <div class="form-group2">
								    <div class="row-left">
								   		<label for="email">Email</label>
								   	</div>
							      	<p><?php echo $row['email_address'] ?></p>
							    </div>
							    <div class="form-group2">
							    	<div class="row-left">
								   		<label for="password">Password</label>
								   	</div>
							      	<div class="row-right">
							      		<p><?php echo $row['password'] ?></p>
							      	</div>
							    </div>
							    <div class="form-group2">
							    	<div class="row-left">
								   		<label for="address">Address</label>
								   	</div>
							      	<div class="row-right">
							      		<p><?php echo $row['address'] ?></p>
							      	</div>
							    </div>
							    <div class="form-group2">
							    	<div class="row-left">
								   		<label for="avatar">Avatar</label>
								   	</div>
								   	<div class="row-right">
							      		<p><?php echo $row['image'] ?></p>
							      	</div>
							    	
							    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
	<!-- footer -->
	<div class="footer-user">
		<div class="footerleft">
			<div class="footer1">
				<a href=""><h3>Shop Clothes</h3></a>
				<a href=""><p>Giới thiệu Shop</p></a>
				<a href=""><p>Quy Chế</p></a>
				<a href=""><p>Bảo Hành</p></a>
			</div>
		</div>
		<div class="footercenter">
			<div class="footer2">
				<a href=""><h3>Công Ty TNHH 1 Thành Viên </h3></a>
				<p>SDT:0111111111</p>
				<p>Diachi:LOL</p>
				<a href="https://www.facebook.com/"><img src="../image/iconfb.png" width="50px" height="50px"></a>
				<a href=""><img src="../image/iconzalo.png" width="50px" height="50px"></a>
			</div>
		</div>
		<div class="footerright">
			
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#edit-infor').click(function(){
				// $.get('../ajax/edit-user-profile.php',function(data){
				// 	$('.khungrow').html(data);
				// })
				$.ajax({
				    url: '../ajax/edit-user-profile.php',
				    type: 'post',
				    success: function(data){
				        $('.khungrow').html(data);
				    },
				});
			})
		});
	</script>
</body>
</html>