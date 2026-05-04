<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post" action="auth.php">
    <h3>Register</h3>

    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>

    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age" required><br>

    <label for="branch">Branch:</label><br>
    <select id="branch" name="branch">
        <option value="CSE">CSE</option>
        <option value="IT">IT</option>
        <option value="ECE">ECE</option>
        <option value="ME">ME</option>
    </select><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br>

    <button type="submit" name="register">Register</button>
</form>

</body>
</html>