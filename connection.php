 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
 <style type="text/css">
 .talk-bubble {
  margin: 10px;
  display: inline-block;
  position: relative;
  width: 200px;
  height:auto;
}

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
 $query1 = "SELECT * FROM chat_message WHERE from_user_name = '$to_user_name' OR from_user_name = '$from_user_name' ORDER BY timestamp ASC ";
 $result1 = mysqli_query($db,$query1);
 $query2 = "SELECT * FROM chat_message WHERE from_user_name = '$from_user_name' AND to_user_name = '$to_user_name' ORDER BY timestamp DESC ";
 $result2 = mysqli_query($db,$query2);
 $output1 = ' ';
 
 while($row1=mysqli_fetch_assoc($result1))
 {
  

  $tousr = $row1['from_user_name'];
  
  if($tousr === $from_user_name)
  {
    //display in right
    $output1 .= '
  <li class="talk-bubble tri-right right-in" style="color:white;float:right;background-color:green">
   <p style="margin-left:10px;font-size:20px">'.$row1["chat_message"].'
   </p>
  </li>
  ';
  }
  else
  {
    //display in left
    $output1 .= '
  <li class="talk-bubble tri-right right-in" style="color:white;float:left;background-color:blue">
   <p style="margin-left:10px;font-size:20px">'.$row1["chat_message"].'
   </p>
  </li>';
  }
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