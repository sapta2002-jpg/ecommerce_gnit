<!DOCTYPE html>
<html>

<head>
    <title>Free Style A Ecommerce Category Flat Bootstarp Resposive Website Template | Account :: w3layouts</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start menu -->
    <script src="js/simpleCart.min.js"> </script>
    <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/memenu.js"></script>
    <script>
        $(document).ready(function() {
            $(".memenu").memenu();
        });
    </script>
</head>

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
                    <li class="active">Account</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->

    <!--start-account-->
    <div class="account">
        <div class="container">
            <div class="account-bottom">
                <div class="row"> <!-- Ensure rows for Bootstrap columns -->

                    <!-- New Customers -->
                    <div class="col-md-6 account-left">
                        <form action="register.php" method="post">
                            <div class="account-top heading">
                                <h3>NEW CUSTOMERS</h3>
                            </div>
                            <div class="address">
                                <span>First Name</span>
                                <input type="text" name="first_name" required>
                            </div>
                            <div class="address">
                                <span>Last Name</span>
                                <input type="text" name="last_name" required>
                            </div>
                            <div class="address">
                                <span>Email Address</span>
                                <input type="email" name="email" required>
                            </div>
                            <div class="address">
                                <span>Password</span>
                                <input type="password" name="password" required>
                            </div>
                            <div class="address">
                                <span>Reenter Password</span>
                                <input type="password" name="re_password" required>
                            </div>
                            <div class="address new">
                                <input type="submit" value="Register">
                            </div>
                        </form>
                    </div>

                    <!-- Registered Customers -->
                    <div class="col-md-6 account-left">
                        <form action="login.php" method="post">
                            <div class="account-top heading">
                                <h3>REGISTERED CUSTOMERS</h3>
                            </div>
                            <div class="address">
                                <span>Email Address</span>
                                <input type="email" name="email" required>
                            </div>
                            <div class="address">
                                <span>Password</span>
                                <input type="password" name="password" required>
                            </div>
                            <div class="address">
                                <a class="forgot" href="#">Forgot Your Password?</a>
                                <input type="submit" value="Login">
                            </div>
                        </form>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.account-bottom -->
        </div> <!-- /.container -->
    </div> <!-- /.account -->

    <!--end-account-->
    <?php include("inc/footer.php"); ?>

    <!--start-footer-->
    <div class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="col-md-3 footer-left">
                    <h3>ABOUT US</h3>
                    <ul>
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="#">Our Sites</a></li>
                        <li><a href="#">In The News</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Carrers</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-left">
                    <h3>YOUR ACCOUNT</h3>
                    <ul>
                        <li><a href="account.php">Your Account</a></li>
                        <li><a href="#">Personal Information</a></li>
                        <li><a href="contact.php">Addresses</a></li>
                        <li><a href="#">Discount</a></li>
                        <li><a href="#">Track your order</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-left">
                    <h3>CUSTOMER SERVICES</h3>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Cancellation</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Bulk Orders</a></li>
                        <li><a href="#">Buying Guides</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-left">
                    <h3>CATEGORIES</h3>
                    <ul>
                        <li><a href="#">Sports Shoes</a></li>
                        <li><a href="#">Casual Shoes</a></li>
                        <li><a href="#">Formal Shoes</a></li>
                        <li><a href="#">Party Shoes</a></li>
                        <li><a href="#">Ethnic</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--end-footer-->
    <!--end-footer-text-->
    <?php include("inc/footer.php"); ?>