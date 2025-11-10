<?php
include("../admin/database/db.php");
session_start();

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die();

// step 1 -> validation all post inputs
$country = $_POST['country_input'];
$state = $_POST['state_input'];
$city = $_POST['city_input'];
$pincode = $_POST['pincode_input'];

if (!$country || !$state || !$city || !$pincode) {
    return header("location: ../checkout.php");
}

// step 2. check if user is logged in or not
$user_id = $_SESSION['user_id'];

if (!$user_id) {
    return header("location: ../checkout.php");
}

// step 3. Check user id with database 
$selectUser = "SELECT * FROM users WHERE id='$user_id'";
$resultUser = $db->query($selectUser);

if ($resultUser->num_rows !== 1) {
    return header("location: ../checkout.php");
    exit;
}

// Step 4. Check if cart is empty or not
$cart_query = "SELECT * FROM cart WHERE user_id='$user_id'";
$cart_result = $db->query($cart_query);

if ($cart_result->num_rows === 0) {
    return header("location: ../checkout.php");
    exit;
}


// Step 5 insert into order table
$insert_order = "INSERT INTO orders_table SET country='$country', state='$state', city='$city', pincode='$pincode', user_id='$user_id'";
$result_order = $db->query($insert_order);

// Step 6. get last inserted order id
$last_order_id = $db->insert_id;

// step 7. insert into sub_orders_table
foreach ($cart_result as $cart_item) {

    $product_id = $cart_item['product_id'];
    $quantity = $cart_item['qty'];
    $price = $cart_item['price'];

    // Database transaction
    $order_items = "INSERT INTO sub_orders_table SET order_id='$last_order_id', product_id='$product_id', qty='$quantity', price='$price', user_id='$user_id'";
    $db->query($order_items);
}

// step 8. Redirect into payment gateway
echo "Redirecting to Payment Gateway";

// total payment price
// user name
// 