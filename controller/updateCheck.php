<?php
session_start();
require_once("../model/database.php");

if (isset($_POST['submit'])) {

    $carmodel = $_POST['carmodel'];
    $type = $_POST['type'];
    $sit = $_POST['sit'];
    $rent = $_POST['rent'];

    $res = updateCarDetails($carmodel, $type, $sit, $rent);
}
