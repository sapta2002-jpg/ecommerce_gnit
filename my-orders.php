<!DOCTYPE html>
<html>

<?php include("inc/head.php"); ?>

<body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--top-header-->
    <?php include("inc/header.php"); ?>
    <!--bottom-header-->
    <!--start-breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Checkout</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->

    <?php
    include("admin/database/db.php");

    $userID = $_SESSION['user_id'];

    $select = "SELECT * FROM orders_table WHERE user_id='$userID'";

    $result = $db->query($select);

    ?>

    <!-- Simple Table Section -->
    <div class="container" style="margin-top: 20px;">
        <div id="tableContainer">
            <table class="table table-bordered table-striped">
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
                            <td> <?php echo $row['order_status']; ?> </td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>




    </div>

    <!--start-footer-->
    <?php include("inc/footer.php"); ?>

</body>

</html>