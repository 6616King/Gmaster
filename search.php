<?php
	include 'header.php'
?>
	<div class="full_body" style="margin-top: 80px;">
		<div class="container">
			<div class="title_row">
				<?php echo '<h1>'.$result->num_rows.' results:</h1>' ?>
			</div>
			<div class="product_row">
				<?php
					print("$output");
				?>
			</div>
		</div>
	</div>

	<footer class="footer_container">
		<p>Copyright © GMaster. All rights reserved.</p>
	</footer>


</body>
</html>