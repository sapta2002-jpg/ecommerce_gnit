<?php
require('./config.php');
require('./admin/database/db.php');

// step 1: Find order id from url
$orderId = $_GET['order_id'];

// step 2: Find order details from orders_table
$select_order = "SELECT * FROM orders_table WHERE order_id='$orderId'";
$result_order = $db->query($select_order);
$row_order = $result_order->fetch_assoc();

$order_id = $row_order['order_id'];

// step 2: Find total price of the order
$select = "SELECT * FROM sub_orders_table WHERE order_id='$order_id'";
$result_sub_orders = $db->query($select);

$subTotal = 0;

foreach ($result_sub_orders as $row_sub_order) {
    $x = $row_sub_order['qty'] * $row_sub_order['price'];
    $subTotal = $subTotal + $x;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
</head>

<body>

    <div id="error-message" style="color: red; margin-top: 10px;"></div>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        const razorpayKeyId = "<?php echo $keyID; ?>";

        async function triggerPayment() {
            const errorDiv = document.getElementById('error-message');
            errorDiv.textContent = '';

            try {
                const response = await fetch("http://localhost/ecommerce_gnit/create-order.php?amount=<?php echo $subTotal; ?>");
                const data = await response.json();
                console.log(data);

                if (!response.ok || !data.success) {
                    errorDiv.textContent = data.error || 'Failed to create order';
                    console.error('Error:', data);
                    return;
                }

                const orderId = data.orderId;
                console.log('Order ID:', orderId);

                const options = {
                    "key": razorpayKeyId,
                    "amount": <?php echo $subTotal; ?>,
                    "currency": "INR",
                    "name": "Ecom Shopping",
                    "description": "Payment for order",
                    "order_id": orderId,
                    "handler": function(response) {
                        console.log('Payment successful:', response);
                        // alert('Payment successful! Payment ID: ' + response.razorpay_payment_id);

                        $.ajax({
                            url: 'http://localhost/ecommerce_gnit/actions/update-order-payment-status.php',
                            type: 'POST',
                            data: {
                                payment_id: response.razorpay_payment_id,
                                order_id: <?php echo $order_id; ?>
                            },
                            dataType: 'json',
                            success: function(response) {
                                console.log(response);
                                if (response.success) {
                                    window.location.href = '<?php echo $base_url; ?>success.php';
                                } else {
                                    window.location.href = '<?php echo $base_url; ?>error.php';
                                }
                            },
                            error: function(error) {
                                console.log(error);
                            }
                        })
                    },
                    "prefill": {
                        "name": "John Doe",
                        "email": "john.doe@example.com",
                        "contact": "9876543210"
                    },
                    "theme": {
                        "color": "#F37254"
                    }
                };

                console.log('Razorpay options:', options);

                const razorpay = new Razorpay(options);
                razorpay.on('payment.failed', function(response) {
                    console.error('Payment failed:', response.error);
                    errorDiv.textContent = 'Payment failed: ' + (response.error.description || response.error.reason);
                });
                razorpay.open();
            } catch (error) {
                errorDiv.textContent = 'Error: ' + error.message;
                console.error('Fetch error:', error);
            }
        }

        triggerPayment();
    </script>
</body>

</html>