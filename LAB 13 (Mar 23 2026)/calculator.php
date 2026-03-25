<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>

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

<h2>Simple Calculator</h2>

<form method="post">
    Number 1: <input type="number" name="n1"><br><br>
    Number 2: <input type="number" name="n2"><br><br>

    <input type="submit" name="calculate">
</form>

<?php
if (isset($_POST['calculate'])) {

    if (empty($_POST['n1'])) 
    {
        echo "<b style='color:red;'>Please enter the first number</b><br>";
    }
    else if (empty($_POST['n2'])) 
    {
        echo "<b style='color:red;'>Please enter the second number</b><br>";
    } 
    else 
    {

        $a = $_POST['n1'];
        $b = $_POST['n2'];

        echo "<b>Addition: </b><span style='color:green;'>" . ($a + $b) . "</span><br>";
        echo "<b>Subtraction: </b><span style='color:blue;'>" . ($a - $b) . "</span><br>";
        echo "<b>Multiplication: </b><span style='color:purple;'>" . ($a * $b) . "</span><br>";

        if ($b != 0) {
            echo "<b>Division: </b><span style='color:orange;'>" . ($a / $b) . "</span><br>";
        } else {
            echo "<b style='color:red;'>Division: Cannot divide by zero</b><br>";
        }
    }
}
?>

</body>
</html>