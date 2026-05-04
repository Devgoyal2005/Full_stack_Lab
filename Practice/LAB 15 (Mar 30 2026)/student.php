<?php
session_start();

if(!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form>
    <h3>Welcome</h3>

    <p><?php echo 'Name: ' . $_SESSION['name']; ?></p>
    <p><?php echo 'Age: ' . $_SESSION['age']; ?></p>
    <p><?php echo 'Branch: ' . $_SESSION['branch']; ?></p>

    <button formaction="logout.php">Logout</button>
</form>

</body>
</html>