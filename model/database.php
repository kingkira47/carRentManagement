<?php

function getConn()
{
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "webtechproject";
    $conn = new mysqli($serverName, $userName, $password, $dbName);
    return $conn;
}

function showCarDetails()
{
    $conn = getConn();
    $sql = "select * from cartable";
    $res = mysqli_query($conn, $sql);
    return $res;
}

function auth($username, $password)
{
    $conn = getConn();
    $sql = "select * from admintable where Username= '$username' and Password='$password' ";
    $status = mysqli_query($conn, $sql);
    return $status;
}

/*function showAdminDetails()
{
    $conn = getConn();
    $sql = "select * from admintable";
    $res = mysqli_query($conn, $sql);
    return $res;
}*/

function updateCarDetails($carmodel, $type, $sit, $rent)
{
    $conn = getConn();
    $sql = "insert into cartable (Car Model, Type of Vehicle, Sit No., Rental Rate (per day)) VALUES ('$carmodel', '$type', '$sit', '$rent')";
    $status = mysqli_query($conn, $sql);
    return $status;
}
