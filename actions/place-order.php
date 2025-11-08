<?php
include("../admin/database/db.php");
session_start();

// step 1. validation all post inputs
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];

if (!$country || !$state || !$city || !$pincode) {
    return header("location: ../checkout.php");
}

// step 2. check if user is logged in
$user_id = $_SESSION['user_id'];

if (!$user_id) {
    return header("location: ../checkout.php");
    exit;
}

// step 3. check if cart is not empty
$cart_query = "SELECT * FROM cart WHERE user_id='$user_id'";
$cart_result = $db->query($cart_query);
if ($cart_result->num_rows === 0) {
    return header("location: ../checkout.php");
    exit;
}

// step 4. insert order into order table and then cart table record -> run loop and add into sub_orders_table