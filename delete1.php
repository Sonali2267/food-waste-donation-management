<?php
include('link.php');
$id = $_GET['id'];
$query="DELETE FROM donate_name WHERE id='$id'";
$data=mysqli_query($link,$query);
header("location:donateevent.php");
?>