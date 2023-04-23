<?php 

session_start();



    if (isset($_SESSION['cart'])) {

    $cart_id = array_column($_SESSION['cart'], "id");

    if (!in_array($_POST['id'], $_SESSION['cart'])) {
        $item_array = array(
        "id" => $_POST['id'],
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "quantity" => $_POST['quantity']
    );


    $_SESSION['cart'][] = $item_array;
    }

    }else{

    $item_array = array(
        "id" => $_POST['id'],
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "quantity" => $_POST['quantity']
    );


    $_SESSION['cart'][] = $item_array;
    }




?>