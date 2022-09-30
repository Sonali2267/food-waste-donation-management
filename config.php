<?php
error_reporting(0);

$servername="localhost";
$username="root";
$password="";
$dbname="foodwaste";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$con)
{
    die("connection-failed:".mysqli_connect_error());
}
else
{
    echo "connected successfully";
}
