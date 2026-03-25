<!DOCTYPE html>
<html>
<head>
    <title>PHP Functions Demo</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
        }
        input {
            padding: 6px;
            margin: 5px;
        }
    </style>

</head>
<body>

<h2>User Form</h2>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="text" name="password"><br><br>
    Email: <input type="text" name="email"><br><br>
    Age: <input type="text" name="age"><br><br>

    <input type="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {

    // Check if data received
    if (isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['age'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        echo "<h3>Data Types Before Conversion</h3>";
        echo "Username: " . gettype($username) . "<br>";
        echo "Password: " . gettype($password) . "<br>";
        echo "Email: " . gettype($email) . "<br>";
        echo "Age: " . gettype($age) . "<br><br>";

        // Convert age to integer
        settype($age, "integer");

        echo "<h3>After Conversion</h3>";
        echo "Age: $age (" . gettype($age) . ")<br><br>";

        // Check age condition
        if ($age > 18) {

            echo "<h3 style='color:green;'>Access Granted</h3>";
            echo "Username: $username (" . gettype($username) . ")<br>";
            echo "Password: $password (" . gettype($password) . ")<br>";
            echo "Email: $email (" . gettype($email) . ")<br>";
            echo "Age: $age (" . gettype($age) . ")<br>";

        } else {

            unset($username, $password, $email, $age);

            echo "<h3 style='color:red;'>All variables are cleared (Age < 18)</h3>";
        }
    }
}
?>

</body>
</html>