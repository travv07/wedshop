<!DOCTYPE html>
<html>
<head>
	<title>product-detail</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/product.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=220379985135243';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- header -->
	<?php include "header.php" ?>
	<!-- conntent -->
	<?php
		include("connect.php");
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$sql = "SELECT * from Products where id_product='$id'";
		}
		$result = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_array($result)) {
		
	?>
	<div class="page-product-detail">
		<div class="crumb">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
			    	<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			    	<li class="breadcrumb-item active" aria-current="page"><?php echo $row['name'] ?></li>
			  	</ol>
			</nav>
		</div>
		<div class="view-product">
			<div class="view-product-left">
				<img src="../image/<?php echo $row['image'] ?>" alt="" width="400px" height="300px">
			</div>
			<div class="view-product-right">
				<div class="view-info-product">
					<h1> <?php echo $row['name'] ?></h1>
					<h1> <?php echo $row['price'] ?></h1>
					<h3> <?php echo $row['description'] ?></h3>
					<div class="form-group2">        
					   	<button type="submit" class="btn btn-default btn-buy">Buy</button>
					</div>
				</div>
				<div class="cmt">
					<div class="fb-comments" data-href="http://localhost/Wedshop/index/product-detail.php?id=<?php echo $row['id_product']  ?>" data-numposts="8"></div>
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
</body>
</html>