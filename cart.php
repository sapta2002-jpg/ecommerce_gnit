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
        <div id="tableContainer">
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
                                <form id="form<?php echo $row['cart_id']; ?>">
                                    <input type="hidden" name="cart_id" value="<?php echo $row['cart_id']; ?>"
                                        id="cart_id<?php echo $row['cart_id']; ?>" />
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="qty"
                                        value="<?php echo $row['qty']; ?>"
                                        min="1"
                                        style="width: 80px; display: inline-block;"
                                        id="qty<?php echo $row['cart_id']; ?>"
                                        oninput="cartUpdate(<?php echo $row['cart_id']; ?>)" />
                                </form>
                            </td>
                            <td>$<?php echo $row['price']; ?></td>
                            <td>$<?php echo $row['price'] * $row['qty']; ?></td>
                            <td>
                                <button class="delete_btn" onclick="deleteCart(<?php echo $row['cart_id']; ?>)">
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

        <?php
        if ($result->num_rows > 0) {
        ?>
            <div class="text-center" style="margin-top: 30px; margin-bottom: 30px;">
                <a href="checkout.php" class="btn btn-primary btn-lg" style="padding: 12px 40px; font-size: 18px;">
                    Place Order
                </a>
            </div>
        <?php
        } else {
        ?>
            <div class="text-center" style="margin-top: 30px; margin-bottom: 30px;">
                <a href="./" class="btn btn-primary btn-lg" style="padding: 12px 40px; font-size: 18px;">
                    Continue Shopping
                </a>
            </div>
        <?php
        }
        ?>

    </div>

    <div class="loader hidden">
        <div class="loader-spinner"></div>
    </div>

    <script>
        function cartUpdate(id) {
            const formTag = `form${id}`;

            $cart_id = $("#cart_id" + id).val();
            $qty = $("#qty" + id).val();

            $(".loader").removeClass("hidden");

            $.ajax({
                url: 'http://localhost/ecommerce_gnit/actions/cart-update.php',
                type: 'POST',
                data: {
                    cart_id: $cart_id,
                    qty: $qty
                },
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    if (response.data) {
                        generateCartTable();
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        function generateCartTable() {
            $.ajax({
                url: 'http://localhost/ecommerce_gnit/actions/generate-cart-table.php',
                type: 'GET',
                dataType: "html",
                success: function(response) {
                    // console.log(response);
                    $("#tableContainer").html(response);
                    $(".loader").addClass("hidden");
                },
                error: function() {
                    console.log("Error in generating cart table");
                }
            })
        }

        function deleteCart(id) {
            $.ajax({
                url: "http://localhost/ecommerce_gnit/actions/cart-delete.php",
                type: "POST",
                data: {
                    cart_id: id
                },
                dataType: "json",
                success: function(response) {
                    if (response.status === "success") {
                        generateCartTable();
                    } else {
                        alert("Something went wrong");
                        console.log(response);
                    }
                },
                error: function(error) {
                    alert("Something went wrong");
                    console.log(error);
                }
            })
        }
    </script>

    <!--start-footer-->
    <?php include("inc/footer.php"); ?>

</body>

</html>