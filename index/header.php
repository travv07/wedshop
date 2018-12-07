<?php session_start(); ?>
<div class="header">
		<div class="content-header">
			<div class="icon1">
				<div class="image-title">
					<a href="index.php"><img src="../image/iconshop.png" width="50px" height="50px"></a>
				</div>
				<div class="title-header">
					<h3><a href="index.php">Shop Clothes</a></h3>
				</div>
			</div>
			<div class="search">
				<div class="form-group1">
					<input type="text" name="search" id="search" class="form-control input-lg valuesearch" placeholder="Search" tabindex="3">
				</div>
		    </div>
			<div class="menu">
				<ul class="menu1">
					<li>
						<?php include("connect.php") ?>
						<?php if (isset($_SESSION['name'])) { ?>
						<div class="dropdown">
							<img src="../image/<?php echo $_SESSION['image'] ?>" class="header-icon1 js-show-header-dropdown dropdown-toggle" data-toggle="dropdown" alt="ICON" width="30px" height="30px">
						    <ul class="dropdown-menu">
						      <li><a href="user-profile.php">infor user</a></li>
						      <li><a href="logout.php">Logout</a></li>
						    </ul>
						</div>
						<?php }else {?>
							<div class="dropdown">
							<img src="../image/icon-header-01.png" class="header-icon1 js-show-header-dropdown dropdown-toggle" data-toggle="dropdown" alt="ICON" >
						    <ul class="dropdown-menu">
						      <li><a href="login.php">Login</a></li>
						      <li><a href="regis.php">Register</a></li>
						    </ul>
						</div>
						<?php } ?>
					</li>
					<li>
						<div class="dropdown">
							<img src="../image/icon-header-02.png" class="header-icon1 js-show-header-dropdown dropdown-toggle" data-toggle="dropdown" alt="ICON">
						    <ul class="dropdown-menu">
						      <li><a href="login.html">Login</a></li>
						      <li><a href="regis.html">Register</a></li>
						    </ul>
						</div>
					</li>
					<?php if ($_SESSION['rule']=='admin') {?>
					<li>
						<a href="../admin/page-admin.php">admin</a>
					</li>
					<?php } ?>
				</ul>	
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.search').on('keyup',function(){
				var value = $('.valuesearch').val();
				$.get('../ajax/search.php',{value : value},function(data){
					$('.khungsanpham').html(data);
				})
			});
		});

	</script>	