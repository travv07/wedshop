<?php 	session_start(); 
		include '../index/connect.php';
		$id = $_SESSION['id'];
		$sql = "SELECT * from User where id='$id'";
		$result = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_array($result)) {

?>
		<form action="user-profile.php" method="post">
		    <div class="form-group2">
		      	<div class="row-left">
		      		<label for="name">Name</label>
		      	</div>
		      	<div class="row-right">
		      		<input type="text" class="form-control" id="name" name="name"  value="<?php echo $row['name'] ?>">
		      	</div>
		    </div>
		    <div class="form-group2">
			    <div class="row-left">
			   		<label for="email">Email</label>
			   	</div>
		      	<div class="row-right">
		      		<input type="email" class="form-control" id="email" name="email"  value="<?php echo $row['email_address'] ?>">
		      	</div>
		    </div>
		    <div class="form-group2">
		    	<div class="row-left">
			   		<label for="password">Password</label>
			   	</div>
		      	<div class="row-right">
		      		<input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password'] ?>">
		      	</div>
		    </div>
		    <div class="form-group2">
		    	<div class="row-left">
			   		<label for="address">Address</label>
			   	</div>
		      	<div class="row-right">
		      		<input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address'] ?>">
		      	</div>
		    </div>
		    <div class="form-group2">
		    	<div class="row-left">
			   		<label for="avatar">Avatar</label>
			   	</div>
			   	<div class="row-right">
		      		<input type="text" class="form-control" id="image" name="image" value="<?php echo $row['image'] ?>">
		      	</div>
		    </div>
		    <div class="form-group2">        
			   	<button type="submit" class="btn btn-default btn-save" name="save">Save</button>
			</div>
		</form>
						
<?php } 
?>