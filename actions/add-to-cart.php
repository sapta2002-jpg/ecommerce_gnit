<?php
include("../admin/database/db.php");
session_start();

// step 1 ->  validation all post inputs
$productId = $_POST['productId'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

if (!$productId || !$quantity || !$price) {
    header("location: ../index.php");
    exit;
}

// step 2 -> if add_to_cart_btn is set then insert into table -> cart
if (isset($_POST['add_to_cart_btn'])) {

    $userId = $_SESSION['user_id'];

    // step 3 -> check if product is already exists in cart then update the quantity else insert into cart table (Next upgrade - make it dynamic)

    $select = "SELECT * FROM cart WHERE product_id='$productId' AND user_id='$userId'";
    $result = $db->query($select);

    echo "<pre>";
    print_r($result);
    echo "</pre>";
    die();


    if ($result->num_rows > 0) {
        $update = "UPDATE cart SET qty=qty+$quantity, price='$price' WHERE product_id='$productId' AND user_id='$userId'";
        $db->query($update);
    } else {
        $insert = "INSERT INTO cart SET product_id='$productId', qty='$quantity', price='$price', user_id='$userId'";
        $db->query($insert);
    }

    // last step -> after insert redirect into cart page
    header("location: ../cart.php");
    exit;
}
