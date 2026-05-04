<!DOCTYPE html>
<html>
    <body>
        <form method="post">
            Enter Database name:<br>
            <input type="text" name="db" required><br><br>
            <input type = "submit" value="connect db" name="connect">
        </form>
        <?php
            if(isset($_POST['db']))
                {
                    $db = $_POST['db'];
                    $conn = new mysqli("localhost", "root", "", $db);
                    if($conn->connect_error)
                        {
                            echo "<h4>Connection failed</h4>";
                            exit();
                        }
                    else
                        {
                            echo "<h4>Connection Successfull</h4>";
                        }
                    
                    // INSERT

                    if(isset($_POST['insert']))
                        {
                            $conn->query("INSERT into students(name, email)
                            values('{$_POST['name']}','{$_POST['email']}')");
                        }
                    
                    // Delete

                    if(isset($_POST['delete']))
                        {
                            $conn->query("DELETE from students where id={$_POST['id']}");
                        }

                    // update

                    if(isset($_POST['update']))
                        {
                            $conn->query("UPDATE students
                            set name='{$_POST['name']}', email= '{$_POST['email']}'
                            WHERE id = {$_POST['id']}");
                        }

                    if(isset($_POST['display']))
                        {
                            echo"<table border=1>
                            <tr> <th>ID</th> <th>NAME</th> <th>EMAIL</th> </tr>";

                            $res = $conn->query("SELECT * from students");
                            while($row = $res->fetch_assoc())
                                {
                                    echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['email']}</td>
                                    </tr>";
                                }

                            echo"</table>";
                        }
                }
        ?>

        <h5>For:<br> 1. Insertion: Enter all fields<br>2. Updation: Enter id field, and the field that is meant to be updated<br>3. Deletion: Enter id field</h5>
        <form method="POST">
            <input type="hidden" name="db" value="<?php echo $db; ?>">
            Enter Name:<br>
            <input type="text" name="name"><br><br>
            Enter Email:<br>
            <input type="text" name="email"><br><br>
            Enter ID:<br>
            <input type="text" name="id"><br><br>
            <input type="submit" value="insertion" name="insert">
            <input type="submit" value="View" name="display">
            <input type="submit" value="deletion" name="delete">
            <input type="submit" value="updation" name="update">
        </form>
    </body>
</html>