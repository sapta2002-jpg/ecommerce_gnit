<?php
header('Content-Type: application/json');

require('./vendor/autoload.php');
require('./config.php');

use Razorpay\Api\Api;

// Check if credentials are set
if (empty($keyID) || empty($keySecret)) {
    http_response_code(401);
    echo json_encode([
        "success" => false,
        "error" => "Razorpay API credentials are missing. Please check config.php"
    ]);
    exit;
}

$amount = $_GET['amount'];

try {
    $api = new Api($keyID, $keySecret);

    // Create order ID
    $orderData =  [
        "receipt" => "receipt#1",
        "amount" => $amount * 100,
        "currency" => "INR",
        "payment_capture" => 1
    ];

    $order = $api->order->create($orderData);

    echo json_encode([
        "success" => true,
        "orderId" => $order['id']
    ]);
} catch (\Razorpay\Api\Errors\BadRequestError $e) {
    http_response_code(400);
    echo json_encode([
        "success" => false,
        "error" => "Bad Request: " . $e->getMessage(),
        "code" => $e->getCode()
    ]);
} catch (\Razorpay\Api\Errors\UnauthorizedError $e) {
    http_response_code(401);
    echo json_encode([
        "success" => false,
        "error" => "Unauthorized: Invalid API credentials. Please check your Key ID and Key Secret in config.php",
        "code" => $e->getCode()
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "success" => false,
        "error" => "Error: " . $e->getMessage(),
        "code" => $e->getCode()
    ]);
}
