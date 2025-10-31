<?php
include("../admin/database/db.php");
session_start();

// Step 1. get cart_id and qty
$cart_id = $_POST['cart_id'];
$quantity = $_POST['qty'];

// step 2. update into cart table
$update = "UPDATE cart SET qty='$quantity' WHERE cart_id='$cart_id'";
$result = $db->query($update);

// step 3. table html format return
echo json_encode([
    'status' => 'success',
    'message' => 'Cart updated successfully',
    'data' => $result
]);
