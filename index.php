<!DOCTYPE html>
<?php
require_once 'conn.php'; 

?>

<html>


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PROGECT_G</title>
	<!-- Fav  Icon Link -->
	<link rel="shortcut icon" type="image/png" href="images/fav.png">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- themify icons CSS -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Animations CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Main CSS -->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/red.css" id="style_theme">
	<link rel="stylesheet" href="css/responsive.css">
	<!-- morris charts -->
	<link rel="stylesheet" href="charts/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="css/jquery-jvectormap.css">

	<script src="js/modernizr.min.js"></script>
</head>

<body>
	<!-- Pre Loader -->
	<div class="loading">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!--/Pre Loader -->
	<!-- Color Changer -->
	
	<!-- /Color Changer -->
	<div class="wrapper">
		<!-- Sidebar -->
		<nav id="sidebar" class="lorvens-bg">
			<div class="sidebar-header">
				<a href="index.html"><img src="images/logo.png" class="logo" alt="logo"></a>
				<a href="index.html"><img src="images/minimal-logo.png" class="minimal-logo" alt="logo"></a>
			</div>
			<ul class="list-unstyled components">
				<li class="active">
					<a href="#nav-dashboard" data-toggle="collapse" aria-expanded="true">
						<span class="ti-home"></span> Dashboard
					</a>
					
				</li>
				<li class="nav-level-one">
					<a href="#nav-uiKit" data-toggle="collapse" aria-expanded="false">
						<span class="ti-layout-tab"></span> CUSTOMER
					</a>
					<ul class="list-unstyled collapse" aria-expanded="true" id="nav-uiKit">
						<li>
							<a href="add_customer.php"> ADD CUSTOMER</a>
						</li>
						<li>
							<a href="#"> DELETE CUSTOMER</a>
						</li>
						<li>
							<a href="view_customer.php"> VIEW CUSTOMER</a>
						</li>
						
				
			</ul>
		</li>

		<li class="nav-level-one">
					<a href="#nav-ITEMS" data-toggle="collapse" aria-expanded="false">
						<span class="ti-layout-tab"></span> ITEMS
					</a>
					<ul class="list-unstyled collapse" aria-expanded="true" id="nav-ITEMS">
						<li>
							<a href="add_item.php"> ADD ITEMS</a>
						</li>
						
						
				
			</ul>
		</li>
		<li class="nav-level-one">
					<a href="#nav-month" data-toggle="collapse" aria-expanded="false">
						<span class="ti-layout-tab"></span> MONTH
					</a>
					<ul class="list-unstyled collapse" aria-expanded="true" id="nav-month">
						<li>
							<a href="#"> MONTH1 </a>
						</li>
						
						
				
			</ul>
		</li>
		<li class="nav-level-one">
					<a href="#nav-stock" data-toggle="collapse" aria-expanded="false">
						<span class="ti-layout-tab"></span> ADD STOCK
					</a>
					<ul class="list-unstyled collapse" aria-expanded="true" id="nav-stock">
						<?php

											     $sql="SELECT NAME FROM items";
											     $result= $conn->query($sql);

											 
											            while ($row1=$result->fetch_assoc())
											            {
											            	$item=$row1["NAME"];
											            ?>
											            <li> <a href="maintain_stock.php?name=<?php echo $item; ?>"><?php echo $item; ?> </a></li>
											            <?php
											            
											            }
											                
											?>	
						
						
				
			</ul>
		</li>
	</ul>

			<div class="nav-help animated fadeIn">
				<h5>Need Help</h5>
				<h6>
					<span class="ti-mobile"></span> +91  9462086239</h6>
				<h6>
					<span class="ti-email"></span> yrathi89@gmail.com</h6>
				<p class="copyright-text">Copy rights &copy; 2019</p>
			</div>
		</nav>
		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
			<!-- Top Navigation -->
			
			
			<!-- /Top Navigation -->
			<!-- Breadcrumb -->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">
						<span class="ti-home"></span>
					</a>
				</li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
			<!-- /Breadcrumb -->
			<!-- Main Content -->
			<div class="container-fluid home">
				<!-- Page Title -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="block-title">Quick Statistics</h3>
					</div>
				</div>
				<!-- /Page Title -->

				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-3">
						<div class="widget-area lorvens-box-shadow color-red">
							<div class="widget-left">
								<span class="ti-money"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">JEERA</h4>
								<span class="numeric color-red">$8348</span>
							</div>	
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-3">
						<div class="widget-area lorvens-box-shadow color-blue">
							<div class="widget-left">
								<span class="ti-user"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">New Users</h4>
								<span class="numeric color-blue">258</span>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-3">
						<div class="widget-area lorvens-box-shadow color-green">
							<div class="widget-left">
								<span class="ti-bar-chart"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Avg Revenue</h4>
								<span class="numeric color-green">$6585</span>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-3">
						<div class="widget-area lorvens-box-shadow color-yellow">
							<div class="widget-left">
								<span class="ti-thumb-up"></span>
							</div>
							<div class="widget-right">
								<h4 class="wiget-title">Total Projects</h4>
								<span class="numeric color-yellow">73</span>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
		
				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">Projects Year by Year</h3>
							<div id="lineMorris" class="chart-home"></div>
						</div>
					</div>
					<!-- /Widget Item -->
					<!-- Widget Item -->
					<div class="col-md-6">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">Clients Year by Year</h3>
							<div id="barMorris" class="chart-home"></div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
		
				<div class="row">
					<!-- Widget Item -->
					<div class="col-md-12">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">RECENTLY ADDED
								</h3>
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>Products</th>
											<th>Name</th>
											<th>Date</th>
											<th>Quantity</th>
											<th>No_of_Bags</th>
											<th>No_of_Bardan</th>
											<th>Total</th>
											
										</tr>
									</thead>
									<?php

										
								$sql8 = "SELECT * FROM `total_quantity` ORDER BY SR_NO DESC";
										$result8 = $conn->query($sql8);
									
										
									?>
									<tbody>
									<?php
										while ($row8=$result8->fetch_assoc()) 
										{
											
									  echo "<tr><td>".$row8["TYPE"]."</td>
									  <td>".$row8["NAME"]."</td>
									  <td>".$row8["DATE"]."</td><td>".$row8["QUANTITY"]."</td><td>".$row8["NO_OF_BAGS"]."</td><td>".$row8["NO_OF_BARDANS"]."</td><td>".$row8["TOTAL"]."</td></td>";?></td></tr> 
									<?php 
								}
								 
								 
								 ?>	
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
		
		<div class="row">
					
					<div class="col-md-12">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">RECENTLY SOLD
					</h3>
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>Products</th>
											<th>Name</th>
											<th>Date</th>
											<th>Quantity</th>
											<th>No_of_Bags</th>
											<th>No_of_Bardan</th>
											<th>Total</th>
											
										</tr>
									</thead>
									<?php
										

								$sql8 = "SELECT * FROM `SOLD_quantity` ORDER BY SR_NO DESC";
										$result8 = $conn->query($sql8);
									
										
									?>
									<tbody>
									<?php
										while ($row8=$result8->fetch_assoc()) 
										{
											
									  echo "<tr><td>".$row8["TYPE"]."</td>
									  <td>".$row8["NAME"]."</td>
									  <td>".$row8["DATE"]."</td><td>".$row8["QUANTITY"]."</td><td>".$row8["NO_OF_BAGS"]."</td><td>".$row8["NO_OF_BARDANS"]."</td><td>".$row8["TOTAL"]."</td></td>";?></td></tr> 
									<?php 
								}
								 
								 
								 ?>	
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /Widget Item -->
				</div>
				
				
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /Page Content -->
	</div>
	<!-- Back to Top -->
	<a id="back-to-top" href="#" class="back-to-top">
			<span class="ti-angle-up"></span>
	</a>
	<!-- /Back to Top -->
	<!-- Jquery Library-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Popper Library-->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap Library-->
	<script src="js/bootstrap.min.js"></script>
	<!-- morris charts -->
	<script src="charts/js/raphael-min.js"></script>
	<script src="charts/js/morris.min.js"></script>
	<script src="js/custom-morris.js"></script>
	<!-- jvectormap -->
	<script src="js/jquery-jvectormap.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill.js"></script>
	<script src="js/custom-vector.js"></script>
	<!-- Custom Script-->
	<script src="js/custom.js"></script>
</body>


</html>