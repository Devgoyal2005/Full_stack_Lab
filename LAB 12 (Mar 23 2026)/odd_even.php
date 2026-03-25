<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
            border: 1px solid #ccc;
            padding: 20px;
        }

        input {
            padding: 6px;
            margin: 5px;
        }
    </style>

</head>
<body>

<h2>Check Even or Odd</h2>

<form method="post">
    Enter a number:
    <input type="number" name="num" required><br>
    <input type="submit" name="check">
</form>

<?php
if (isset($_POST['check'])) {
    $num = $_POST['num'];

    if ($num % 2 == 0) {
        echo "<h3 style='color:green;'>$num is Even</h3>";
    } else {
        echo "<h3 style='color:red;'>$num is Odd</h3>";
    }
}
?>

</body>
</html>