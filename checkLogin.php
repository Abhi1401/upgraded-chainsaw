<?php
$title = "checkLogin";
include_once("dbconnect.php");

if(isset($_SESSION['email']))
{
    header("location:index.html");
}
else
{
    header("location:login.html");
}
?>
