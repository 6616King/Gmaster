<?php
	include 'header.php';
?>
	<div class="full_body">
		<div class="poster">
			<img src="images/post1.jpg" class="mySlides poster" alt="" width="1200px" height="400px" />
			<img src="images/post2.jpg" class="mySlides poster" alt="" width="1200px" height="400px" />
			<img src="images/post3.jpg" class="mySlides poster" alt="" width="1200px" height="400px"/>
		</div>
		<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}
				x[myIndex-1].style.display = "block";  
				setTimeout(carousel, 3500); // Change image every 5 seconds
			}
		</script>
		<div class="container">
			<div class="title_row">
				<h1>PC</h1>
			</div>
			<div class="product_row">
				<?php
					require_once ("db_connect.php");

					$sql = "SELECT id, name, price FROM p_list WHERE type = 'pc' LIMIT 6";
					$result = mysqli_query($conn, $sql);
				
					/*if (mysqli_num_rows($result) > 0){
						
					}*/
					
					while($row6 = mysqli_fetch_assoc($result)){
				?>
						<div class="col">
							<a href="productDetail.php?id=<?php echo $row6['id']?>"><img class="product_img_150" src="images/products/<?php echo $row6["id"];?>.jpg" alt=""/></a>
							<h5 class="title"><center><?php echo $row6["name"];?></center></h5>
							<h4 align="right">$ <?php echo $row6["price"];?></h4><br>
							<div class="addtocart">ADD TO CART</div>
						</div>
					<?php
						$row6++;
					}
					?>
			</div>
			<p><a href="pc.php" style="float: right;">view more <i class="fas fa-caret-right"></i></a></p>
		</div>
		<div class="container">
			<div class="title_row">
				<h1>PS4</h1>
			</div>
			<div class="product_row">
				<?php
					require_once ("db_connect.php");

					$sql = "SELECT id, name, price FROM p_list WHERE type = 'ps4' LIMIT 6";
					$result = mysqli_query($conn, $sql);
				
					/*if (mysqli_num_rows($result) > 0){
						
					}*/
					
					while($row6 = mysqli_fetch_assoc($result)){
				?>
						<div class="col">
								<a href="productDetail.php?id=<?php echo $row6['id']?>"><img class="product_img_150" src="images/products/<?php echo $row6["id"];?>.jpg" alt=""/></a>
							<h5 class="title"><center><?php echo $row6["name"];?></center></h5>
							<h4 align="right">$ <?php echo $row6["price"];?></h4><br>
							<div class="addtocart">ADD TO CART</div>
						</div>
					<?php
						$row6++;
					}
					?>
			</div>
			<p><a href="ps4.php" style="float: right;">view more <i class="fas fa-caret-right"></i></a></p>
		</div>
		<div class="container">
			<div class="title_row">
				<h1>XBOX</h1>
			</div>
			<div class="product_row">
				<?php
					require_once ("db_connect.php");

					$sql = "SELECT id, name, price FROM p_list WHERE type = 'xbox' LIMIT 6";
					$result = mysqli_query($conn, $sql);
				
					/*if (mysqli_num_rows($result) > 0){
						
					}*/
					
					while($row6 = mysqli_fetch_assoc($result)){
				?>
						<div class="col">
							<a href="productDetail.php?id=<?php echo $row6['id']?>"><img class="product_img_150" src="images/products/<?php echo $row6["id"];?>.jpg" alt=""/></a>
							<h5 class="title"><center><?php echo $row6["name"];?></center></h5>
							<h4 align="right">$ <?php echo $row6["price"];?></h4><br>
							<div class="addtocart">ADD TO CART</div>
						</div>

					<?php
						$row6++;
					}
					?>
			</div>	
			<p><a href="xbox.php" style="float: right;">view more <i class="fas fa-caret-right"></i></a></p>
		</div>

	</div>
	
	<footer class="footer_container">
		<p>Copyright © GMaster. All rights reserved.</p>
	</footer>


</body>
</html>
