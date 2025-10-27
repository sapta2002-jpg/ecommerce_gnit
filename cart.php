<!DOCTYPE html>
<html>

<?php include("inc/head.php"); ?>

<body>
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

    $select = "SELECT cart.cart_id, cart.price, cart.qty, product.name as product_name
                FROM cart
                INNER JOIN product
                ON cart.product_id=product.id
                WHERE cart.user_id='$userID'
            ";

    $result = $db->query($select);

    // Calculate subtotal
    $subtotal = 0;
    $resultForSubtotal = $db->query($select);
    while ($row = $resultForSubtotal->fetch_assoc()) {
        $subtotal += $row['price'] * $row['qty'];
    }
    ?>

    <!-- Simple Table Section -->
    <div class="container" style="margin-top: 20px;">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td> <?php echo $row['product_name']; ?> </td>
                        <td>
                            <input
                                type="number"
                                class="form-control"
                                value="<?php echo $row['qty']; ?>"
                                min="1"
                                style="width: 80px; display: inline-block;" />
                        </td>
                        <td>$<?php echo $row['price']; ?></td>
                        <td>$<?php echo $row['price'] * $row['qty']; ?></td>
                        <td>
                            <button class="delete_btn">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" style="text-align: right; font-weight: bold;">Subtotal:</td>
                    <td colspan="2" style="font-weight: bold; text-align:center;">
                        $<?php echo $subtotal; ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <!--start-footer-->
    <?php include("inc/footer.php"); ?>

</body>