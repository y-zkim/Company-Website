<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers:*");
header("content-type:application/json");

ob_start(); // Turn on output buffering
if(!isset($_SESSION))
{
session_start();
}

$timezone = date_default_timezone_set("Europe/Paris");
$con = mysqli_connect("localhost","root","","de_test");
if(mysqli_connect_errno())
{
    echo "Failed to connect". mysqli_connect_errno();
}
?>