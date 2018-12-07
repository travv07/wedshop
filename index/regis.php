<!DOCTYPE html>
<html>
<head>
	<title>Regis</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/regis.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h2>Sign up</h2>
	<div class="row1">
		<div class="khungrow">
			<form>
			    <div class="form-group1">
			      	<div class="row-left">
			      		<label for="name">Full Name:</label>
			      	</div>
			      	<div class="row-right">
			      		<input type="text" class="form-control" id="name" name="name" placeholder="full name">
			      	</div>
			    </div>
			    <div class="form-group1">
				    <div class="row-left">
				   		<label for="Adress">Address</label>
				   	</div>
			      	<div class="row-right">
			      		<input type="text" class="form-control" id="address" name="address" placeholder="address">
			      	</div>
			    </div>
			    <div class="form-group1">
				    <div class="row-left">
				   		<label for="username">Username</label>
				   	</div>
			      	<div class="row-right">
			      		<input type="text" class="form-control" id="username" name="username" placeholder="username">
			      	</div>
			    </div>
			    <div class="form-group1">
			    	<div class="row-left">
				   		<label for="password">Password</label>
				   	</div>
			      	<div class="row-right">
			      		<input type="password" class="form-control" id="password" name="password" placeholder="password">
			      	</div>
			    </div>
			    <div class="form-group1">
			    	<div class="row-left">
				   		<label for="numberphone">Number phone</label>
				   	</div>
			      	<div class="row-right">
			      		<input type="text" class="form-control" id="numberphone" name="numberphone" placeholder="number phone">
			      	</div>
			    </div>
			    <div class="form-group1">
			    	<div class="row-left">
				   		<label for="avatar">Avatar</label>
				   	</div>
				   	<div class="row-right">
				   		<div class="btn btn-default image-preview-input btn-avt">	
		      		        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" id="avt" >
		            	</div>
				   	</div>
			    	
			    </div>
			    <div class="form-group1">        
				   	<button type="submit" class="btn btn-default btn-regis">Create</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>