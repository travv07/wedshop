<?php 
	include('../index/connect.php');
	if(isset($_GET['category'])){
		$category = $_GET['category'];
		$sql = "SELECT * from Products where category='$category' ";
		$rs = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_array($rs)) {
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
<?php 	}}?>