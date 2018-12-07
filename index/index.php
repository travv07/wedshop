<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css" />
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- header -->
	<?php include "header.php" ?>
	<!-- carousel -->
	
	<div id="demo" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
		  <li data-target="#demo" data-slide-to="0" class="active"></li>
		  <li data-target="#demo" data-slide-to="1"></li>
		  <li data-target="#demo" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
		  <div class="carousel-item active">
		    <img src="../image/thoitrang.jpg" alt="Los Angeles" width="1100" height="500">
		  </div>
		  <div class="carousel-item">
		    <img src="../image/thoitrang.jpg" alt="Chicago" width="1100" height="500">
		  </div>
		  <div class="carousel-item">
		    <img src="../image/thoitrang.jpg" alt="New York" width="1100" height="500">
		  </div>
		</div>
	</div>
	<!-- content -->
	<div class="content">
		<div class="category">
			<div class="ct-left">
				<div class="ct-left1">
					<img src="../image/thoitrangnu.jpg" title="Thời Trang Nữ" width="392px" height="365px" class="category1" ten="nu">
				</div>	
			</div>
			<div class="ct-right">
				<div class="ct-right1">
					<img src="../image/thoitrangnam.jpg" title="Thời Trang Nam" width="392px" height="365px" class="category1" ten="nam">
				</div>
			</div>
		</div>	
		<div class="content3">
			<div class="ct-title2">
					<h1>Không Thể Bỏ Qua</h1>	
			</div>
		</div>
		<br>
		<div class="sanpham"> 
			<div class="khungsanpham"> 
				<?php
					include("connect.php");
					$sql = "SELECT * from Products";
					$result = mysqli_query($conn,$sql);
					while ($row = mysqli_fetch_array($result)) {
				?>
				<div class="row-sanpham"> 
					<a href=""> 
						<div class="anhsanpham"> 
							<a href=""><img src="../image/<?php echo $row['image'] ?>" width="200px" height="300px" ></a>
						</div> 
						<div class="tensanpham"> 
							<p><?php echo $row['name'] ?></p> 
						</div> 
						<div class="giasanpham"> 
							<p><?php echo $row['price'] ?></p> 
						</div> 
						<div class="btmua"> 
							<button  type="submit" name="login" class="btn btn-default button-login" ten="<?php echo $row['id_product'] ?>">Mua</button>
						</div> 
					</a> 
				</div> 
				<?php } ?>
			</div>
		</div>	
	</div>

																																																																																																																																																																																																																																																																																													
	<div class="clearfix"></div>
	<div class="footer">
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
		$('.button-login').each(function(){
			var id = $(this).attr('ten');
			$(this).on('click', function(){
				window.location.href="product-detail.php?id="+id;
			});
		});
		$(document).ready(function(){
			$('.category1').click(function(){
				var category = $(this).attr('ten');
				$.get('../ajax/category.php',{category: category},function(data){
					$('.khungsanpham').html(data);
				})
			})
		})
	</script>
</body>
</html>