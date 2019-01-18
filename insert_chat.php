<?php
session_start();
include('connection.php');
if($_SESSION['is_type'] == 'teacher')
{
     $to_user_name=$_POST['user_name'];
     $from_user_name=$_SESSION['username'];
     $chat_message=$_POST['chat'];
     $status="1";
     $query="INSERT INTO chat_message(to_user_name,from_user_name,chat_message,status) VALUES('$to_user_name','$from_user_name','$chat_message','$status')";
     $result=mysqli_query($db,$query);
     if($result)
     {
     	echo fetch_user_chat_history($_SESSION['username'], $to_user_name, $db);
     }

}
if($_SESSION['is_type'] == 'student')
{
     $to_user_name=$_POST['user_name'];
     $from_user_name=$_SESSION['username1'];
     $chat_message=$_POST['chat'];
     $status="1";
     $query1="INSERT INTO chat_message(to_user_name,from_user_name,chat_message,status) VALUES('$to_user_name','$from_user_name','$chat_message','$status')";
     $result1=mysqli_query($db,$query1);
     if($result1)
     {
     	echo fetch_user_chat_history($_SESSION['username1'], $to_user_name, $db);
     }

}
?>