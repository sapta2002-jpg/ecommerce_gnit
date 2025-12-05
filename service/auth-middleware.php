<?php

session_start();

require("../config.php");

if (!isset($_SESSION['user_id'])) {
?>
    <script>
        window.location.href = "<?php echo $base_url; ?>";
    </script>
<?php
    exit;
}
?>