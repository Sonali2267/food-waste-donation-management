<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project";

$link=mysqli_connect($servername,$username,$password,$dbname)
if(empty($link))
{
    echo "connection failed".mysqli_connect_error($link);
}
?>
