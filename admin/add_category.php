<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Add Category</title>

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
                    <h1 class="h3 mb-4 text-gray-800">Add Category</h1>

                    <form action="submit_category.php" method="POST" enctype="multipart/form-data">
                        <!-- Category Dropdown -->
    <div class="form-group">
        <label>Category</label>
        <select name="cname" class="form-control" required>
            <option value="">-- Select Category --</option>
            <option value="Mobile">Mobile</option>
            <option value="Laptop">Laptop</option>
            <option value="Tablet">Tablet</option>
            <option value="Headphones">Headphones</option>
            <option value="Smartwatch">Smartwatch</option>
            <option value="Camera">Camera</option>
            <option value="Television">Television</option>
            <option value="Gaming Console">Gaming Console</option>
            <option value="Accessories">Accessories</option>
            <option value="Home Appliances">Home Appliances</option>
            <option value="Speakers">Speakers</option>
        </select>
    </div>

                        <div class="form-group">
                            <label for="cimage">Image</label>
                            <input type="file" name="cimage" id="cimage" class="form-control" required>
                        </div>

                        <input type="submit" value="Add Category" class="btn btn-info">
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

</body>
</html>
