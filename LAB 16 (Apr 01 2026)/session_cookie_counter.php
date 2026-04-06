<?php
if (isset($_POST['logout'])) {
    header("Location: logout.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: pink;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        h2, h3 {
            margin-top: 30px;
        }

        form {
            margin-top: 30px;
        }

        input[type="text"] {
            padding: 5px;
        }

        input[type="submit"] {
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<?php
session_start();

// Track visits
if (isset($_SESSION['visits'])) {
    $_SESSION['visits']++;
} else {
    $_SESSION['visits'] = 1;
}

// Handle name submission
if (isset($_POST['name'])) {
    $_name = $_POST['name'];
    setcookie('username', $_name, time() + 3600);
    header("Location: session_cookie_counter.php");
    exit();
}
?>

<h2>Hello, Welcome to the Session and Cookie Counter</h2>

<?php if (isset($_COOKIE['username'])): ?>
    
    <h2>Welcome back <?php echo $_COOKIE['username']; ?></h2>

<?php else: ?>

    <form method="post">
        <label for="name">Enter your name: </label>
        <input type="text" name="name">
        <input type="submit" name="submit">
    </form>

<?php endif; ?>

<h1>Number of visits: <?php echo $_SESSION['visits']; ?></h1>

<form method="post">
    <input type="submit" name="logout" value="Logout">
</form>

</body>
</html>