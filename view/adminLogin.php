<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="post" action="../controller/logCheck.php">
        User Name:<input type="text" name="username"><br>
        Password:<input type="password" name="password"><br>
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
        ?>
        <br>
        <button name="login">Login</button>

    </form>

</body>

</html>