<?php
	require_once ("db_connect.php");

	$output = '';

	if(isset($_POST['search'])){
		$searchq = $_POST['search'];
		$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

		$sql = "SELECT id, name, price FROM p_list WHERE name LIKE '%$searchq%' ORDER BY name ASC";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$output .= '<div class="col">
							<a href="productDetail.php?id='.$row["id"].'"><img class="product_img_150" src="images/products/'.$row["id"].'.jpg" alt=""/></a>
							<h5 class="title"><center>'.$row["name"].'</center></h5>
							<h4 align="right">$ '.$row["price"].'</h4><br>
							<div class="addtocart">ADD TO CART</div>
						</div>';
			}
		} else {
    		$output .= '<h2>Try again...<h2>';
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GMaster</title>
	<!-- Bootstrap -->
	<link href="css/bootstrap-4.0.0.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.0.0.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="menu_set">
			<a class="navbar-brand" href="home.php"><img src="logo.png" class="logo_img" alt=""/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="pc.php">PC</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="ps4.php">PS4</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="xbox.php">XBOX</a>
					</li>
					<form class="form-inline search" method="post" action="search.php">
          				<input class="form-control mr-sm-2" type = "text" name = "search" placeholder="Search" aria-label="Search" id="search">
          				<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><span class="fa fa-search"></span></button>
        			</form>
					<li class="dropdown" id="account"><a class="dropdown-toggle_account" data-toggle="dropdown" href="#"><em class="fas fa-user"></em></a>
					  <div class="dropdown-menu" id="user_dropdown">
							<div class="user_menu">
								<div class="user_signin">
									<p>SIGN IN</p>
								</div>
							</div>
							<div class="user_login">
								<form class="modal-content animate" action="/action_page.php">
									<div class="login_container">
										<label for="uname">Username</label>
										<input type="text" placeholder="Enter Username" name="uname" required>
										<label for="psw">Password</label>
										<input type="password" placeholder="Enter Password" name="psw" required>
										<div class="login_bottom">
											<button type="submit" class="login_button">Login</button>
											<label>
												<input type="checkbox" checked="checked" name="remember"> Remember me
											</label>
										</div>
									</div>
								</form>
								<a class="user_signup" href="register.php">Register</a>
							</div>
						</div>
					</li>
						<li class="nav-item active" id="cart"><a href="#" class="nav-link" data-toggle="dropdown"><span class="fas fa-shopping-cart"></span><span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				</ul>
			</div>
		</div>
	</nav>