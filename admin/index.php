<?php
session_start();
if (isset($_SESSION['admin_logged_in'])) {

    // Redirect into dashboard page (In our case blank.php)
    header("location: blank.php");
    exit;
} else {
    header("location: admin-login.php");
    exit;
}
