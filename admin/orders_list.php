 <?php
    include("database/db.php");

    $select = "SELECT * FROM orders_table";

    $result = $db->query($select);

    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>SB Admin 2 - Blank</title>

     <!-- Custom fonts for this template-->
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">

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
                     <h1 class="h3 mb-4 text-gray-800">All Orders</h1>

                     <table class="table">
                         <thead>
                             <tr>
                                 <th>Sl No.</th>
                                 <th>Country</th>
                                 <th>State</th>
                                 <th>City</th>
                                 <th>Pincode</th>
                                 <th>Payment Status</th>
                                 <th>View Info</th>
                                 <th>Order Status</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                                $slNo = 1;
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                 <tr>
                                     <td> <?php echo $slNo++; ?> </td>
                                     <td> <?php echo $row['country']; ?> </td>
                                     <td> <?php echo $row['state']; ?> </td>
                                     <td> <?php echo $row['city']; ?> </td>
                                     <td> <?php echo $row['pincode']; ?> </td>
                                     <td> <?php echo $row['payment_status']; ?> </td>
                                     <td>
                                         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#productModal<?php echo $row['order_id']; ?>">
                                             View
                                         </button>

                                         <?php
                                            $orderID = $row['order_id'];
                                            $subOrdersQuery = "
                                                SELECT sub_orders_table.*, product.name as product_name FROM sub_orders_table 
                                                INNER JOIN product 
                                                ON sub_orders_table.product_id = product.id
                                                WHERE sub_orders_table.order_id='$orderID'
                                            ";
                                            $subOrdersResult = $db->query($subOrdersQuery);
                                            ?>

                                         <div id="productModal<?php echo $row['order_id']; ?>" class="modal fade" role="dialog">
                                             <div class="modal-dialog">

                                                 <!-- Modal content-->
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                         <h4 class="modal-title">Modal Header</h4>
                                                     </div>
                                                     <div class="modal-body">
                                                         <table class="table">
                                                             <thead>
                                                                 <tr>
                                                                     <th>Product</th>
                                                                     <th>Qty</th>
                                                                     <th>Price</th>
                                                                 </tr>
                                                             </thead>
                                                             <tbody>
                                                                 <?php
                                                                    while ($subOrder = $subOrdersResult->fetch_assoc()) {
                                                                    ?>
                                                                     <tr>
                                                                         <td><?php echo $subOrder['product_name']; ?></td>
                                                                         <td><?php echo $subOrder['qty']; ?></td>
                                                                         <td><?php echo $subOrder['price']; ?></td>
                                                                     </tr>
                                                                 <?php
                                                                    }
                                                                    ?>
                                                             </tbody>
                                                         </table>
                                                     </div>
                                                     <div class="modal-footer">
                                                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </td>
                                     <td>
                                         <form
                                             action="../actions/order-update.php"
                                             method="post"
                                             class="order_status_form">
                                             <input type="hidden" name="order_id" value="<?php echo $row['order_id']; ?>">
                                             <select name="order_status" id="order_status">
                                                 <option value="pending">Pending</option>
                                                 <option value="processing">Processing</option>
                                                 <option value="shipped">Shipped</option>
                                                 <option value="delivered">Delivered</option>
                                                 <option value="cancelled">Cancelled</option>
                                             </select>
                                         </form>
                                     </td>
                                 </tr>
                             <?php } ?>
                         </tbody>
                     </table>
                 </div>
                 <!-- /.container-fluid -->

             </div>
             <!-- End of Main Content -->

             <!-- Footer -->
             <?php include('inc/footer.php'); ?>

             <script>
                 $(".order_status_form").on("change", function() {
                     $(this).submit();
                 })
             </script>