<!DOCTYPE html>
<html>
<head>
	<title>page-admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/admin.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
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
				<li class="active"><a href="page-admin.php">Home</a></li>
				<li><a href="user-admin.php">User</a></li>
				<li><a href="product-admin.php">Product</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
		</div>
		<div class="col-md-10 content">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dashboard
                </div>
                <div class="panel-body">
                    Total : ...
                </div>
                <div class="panel-body">
                    Total : ...
                </div>
                <div class="panel-body">
                    Total : ...
                </div>
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