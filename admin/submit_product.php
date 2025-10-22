<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
$db=mysqli_connect("localhost", "root", "", "ecommerce");
//$eid = $_GET['id'];
$category = $_POST['category'];
$productname = $_POST['pname'];
$image = time().$_FILES['pimage']['name'];
$temp = $_FILES['pimage']['tmp_name'];
$price = $_POST['price'];
$description = $_POST['description'];
move_uploaded_file($temp, "uploads/".$image);
$insert = "INSERT INTO product SET category_id='$category', name='$productname', image='$image', price='$price', description='$description'";
$db->query($insert);
header("location: add_product.php");
?>