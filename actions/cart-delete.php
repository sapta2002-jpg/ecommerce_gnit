<?php
include("../admin/database/db.php");
session_start();

// step 1. get cart_id
$cart_id = $_POST['cart_id'];

// step 2. validation if cart_id is set
if (!$cart_id) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Cart ID is required',
        'data' => null
    ]);
    exit;
}

// step 3. check if cart_id is exists in cart table for this user
$user_id = $_SESSION['user_id'];
$checkQuery = "SELECT * FROM cart WHERE user_id='$user_id'";
$checkResult = $db->query($checkQuery);
if ($checkResult->num_rows === 0) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Cart not found',
        'data' => null
    ]);
    exit;
}

// step 4. delete the cart item
$deleteQuery = "DELETE FROM cart WHERE cart_id='$cart_id' AND user_id='$user_id'";
$result = $db->query($deleteQuery);
if ($result) {
    echo json_encode([
        'status' => 'success',
        'message' => 'Cart deleted successfully',
        'data' => $result
    ]);
    exit;
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Failed to delete cart',
        'data' => null
    ]);
    exit;
}
