 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 <style type="text/css">
 .talk-bubble {
  margin: 10px;
  margin-left: 120px;
  display: inline-block;
  position: relative;
  width: 200px;
  height:auto;
  background-color: #1E90FF;
}
.tri-right.border.right-in:before {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: auto;
  right: -16px;
  top: 8px;
  bottom: auto;
  border: 8px solid;
  border-color: #1E90FF transparent transparent #1E90FF;
}
.tri-right.right-in:after{
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  left: auto;
  right: -16px;
  top: 8px;
  bottom: auto;
  border: 8px solid;
  border-color: #1E90FF transparent transparent #1E90FF;
}
 </style>
<?php
$db=mysqli_connect("localhost","Neel","neel@123456","classroom");
function fetch_user_chat_history($from_user_name, $to_user_name, $db)
{
 $query = "SELECT * FROM chat_message WHERE from_user_name = '$from_user_name' AND to_user_name = '$to_user_name' ORDER BY timestamp DESC ";
 $result = mysqli_query($db,$query);
 $output = '<ul class="list-unstyled">';
 while($row=mysqli_fetch_assoc($result))
 {
   $user_name = '';
   if($row['from_user_name'] == $from_user_name)
   {
      $user_name = '<b class="text-success">You</b>';
     
   }
   $output .= '
  <li style="border-bottom:1px dotted #ccc">
   <p>'.$user_name.' - '.$row["chat_message"].'
    <div align="right">
     - <small><em>'.$row['timestamp'].'</em></small>
    </div>
   </p>
  </li>
  ';
 }
 $output .= '</ul>';
 return $output;
 
 }


function load_user_chat_history($from_user_name, $to_user_name, $db)
{
 $query1 = "SELECT * FROM chat_message WHERE from_user_name = '$to_user_name' AND to_user_name = '$from_user_name' ORDER BY timestamp DESC ";
 $result1 = mysqli_query($db,$query1);
 $output1 = '<ul>';
 while($row1=mysqli_fetch_assoc($result1))
 {

  $output1 .= '
  <li class="talk-bubble tri-right right-in" style="color:white;">
   <p style="margin-left:10px;font-size:20px">'.$row1["chat_message"].'
   </p>
  </li>
  ';
 }
 $output1 .= '</ul>';
 return $output1;
}
 function get_user_name($user_name, $db)
 {
     $query2="SELECT UserName FROM login_details WHERE UserName='$user_name' ";
     $result2=mysqli_query($db,$query2);
     while($row2=mysqli_fetch_assoc($result2))
     {
        return $row2['UserName'];
     }
 }


?>