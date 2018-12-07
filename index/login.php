<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/login.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h2>Sign in</h2>
	<div class="row1">
		<div class="khungrow">
			<form action="checklogin.php" method="post">
				<div class="form-group">
					<div class="input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					    <input id="user" type="text" class="form-control" name="user" placeholder="User Name">
				    </div>
				</div>
			    <div class="form-group">
			    	<div class="input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>	
					    <input id="password" type="password" class="form-control" name="password" placeholder="Enter Password">
					</div>
			    </div>
				<div class="form-group1">        
				   	<button type="submit" class="btn btn-default btn-login" type="submit" name="login">Login</button>
				   	<a href="regis.html">Create a account</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>