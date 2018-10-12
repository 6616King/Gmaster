<?php
	include 'header.php';
?>

	<div class="full_body">
			<?php
					$conn = new mysqli("localhost","root","","product");
				
					if ($conn -> connect_error){
						die("Connection failed: ".$conn -> connect_error);
					}
					$sql = "SELECT ID, Name, Price, description FROM p_list WHERE id =  '" . $_GET["id"] . "'";
					$result = mysqli_query($conn, $sql);
		
			while($row6 = mysqli_fetch_assoc($result)){
		?>	
			<div class="container_subpage">
					<div class="title_row">
				<h1>Product</h1>
			</div>
				<div class="col_product_detail">
		<img class=" product_detail_image" src="images/products/<?php echo $row6["ID"];?>.jpg" alt=""/><br>
							<h5 class="product_title"><center><?php echo $row6["Name"];?></center></h5><br>
							<h4 class="product_title" align="right"><b>$ <?php echo $row6["Price"];?></b></h4><br>
				
							<button class="btn btn-success" type="button" style="margin-right: 0px">Add to cart</button>
					<p style="font-size: 30px"><?php echo $row6["description"];?></p>
				<?php
		}
		?>
				</div>
		</div>
			

		
		
	</div>
</body>
</html>
