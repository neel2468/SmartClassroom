<?php
include('connection.php');
session_start();
$id=$_SESSION['login_details_id']
$query="UPDATE login_details SET last_activity = now() WHERE login_details_id='$id'  ";
$result=mysqli_query($db,$query);
?>