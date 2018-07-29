<?php

include_once("dbconnect.php");

if(isset($_SESSION['email']))
{
    header("location:select-design.php");
}
else
{
    header("location:login.html");
}

?>