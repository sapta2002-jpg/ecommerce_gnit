<?php
$db = mysqli_connect("localhost", "root", "", "ecommerce");
$id = $_GET['id'];
$select = "SELECT * FROM product WHERE id='$id'";
$result = $db->query($select);
while ($row = $result->fetch_assoc()) {
    $img = $row['image'];
    unlink("uploads/" . $img);
}
$delete = "DELETE FROM product WHERE id='$id'";

$db->query($delete);
header("location: product.php");
?>