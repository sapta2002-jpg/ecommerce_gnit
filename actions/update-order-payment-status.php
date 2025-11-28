<?php
include("../admin/database/db.php");
session_start();

// step 1: get payment_id and order_id from post request
$payment_id = $_POST['payment_id'];
$order_id = $_POST['order_id'];

// step 2: update order payment status and add payment id baseded on order_id
$update_order_payment_status = "UPDATE orders_table SET payment_id='$payment_id', payment_status='success' WHERE order_id='$order_id'";
$db->query($update_order_payment_status);

// Step 3: delete cart items based on user_id
$user_id = $_SESSION['user_id'];
$delete_cart_items = "DELETE FROM cart WHERE user_id='$user_id'";
$db->query($delete_cart_items);

echo json_encode([
    "success" => true,
    "message" => "Order payment status updated successfully"
]);
