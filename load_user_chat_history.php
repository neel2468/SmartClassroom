<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<?php
session_start();
include('connection.php');
if($_SESSION['is_type'] == 'teacher')
{
     $to_user_name=$_POST['user_name'];
     $from_user_name=$_SESSION['username'];
     echo load_user_chat_history($_SESSION['username'], $to_user_name, $db);
    

}
if($_SESSION['is_type'] == 'student')
{
     $to_user_name=$_POST['user_name'];
     $from_user_id=$_SESSION['user_id1'];
     echo load_user_chat_history($_SESSION['username1'], $to_user_name, $db);

}


?>