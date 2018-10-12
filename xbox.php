<?php
	include 'header.php';
?>
	<div class="full_body" style="margin-top: 80px;">
		<div class="container">
			<div class="title_row">
				<h1 style="display: inline-block;">XBOX</h1>
				<div style="float: right; display: inline-block;">
					<form name="sort" method="post">
						<select name="order" id="order" onchange="this.form.submit()" onload="this.form.submit()">
							<option value="n_az" selected="selected">Name (A - Z)</option>
							<option value="n_za">Name (Z - A)</option>
							<option value="p_lh">Price (Low to High)</option>
							<option value="p_hl">Price (High to Low)</option>
						</select>
						<script type="text/javascript">
  							document.getElementById('order').value = "<?php echo $_POST['order'];?>";
  							document.getElementById('order').submit();
						</script>
					</form>
				</div>
			</div>
			<div class="product_row">
				<?php
				 $i = 0;
					require_once ("db_connect.php");

					if(isset($_POST['order'])){
						$sql = 'SELECT id, name, price FROM p_list WHERE type = "xbox"';
						switch( $_POST['order'] ){
						    case 'n_az':
						        $sql .= ' ORDER BY name ASC';
						        break;
						    case 'n_za':
						        $sql .= ' ORDER BY name DESC';
						        break;
						    case 'p_lh':
						        $sql .= ' ORDER BY price ASC';
						        break;
						    case 'p_hl':
						        $sql .= ' ORDER BY price DESC';
						        break;
						}
					}
					else{
						$sql = 'SELECT id, name, price FROM p_list WHERE type = "xbox" ORDER BY name ASC';
					}
					$result = mysqli_query($conn, $sql);
					
					while($row6 = mysqli_fetch_assoc($result)){
				?>
						<div class="col">
								<a href="productDetail.php?id=<?php echo $row6['id']?>"><img class="product_img_150" src="images/products/<?php echo $row6["id"];?>.jpg" alt=""/></a>
							<h5 class="title"><center><?php echo $row6["name"];?></center></h5>
							<h4 align="right">$ <?php echo $row6["price"];?></h4><br>
							<div class="addtocart">ADD TO CART</div>
						</div>
					<?php
						$i++;
						 if($i % 6 == 0) {
							 echo  '</div><div class="product_row"><br />' ;

						 }
					}
					?>
			</div>
		</div>
	</div>
	
	<footer class="footer_container">
		<p>Copyright © GMaster. All rights reserved.</p>
	</footer>


</body>
</html>