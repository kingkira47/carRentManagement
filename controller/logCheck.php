<?php
session_start();
require_once("../model/database.php");
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username || $password)) {
        $_SESSION['error'] = "Please Fill Up the Form First";
        header('location:../view/adminLogin.php');
    } else {
        $status = auth($username, $password);
        if (mysqli_num_rows($status) == 1) {
            header('location:../view/homeAdmin.php');
        } else {
            $_SESSION['error'] = "Please Enter Valid Username and Password";
            header('location:../view/adminLogin.php');
        }
    }
}
