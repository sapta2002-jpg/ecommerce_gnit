<?php
$db=mysqli_connect("localhost", "root", "", "ecommerce");
$id = $_GET['id'];
$category = $_POST['cname'];
$image = time().$_FILES['cimage']['name'];
$temp = $_FILES['cimage']['tmp_name'];
move_uploaded_file($temp, "uploads/".$image);
$insert = "INSERT INTO category SET name='$category', image='$image'";
$db->query($insert);
header("location: add_category.php");
?>