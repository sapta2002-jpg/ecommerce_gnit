<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
session_start();

// DB config
$host = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "ecommerce";

// Connect to DB
$conn = new mysqli($host, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$email = trim($_POST['email']);
$password = $_POST['password'];

// Validate inputs
if (!$email || !$password) {
    echo "<p style='color:red;'>Email and password are required.</p>";
    exit;
}

// Get user by email
$stmt = $conn->prepare("SELECT id, first_name, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $stmt->bind_result($userId, $firstName, $hashedPassword);
    $stmt->fetch();

    if (password_verify($password, $hashedPassword)) {
        // Success
        $_SESSION['user_id'] = $userId;
        $_SESSION['user_name'] = $firstName;

        header("Location: index.php");
        exit;
    } else {
        echo "<p style='color:red;'>Incorrect password.</p>";
    }
} else {
    echo "<p style='color:red;'>No user found with that email.</p>";
}

$stmt->close();
$conn->close();
?>
