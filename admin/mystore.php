<?php
session_start();

function title() {
    global $title;
    if(isset($title))
        echo $title;
    else
        echo 'Home';
}
    $title="my store";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../public/css/admin.css">
	<title>AdminHub</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
    --blue:#2980b9;
    --red:tomato;
    --orange:orange;
    --black:#333;
    --white:#fff;
    --bg-color:#eee;
    --dark-bg:rgba(0,0,0,.7);
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
    --border:.1rem solid #999;
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
}

.container{
    max-width: 1200px;
    margin:0 auto;
   /* padding-bottom: 5rem; */
}


.btn,
.option-btn,
.delete-btn{
    display: block;
    width: 100%;
    text-align: center;
    background-color: var(--blue);
    color:var(--white);
    font-size: 1.7rem;
    padding:1.2rem 3rem;
    border-radius: .5rem;
    cursor: pointer;
    margin-top: 1rem;
}

.btn:hover,
.option-btn:hover,
.delete-btn:hover{
    background-color: var(--black);
}

.option-btn i,
.delete-btn i{
    padding-right: .5rem;
}

.option-btn{
    background-color: var(--orange);
}

.delete-btn{
    margin-top: 0;
    background-color: var(--red);
}







#menu-btn{
    margin-left: 2rem;
    font-size: 3rem;
    cursor: pointer;
    color:var(--white);
    display: none;
}

.add-product-form{
    max-width: 50rem;
    background-color: var(--bg-color);
    border-radius: .5rem;
    padding:2rem;
    margin:0 auto;
    margin-top: 2rem;
}

.add-product-form h3{
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color:var(--black);
    text-transform: uppercase;
    text-align: center;
}

.add-product-form .box{
    text-transform: none;
    padding:1.2rem 1.4rem;
    font-size: 1.7rem;
    color:var(--black);
    border-radius: .5rem;
    background-color: var(--white);
    margin:1rem 0;
    width: 100%;
}
	</style>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="mystore.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
				<a href="messages.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Messages</span>
				</a>
			</li>
			<li>
				<a href="orders.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Orders</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="../public/imgs/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<div class="container">
			<section>
				<form action="" method="post" class="add-product-form" enctype ="multipart/form-data">
					<h3>Add a new product</h3>
					<input type="text" name="p_name" placeholder="enter the product name" class="box" required>
					<input type="number" name="p_price" min="0" placeholder="enter the product price" class="box" required>
					<input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
					<input type="submit" value="Add the product" name="add_product" class="btn">
				</form>
			</section>
		</div>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="../public/js/script.js"></script>
</body>
</html>