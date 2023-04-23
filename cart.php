<?php
    $title ="cart";
    include 'components/header.php';
    include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		.form-submit-button {
	background: white;
	color: black;
	border-style: outset;
	border-color:white;
	height: 50px;
	width: 100px;
	font: bold15px arial,sans-serif;
	text-shadow: none;}
	</style>
</head>
<body>




	<div class="container">
		<div class="col-md-12">
			<table class="table table-bordered my-5">
				<tr>
					<th>ITEM ID</th>
					<th>ITEM NAME</th>
					<th>ITEM PRICE</th>
					<th>ITEM QUANTITY</th>
					<th>ACTION</th>
				</tr>

				<?php 

				$total_price = 0;

				if (!empty($_SESSION['cart'])) {
					
					foreach ($_SESSION['cart'] as $key => $value) { ?>
						<tr>
							<td><?php echo $value['id']; ?></td>
							<td><?php echo $value['name']; ?></td>
							<td><?php echo $value['price']; ?></td>
							<td><?php echo $value['quantity']; ?></td>
                                <td>
									<button class="btn btn-danger remove" id="<?php echo $value['id']; ?>" >Remove</button>
                                </td>
						</tr>

						  <?php $total_price = $total_price + $value['quantity'] * $value['price']; ?>

						
						
					<?php }
				}else{ ?>
                        <tr>
							<td class="text-center" colspan="5">NO ITEM SELECTED</td>
                        </tr>
				<?php }




				?>

						<tr>
							<td colspan="2"></td>
							<td>Total Price</td>
							<td><?php echo number_format($total_price,2); ?></td>
							<td>
								<button class="form-submit-button">Clear All</button>
                            </td>
						</tr>
			</table>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>



<script type="text/javascript">
	$(document).ready(function(){


		$(".remove").click(function(){
            var id = $(this).attr("id");
                
                var action = "remove";

                $.ajax({
                method:"POST",
                url:"action.php",
                data:{action:action,id:id},
                success:function(data){
                    alert("you have Remove item with ID "+id+"");
                }
            });
		});
        

        $(".clearall").click(function(){

                var action = "clear";

            $.ajax({
                method:"POST",
                url:"action.php",
                data:{action:action},
                success:function(data){
                    alert("you have cleared all item");
                }
            });
        });
	});
</script>
</body>
</html>

<?php include 'components/footer.php'; ?>