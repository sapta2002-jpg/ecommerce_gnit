<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
?>
<?php
$db = mysqli_connect("localhost", "root", "", "ecommerce");
$eid = $_POST['id'];
$category = $_POST['category'];
$productname = $_POST['pname'];
$price = $_POST['price'];
$description = $_POST['description'];
if($_FILES['pimage']['name']) {
$image = time().$_FILES['pimage']['name'];
$temp = $_FILES['pimage']['tmp_name'];
move_uploaded_file($temp, "uploads/".$image);
$update = "UPDATE product SET category='$category', name='$productname', image='$image', price='$price', description='$description' WHERE id='$eid'";
echo $update;
$db->query($update);
} else {
$update = "UPDATE product SET category='$category', name='$productname', price='$price', description='$description' WHERE id='$eid'";
echo $update;
$db->query($update);
}
header("location: product.php");
?>
