<?php
session_start();

// Clear session
session_unset();
session_destroy();

// Delete cookie
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600);
}

// Redirect back
header("Location: session_cookie_counter.php");
exit();
?>