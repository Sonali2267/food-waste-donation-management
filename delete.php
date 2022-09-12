<?php
include('link.php');
$id = $_GET['id'];
$query="DELETE FROM user_detail WHERE id='$id'";
$data=mysqli_query($link,$query);
header("location:event.php");
?>