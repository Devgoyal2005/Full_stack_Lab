<?php session_start();
    if(isset($_SESSION['visit']))
        {
            $_SESSION['visit']+=1;
        }
        else
            {
                $_SESSION['visit']=1;
            }
?>
<!DOCTYPE html>
<html>
    <body>
        <h2> Number of visits: <?php echo $_SESSION['visit'];?></h2>
        <form method="post">
            Enter Username:<br>
            <input type="text" name="un" required>
            <input type="submit" value="submit" name="enter">
        </form>

        <?php
        if(isset($_POST['enter']))
            {
                setcookie('username', $_POST['un'], time()+3600);
                //$_SESSION['visit']+=1;
                header("location: index.php");
            }
        
        ?>

        <form method="post">
            <input type="submit" name="logout" value="Logout">
        </form>
        <?php
            if (isset($_POST['logout'])) {
            header("Location: logout.php");
            exit();
            }
        ?>
    </body>
</html>