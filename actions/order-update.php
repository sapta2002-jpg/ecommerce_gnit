<?php
include("../admin/database/db.php");

echo "<pre>";
print_r($_POST);
echo "</pre>";

$order_id = $_POST['order_id'];
$order_status = $_POST['order_status'];

$query = "UPDATE orders_table SET order_status='$order_status' WHERE order_id='$order_id'";
$result = $db->query($query);

header("location: ../admin/orders_list.php");
