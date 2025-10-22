<?php
$db = mysqli_connect("localhost", "root", "", "ecommerce");
$eid = $_GET['id'];
$select = "SELECT * FROM product WHERE id='$eid'";
$result = $db->query($select);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Add Product</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('inc/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('inc/topbar.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Product</h1>

                    <form action="update_product.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="id" value="<?php echo $row['id']; ?>">

    <!-- Category Dropdown -->
    <div class="form-group">
        <label>Category</label>
        <select name="category" class="form-control"  required>
            <option value="">-- Select Category --</option>
            <option value="Mobile" <?php if($row['category'] == 'Mobile') echo 'selected'; ?>>Mobile</option>
            <option value="Laptop" <?php if($row['category'] == 'Laptop') echo 'selected'; ?>>Laptop</option>
            <option value="Tablet" <?php if($row['category'] == 'Tablet') echo 'selected'; ?>>Tablet</option>
            <option value="Headphones" <?php if($row['category'] == 'Headphones') echo 'selected'; ?>>Headphones</option>
            <option value="Smartwatch" <?php if($row['category'] == 'Smartwatch') echo 'selected'; ?>>Smartwatch</option>
            <option value="Camera" <?php if($row['category'] == 'Camera') echo 'selected'; ?>>Camera</option>
            <option value="Television" <?php if($row['category'] == 'Television') echo 'selected'; ?>>Television</option>
            <option value="Gaming Console" <?php if($row['category'] == 'Gaming Console') echo 'selected'; ?>>Gaming Console</option>
            <option value="Accessories" <?php if($row['category'] == 'Accessories') echo 'selected'; ?>>Accessories</option>
            <option value="Home Appliances" <?php if($row['category'] == 'Home Appliances') echo 'selected'; ?>>Home Appliances</option>
            <option value="Speakers" <?php if($row['category'] == 'Speakers') echo 'selected'; ?>>Speakers</option>
        </select>
    </div>

    <!-- Product Name -->
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" name="pname" class="form-control" value="<?php echo $row['name']; ?>" required>
    </div>

    <!-- Image -->
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="pimage" class="form-control" value="<?php echo $row['image']; ?>" accept="image/*" >
        <?php if (!empty($row['image'])): ?>
            <br><label>Current Image:</label><br>
            <img src="uploads/<?php echo $row['image']; ?>" alt="Product Image" style="width: 100px; height: auto;">
        <?php endif; ?>
    </div>

    <!-- Price -->
    <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" class="form-control" pattern="\d+(\.\d{1,2})?" title="Enter a valid price" value="<?php echo $row['price']; ?>" required>
    </div>

    <!-- Description -->
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control" rows="5" required><?php echo $row['description']; ?></textarea>
    </div>

    <input type="submit" value="Update Product" class="btn btn-info">

</form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('inc/footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- JavaScript files -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
