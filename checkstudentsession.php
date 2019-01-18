<?php
include('connection.php');
session_start();
if(!isset($_SESSION['username1']) || $_SESSION['username1']== '')
{
   header("Location: index.php");	
}
?>