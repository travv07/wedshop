<!DOCTYPE html>
<html>
<head>
	<title>edit-user</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/admin.css" />
	<link rel="stylesheet" href="../css/regis.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php 
		include '../index/connect.php';
			if(isset($_POST['update'])){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$adress = $_POST['address'];
				$image = $_POST['image'];
				$password = $_POST['password'];
				$qr= "update User set name='$name',email_address='$email',address='$adress',password='$password',image='$image'";
				if(mysqli_query($conn,$qr)){
            		header("location:user-admin.php");
        		}
			}
	 ?>
<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="../index/index.php">
				Shop clothes
			</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">			
			<form class="navbar-form navbar-left" method="GET" role="search">
				<div class="form-group">
					<input type="text" name="q" class="form-control" placeholder="Search">
				</div>
			</form>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown ">
				<?php  session_start();  ?>
					<div class="dropdown">
						<img src="../image/<?php echo $_SESSION['image'] ?>" class="header-icon1 js-show-header-dropdown dropdown-toggle" data-toggle="dropdown" alt="ICON" width="30px" height="30px">
					    <ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">SETTINGS</li>
							<li class=""><a href="#">Other Link</a></li>
							<li class=""><a href="#">Other Link</a></li>
							<li class=""><a href="#">Other Link</a></li>
							<li class="divider"></li>
					      	<li><a href="../index/logout.php">Logout</a></li>
					    </ul>
					</div>
			</li>
		</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid main-container">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-pills nav-stacked">
				<li class="active"><a href="page-admin">Home</a></li>
				<li><a href="user-admin.php">User</a></li>
				<li><a href="product-admin.php">Product</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
		</div>
		<div class="col-md-10 content">
			<h2>Edit</h2>
			<div class="row1">
				<?php
					include '../index/connect.php';
					$id = $_GET['id']; 
					$sql = "select * from User where id='$id'";
					$result = mysqli_query($conn,$sql);
					while ($row = mysqli_fetch_array($result)) {
				 ?>
				<div class="khungrow">
					<form action="edit-user.php" method="post">
					    <div class="form-group1">
					      	<div class="row-left">
					      		<label for="name">Full Name:</label>
					      	</div>
					      	<div class="row-right">
					      		<input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'] ?>">
					      	</div>
					    </div>
					    <div class="form-group1">
						    <div class="row-left">
						   		<label for="Adress">Address</label>
						   	</div>
					      	<div class="row-right">
					      		<input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address'] ?>">
					      	</div>
					    </div>
					    <div class="form-group1">
						    <div class="row-left">
						   		<label for="email">Email</label>
						   	</div>
					      	<div class="row-right">
					      		<input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email_address'] ?>">
					      	</div>
					    </div>
					    <div class="form-group1">
					    	<div class="row-left">
						   		<label for="password">Password</label>
						   	</div>
					      	<div class="row-right">
					      		<input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password'] ?>">
					      	</div>
					    </div>
					    <div class="form-group1">
					    	<div class="row-left">
						   		<label for="avatar">Avatar</label>
						   	</div>
						   	<div class="row-right">
						   		<div class="row-right">
						      		<input type="text" class="form-control" id="image" name="image" value="<?php echo $row['image'] ?>">
						      	</div>
						   	</div>
					    	
					    </div>
					    <div class="form-group1">        
						   	<button type="submit" class="btn btn-default btn-regis " name="update" >Update</button>
						</div>
					</form>
				</div>
			<?php } ?>
			</div>
		</div>
		<footer class="pull-left footer">
			<p class="col-md-12">
				<hr class="divider">
				Copyright &COPY;2018 by VVT<a href="#">Shop clothes</a>
			</p>
		</footer>
	</div>
</body>
</html>