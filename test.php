<?php
error_reporting(0);
//Setting session start
session_start();

$total=0;

//Database connection, replace with your connection string.. Used PDO
$conn = new PDO("mysql:host=localhost;dbname=shop_db", 'root', '');		
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//get action string
$action = isset($_GET['action'])?$_GET['action']:"";

//Add to cart
if($action=='addcart' && $_SERVER['REQUEST_METHOD']=='POST') {
	
	//Finding the product by code
	$query = "SELECT * FROM products WHERE sku=:sku";
	$stmt = $conn->prepare($query);
	$stmt->bindParam('sku', $_POST['sku']);
	$stmt->execute();
	$product = $stmt->fetch();
	
	$currentQty = $_SESSION['products'][$_POST['sku']]['qty']+1; //Incrementing the product qty in cart
	$_SESSION['products'][$_POST['sku']] =array('qty'=>$currentQty,'name'=>$product['name'],'image'=>$product['image'],'price'=>$product['price']);
	$product='';
	header("Location:shopping-cart.php");
}

//Empty All
if($action=='emptyall') {
	$_SESSION['products'] =array();
	header("Location:shopping-cart.php");	
}

//Empty one by one
if($action=='empty') {
	$sku = $_GET['sku'];
	$products = $_SESSION['products'];
	unset($products[$sku]);
	$_SESSION['products']= $products;
	header("Location:shopping-cart.php");	
}

 //Get all Products
$query = "SELECT * FROM products";
$stmt = $conn->prepare($query);
$stmt->execute();
$products = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="public/css/cart.css">
</head>
<body>
	<main class="page">
	 	   <section class="shopping-cart dark">
	 		   <div class="container">
		        <div class="block-heading">
		            <h2>Shopping Cart</h2>
		        </div>
		        <div class="content">
	 				   <div class="row">
	 				   	<div class="col-md-12 col-lg-8">
	 					   	<div class="items">
				 		   		<div class="product">
				 			   		<div class="row">
					 		   			<div class="col-md-3">
					 		   				<img class="img-fluid mx-auto d-block image" src="assets/img/image.jpg">
					 		   			</div>
					 		  	 		<div class="col-md-8">
					 			   			<div class="info">
						 			   			<div class="row">
							 		   				<div class="col-md-5 product-name">
							 		   					<div class="product-name">
								 						   	<a href="#">Lorem Ipsum dolor</a>
								 					   		<div class="product-info">
									 					   		<div>Display: <span class="value">5 inch</span></div>
									 		   					<div>RAM: <span class="value">4GB</span></div>
									    							<div>Memory: <span class="value">32GB</span></div>
									 	   					</div>
							   		 					</div>
							    						</div>
						   	 						<div class="col-md-4 quantity">
							    							<label for="quantity">Quantity:</label>
						   	 							<input id="quantity" type="number" value ="1" class="form-control quantity-input">
							    						</div>
							    						<div class="col-md-3 price">
							    							<span>$120</span>
							    						</div>
							    					</div>
							    				</div>
					 	   				</div>
					 	   			</div>
				 	   			</div>
				 	       			<div class="product">
				 	 	  			<div class="row">
					 		   			<div class="col-md-3">
					 		   				<img class="img-fluid mx-auto d-block image" src="assets/img/image.jpg">
					 	   				</div>
					 	   				<div class="col-md-8">
					    						<div class="info">
					   	 						<div class="row">
					   		 						<div class="col-md-5 product-name">
					   		 							<div class="product-name">
				   				 							<a href="#">Lorem Ipsum dolor</a>
				   				 							<div class="product-info">
			   						 							<div>Display: <span class="value">5 inch</span></div>
			   						 							<div>RAM: <span class="value">4GB</span></div>
			   						 							<div>Memory: <span class="value">32GB</span></div>
				   					 						</div>
				   					 					</div>
				   			 						</div>
				   			 						<div class="col-md-4 quantity">
							    							<label for="quantity">Quantity:</label>
							    							<input id="quantity" type="number" value ="1" class="form-control quantity-input">
							    						</div>
						   	 						<div class="col-md-3 price">
							    							<span>$120</span>
						   	 						</div>
					   		 					</div>
					   		 				</div>
					    					</div>
				   	 				</div>
				    				</div>
				 	   			<div class="product">
				 	   				<div class="row">
					    					<div class="col-md-3">
					 				   		<img class="img-fluid mx-auto d-block image" src="assets/img/image.jpg">
					 			   		</div>
					 			   		<div class="col-md-8">
					 			   			<div class="info">
						 		   				<div class="row">
							 	   					<div class="col-md-5 product-name">
							 	   						<div class="product-name">
								    							<a href="#">Lorem Ipsum dolor</a>
							   	 							<div class="product-info">
							   		 							<div>Display: <span class="value">5 inch</span></div>
						   			 							<div>RAM: <span class="value">4GB</span></div>
						   			 							<div>Memory: <span class="value">32GB</span></div>
						   			 						</div>
						   			 					</div>
					   		 						</div>
					   		 						<div class="col-md-4 quantity">
				   			 							<label for="quantity">Quantity:</label>
				   			 							<input id="quantity" type="number" value ="1" class="form-control quantity-input">
				   			 						</div>
				   			 						<div class="col-md-3 price">
			   				 							<span>$120</span>
			   				 						</div>
		   					 					</div>
		   					 				</div>
			   		 					</div>
		   			 				</div>
		   		 				</div>
		   		 			</div>
		   	 			</div>
		   	 			<div class="col-md-12 col-lg-4">
		   	 				<div class="summary">
		   	 					<h3>Summary</h3>
		   	 					<div class="summary-item"><span class="text">Subtotal</span><span class="price">$360</span></div>
		   	 					<div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
	   		 					<div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
	   		 					<div class="summary-item"><span class="text">Total</span><span class="price">$360</span></div>
	   		 					<button type="button" class="form-submit-button">Checkout</button>
	   			 			</div>
	   		 			</div>
		    	    	</div> 
	 			   </div>
                </div>
		</section>
	</main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>