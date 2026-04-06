<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            text-align: center;
            background-color: lightyellow;
            margin-top: 50px;
        }
        input {
            padding: 6px;
            margin: 5px;
        }
        input[type="submit"] {
            background-color: lightgreen;
            cursor: pointer;
        }
        form{
            background-color: whitesmoke;
            border: 2px solid black;
            width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
<h2 style="text-align: center;">User Form</h2>
<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="text" name="password"><br><br>
    Email: <input type="text" name="email"><br><br>
    Age: <input type="text" name="age"><br><br>
    <input type="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
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
        settype($age, "integer");
        echo "<h3>After Conversion</h3>";
        echo "Age: " . gettype($age) . "<br><br>";
        if ($age > 18) {
            echo "<h3 style='color:green;'>Age is greater than 18</h3>";
            echo "Username: $username<br>";
            echo "Password: $password<br>";
            echo "Email: $email<br>";
            echo "Age: $age<br>";
        } 
        else {
            echo "<h3 style='color:red;'>Age is not greater than 18</h3>";
        }
        unset($username, $password, $email, $age);
        echo "<h3 style='color:red;'>All variables are cleared</h3>";
    }
}
?>
</body>
</html>