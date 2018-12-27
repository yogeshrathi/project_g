<?php
require_once 'conn.php'; 
if(isset($_GET['name'])){
$abc=$_GET['name'];	
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lorvens-Bootstrap Admin Dashboard and UI kit</title>
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

	<script>
function myFunction(){
var a,b,c;
a=Number(document.getElementById("Bags").value);
b=Number(document.getElementById("Bardan").value);
c= a + b;
document.getElementById("Total").value= c;
}
</script>
</head>

<body>
	<!-- Pre Loader -->
	<?php
	/**
	if(isset($_GET['NAME']) && isset($_GET['var']))
	{
		$id=$_GET['NAME'];
		$Status=$_GET['var'];
		$sql="UPDATE `sold_quantity` SET `NAME`='$id',`TYPE`='$_GET['name']',`DATE`='$row2["DATE"]',`NO_OF_BAGS`='$row2["NO_OF_BAGS"]',`NO_OF_BARDANS`='$row2["NO_OF_BARDANS"]',`SOLD_FLAG`='$_GET['var']',`QUANTITY`='$row2["QUANTITY"]',`TOTAL`='$row2["TOTAL"]' WHERE 'SOLD_FLAG'=' 0";
;
		mysqli_query($conn,$sql);
		
		header("refresh:00;url=maintain_stock.php");
	}
	*/

?>
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
						<span class="ti-layout-tab"></span>ADD STOCK
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
		<!-- /Sidebar -->
		<!-- Page Content -->
		<div id="content">
				<!-- Top Navigation -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<span class="ti-menu" id="sidebarCollapse"></span>
					</div>
					<ul class="nav justify-content-end">
						<li class="nav-item">
							<a class="nav-link" data-toggle="modal" data-target=".lorvens-modal-lg">
								<span class="ti-search"></span>
							</a>
							<div class="modal fade lorvens-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
								<div class="modal-dialog modal-lorvens">
									<div class="modal-content lorvens-box-shadow">
										<div class="modal-header">
											<h5 class="modal-title">Serach Client/Project:</h5>
											<span class="ti-close" data-dismiss="modal" aria-label="Close">
											</span>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<input type="text" class="form-control" id="search-term" placeholder="Type text here">
													<button type="button" class="btn btn-lorvens lorvens-bg">
														<span class="ti-location-arrow"></span> Search</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-announcement"></span>
							</a>
							<div class="dropdown-menu lorvens-box-shadow notifications animated flipInY">
								<h5>Notifications</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-comment-alt"></span> New User Registered</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Client asked to send Quotaion</a>
								<a class="dropdown-item" href="#">
									<span class="ti-time"></span> Have schedule meeting today</a>
								<a class="dropdown-item" href="#">
									<span class="ti-comment-alt"></span> New User Registered</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="ti-user"></span>
							</a>
							<div class="dropdown-menu lorvens-box-shadow profile animated flipInY">
								<h5>John Willing</h5>
								<a class="dropdown-item" href="#">
									<span class="ti-settings"></span> Settings</a>
								<a class="dropdown-item" href="#">
									<span class="ti-help-alt"></span> Help</a>
								<a class="dropdown-item" href="#">
									<span class="ti-power-off"></span> Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">
						<span class="ti-home"></span>
					</a>
				</li>
				<li class="breadcrumb-item active"><?php echo $_GET['name'];?></li>
			</ol>
			<div class="container-fluid"> 
				<div class="row">
					<div class="col-md-12">
						<h3 class="block-title"><?php echo $_GET['name'];?></h3>
					</div>
				</div> 
				<div class="row">
					<div class="col-md-12">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title">ADD STOCK</h3> 
														<div class="lorvens-widget">
								<form action="maintain_stock_backend.php" method="POST">
									<div class="form-group">
										<label for="exampleInputEmail1">Name</label>
										<select class="form-control" id="exampleFormControlSelect1" name="name">
											<?php

													
													$sql4 = "SELECT * FROM `customers`";
													$result4 = $conn->query($sql4);
									
										

											 
											           while ($row4=$result4->fetch_assoc()) 
										
														{
											                echo "<option value=".$row4["NAME"].">".$row4["NAME"]."</option>";
											            
											            }
											                
											?>	
											
										</select>
										</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">ITEM TYPE</label>
										<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="item" value="<?php echo $_GET['name'];?>" readonly>
										
									</div>
									
									
									<div class="form-group">
										<label for="exampleInputEmail1">QUANTITY</label>
										<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="quantity">
										<div class="form-group">
										<label for="exampleInputEmail1">DATE </label>
										<input type="DATE" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date">
										</div>
										</div>
										<div class="form-group">
										<label for="exampleInputEmail1">NO. OF BARDAN </label>
										<input type="number" class="form-control" id="Bardan" aria-describedby="emailHelp" value="0" name="bardan">
										</div>
										<div class="form-group">
										<label for="exampleInputEmail1">NO. OF BAGS</label>
										<input type="number" class="form-control" id="Bags" aria-describedby="emailHelp" value="0" name="bags" onkeyup="myFunction()">
									    </div>
										<div class="form-group">
										<label for="exampleInputEmail1">Total</label>
										<input type="number" class="form-control" id="Total" aria-describedby="emailHelp" name="total" readonly >
										</div>
										<div class="form-group">
										<label for="exampleInputEmail1">COMMISSION </label>
										<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="commission">
										</div>
										

									<div class="form-group">
										<label for="exampleFormControlSelect1"><b>GOWDOWN EXPENSES:</b></label>
										
										YES<input type="radio" name="GE" value="1" >
										NO<input type="radio" name="GE" value="0">
									</div>
									<div class="form-group">
										<label for="exampleFormControlSelect1"><b>LARI_1:</b></label>
										
										YES<input type="radio" name="L1" value="1" >
										NO<input type="radio" name="L1" value="0">
									</div>
									
									<div class="form-group">
										<label for="exampleFormControlSelect1"><b>LARI_2:</b></label>
										
										YES<input type="radio" name="L2" value="1" >
										NO<input type="radio" name="L2" value="0">
									</div>
									
									<div class="form-group">
										<label for="exampleFormControlSelect1"><b>THADI:</b></label>
										
										YES<input type="radio" name="TH" value="1" >
										NO<input type="radio" name="TH" value="0">
									</div>
									
									<div class="form-group">
										<label for="exampleFormControlSelect1"><b>UTARAI:</b></label>
										
										YES<input type="radio" name="UT" value="1" >
										NO<input type="radio" name="UT" value="0">
									</div>
									<div class="form-group">
										<label for="exampleFormControlSelect1"><b>VATAV:</b></label>
										
										YES<input type="radio" name="VT" value="1" >
										NO<input type="radio" name="VT" value="0">
									</div>
									
									
									
									
									
									<button type="submit" name="Submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
								  
								
						<div class="col-md-12">
						<div class="widget-area-2 lorvens-box-shadow">
							<h3 class="widget-title"><?php echo $_GET['name'];?></h3>
							
							<div class="table-div">
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col">SR_NO</th>
											<th scope="col">NAME</th>
											<th scope="col">DATE</th>
											<th scope="col">NO_OF_BARDANS</th>
											<th scope="col">NO_OF_BAGS</th>
											<th scope="col">QUANTITY</th>
											<th scope="col">TOTAL</th>
											<th scope="col">GOWDOWN</th>
											<th scope="col">LARI_F1</th>
											<th scope="col">LARI_F2</th>
											<th scope="col">THADI</th>
											<th scope="col">COMISSION</th>
											<th scope="col">UTARAI</th>
											<th scope="col">VATAV</th>
											<th scope="col">SOLD</th>
											
											
										</tr>
									</thead>
										<?php

										
								$sql2 = "SELECT * FROM `$abc`";
										$result2 = $conn->query($sql2);
									
										
									?>
									<tbody>
										<?php
										while ($row2=$result2->fetch_assoc()) 
										{
											
									  echo "<tr><td>".$row2["SR_NO"]."</td>
									  <td>".$row2["NAME"]."</td>
									  <td>".$row2["DATE"]."</td><td>".$row2["NO_OF_BAGS"]."</td><td>".$row2["NO_OF_BARDANS"]."</td><td>".$row2["QUANTITY"]."</td><td>".$row2["TOTAL"]."</td><td>".$row2["GOWDOWN_EXP_FLAG"]."</td><td>".$row2["LARI_F1"]."</td><td>".$row2["LARI_F2"]."</td><td>".$row2["THADI_FLAG"]."</td><td>".$row2["COMISSION"]."</td><td>".$row2["VATAV"]."</td><td>".$row2["UTARAI_FLAG"]."</td>";?>
									  <td><a href="maintain_stock.php?id=<?php echo $row2['NAME']; ?>&var=<?php echo 1; ?>"><button>sold</button></a></td></tr> 
									<?php 
								}
								 
								 
								 ?>	
									</tbody>
								</table>
							</div>
				
						</div>
					</div>
					
							</div>
						
						</div>
					</div>
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
	<!-- Custom Script-->
	<script src="js/custom.js"></script>
</body>
</html>
<?php
}
?>
