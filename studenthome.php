
<?php
include('checkstudentsession.php');
$name=$_SESSION['username1'];
$division=$_SESSION['division1'];
?>
<html>
<head>
  <link type="text/css" rel="stylesheet" href="css/studenthome.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>SCLASS | Student</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">          
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">





<style type="text/css">
   #chatbtn {
  background-color: #0080ff;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  left: 28px;
  width: 280px;
  z-index: 10px;

}
#chatbox{
  position:fixed;
  height:400px;
  overflow:auto;
  width:282px;
  left:28px;
  bottom:24px;
  border:1px solid black;
  display: none;
  background-color: white;
}

  body{
  background-image:url('img/bg.jpg');
  overflow : hidden;
} 


</style>
<script> 
$(document).ready(function(){
    $("#chatbtn").click(function(){
        $("#chatbox").slideToggle("slow");
    });
    $("#cls").click(function(){
         $("#chatbox").fadeOut("slow");
    });
});
</script>

</head>
<body>
<section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>SCLASS</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
          <li>
          <form method="POST" action="<?php $_PHP_SELF ?>">
            <input type="submit" name="logout" class="genBtn" value="Log Out"/>
         </form>
         <li>                                                       
         </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>

  <div id="chatbtn">Chat
<img src="img/chaticon.png" height="20px" width="20px" style='float: right'></div>
<div id="chatbox">
  <div style='background-color:#0080ff;height: 40px; width:280px; color: white;position: fixed;'>
    <h5 style="margin-left: 10px">Active Users
    <img src="img/close.png"  id="cls" height="20px" width="30px" style="margin-bottom: auto;margin-top:auto;float: right;cursor:pointer">
  </h5>
  <div style="overflow-y:scroll;height:360px;">
    <div id='user_details'></div>
  </div>
  </div>
</div>
<div id="container" style="position:absolute;background-color:white"></div>


<div class ="MaterialDownload">
<div class ="MaterialDownloadHeader">
Material Download
<div class="MaterialContent">
<?php
   $connection=mysqli_connect('localhost','Neel','neel@123456','classroom');

   $query1 = "SELECT FilePath FROM materialdownload WHERE division='$division'";
   $result1 = mysqli_query($connection,$query1);
   while($row=mysqli_fetch_assoc($result1))
   {
     $filename=substr($row['FilePath'],8);
     echo "<a href='uploads/".$filename."' download style='position:relative;top:30px;left:15px;font-size:15px;padding:10px'>".$filename."</a></br>";
   }
?>
</div>
</div>

</div>

<div class="ScreenDisplay">
<div class="ScreenDisplayHeader">
   View ScreenPlay
</div>
<div class="ScreenDisplayContent">
<?php
   $connection=mysqli_connect('localhost','Neel','neel@123456','classroom');

   $query2 = "SELECT screensharinglink FROM materialdownload WHERE division='$division'";
   $result2 = mysqli_query($connection,$query2);
   while($row=mysqli_fetch_assoc($result2))
   {
     $screensharinglink = $row['screensharinglink'];
     echo "<a href='".$screensharinglink."' target='_blank' style='position:relative;top:30px;left:15px;font-size:15px;padding:10px'>".$screensharinglink."</a></br>";
   }
?>
</div>
</div>



<div class ="AssignmentUpload">
<div class ="AssignmentUploadHeader">
Assignment Upload
</div>
<div class="content">
           <form method='POST' action=" " enctype="multipart/form-data">
                Select a file to upload:
                <input type="file" name="userfile" class="form-control" /><br>
                <input type="submit" name="upload" value="upload" class="btn btn-success" />
            </form>
        </div>
</div>

<div id='AttendanceContainer'>
<form method="POST" action= "">
    <label for="dateofbirth">Select Date For Viewing Attendance</label>
    <input type="date" name="dateofbirth" id="dateofbirth">
    <input type="submit" value="View" name="viewAttendance" class="btn btn-success" id = "ViewAttendance">
  </form>
  <div>
     <?php
         if(isset($_POST['viewAttendance'])) {
        $date = $_POST['dateofbirth'];
         $connection = mysqli_connect('localhost','Neel','neel@123456','classroom');
         $query = "SELECT AttendanceDate FROM attendance WHERE StudentName='$name' AND AttendanceDate='$date'";
         $result = mysqli_query($connection,$query);
         $attendedLectures = mysqli_num_rows($result);
         $attendance = ($attendedLectures / 5) * 100;
         echo "<div style='height: 90px; width: 406px;'>";
         echo "<table style='width:406px;'>
           <tr>
             <th style='background-color: #4CAF50;color: white;padding: 5px 5.5px;
             text-align: left;
             border-bottom: 1px solid #ddd;font-size: 15px;'>Date</th>
             <th style='background-color: #4CAF50;color: white;padding: 5px 5.5px;
             text-align: left;
             border-bottom: 1px solid #ddd;font-size: 15px;'>Attendance %</th>
           </tr>
           <tr>
             <td>".$date."</td>
             <td>".$attendance."</td>
           <tr>
         </table>";
         echo "</div>";
         }
     ?>
  </div>
</div>


</body>







<script>
  $(document).ready(function(){
    fetch_user();
     setInterval(function(){
       update_last_activity();
      fetch_user();
 }, 5000);
    function fetch_user()
    {
       $.ajax({
         url:"fetch_user.php",
         method:"POST",
         success:function(data){
          $('#user_details').html(data);
          
         }
       })      
     }
     function update_last_activity()
     {
        $.ajax({
        url:"update_last_activity.php",
        success:function()
        {

        }
     })
 }
 var element_pos = 0; 
 function make_chat_dialog_box(to_user_id, to_user_name)
 {
        
       var iCnt = 0;
      var dynamic_div = $(document.createElement('div')).css({
                border: '1px solid #ccc', position: 'absolute', left: element_pos, 
                top: $('#container').height() + 20,
                width: '442px', height: '420px',  margin: '0'         
        
            });
            
            element_pos = element_pos + $('#container').width() + 20;
            $(dynamic_div).append('<div style="height:40px;width:442px;background-color:#0080ff"><p style="color:white;font-size:20px">You have chat with '+to_user_name+' <img src="img/close.png" id="cls" height="20px" width="30px"  style="margin-top:10px;float: right;cursor:pointer"></p></div>');
            $(dynamic_div).append('<div style="height:200px;width:420px;border:1px solid #ccc;overflow-y:scroll;margin:10px; background-color:#FFFFE0  " class="chat_history" data-tousername="'+to_user_name+'" id="chat_history_'+to_user_name+'"></div>');
            $(dynamic_div).append('<textarea style="width:420px;height:100px;margin-top:10px;margin:10px" name="chat_message_'+to_user_name+'" id="chat_message_'+to_user_name+'" class="form-control"></textarea>');
            $(dynamic_div).append('<button type="button" style="float:right;margin-right:15px"  name="send_chat" id="'+to_user_name+'"  class="send_chat btn btn-info">Send</button>');
            
            $(dynamic_div).appendTo('#container').draggable();

            iCnt = iCnt + 1;
             $(dynamic_div).attr("id","box");
             $(document).on('click','#cls',function(){

                 $("#box").remove();
                 
                
             });

            
          
 }
$(function() { $('#container').draggable(); });
 $(document).on('click', '.start_chat', function(){
  var to_user_id = $(this).data('touserid');
  var to_user_name = $(this).data('tousername');
  make_chat_dialog_box(to_user_id, to_user_name);
  $.ajax({
    url:"load_user_chat_history.php",
    method:"POST",
    data:{user_name: to_user_name},
    success:function(data)
    {
       $('#chat_history_'+to_user_name).html(data);
     }
  });
  setInterval(function(){
$.ajax({
    url:"load_user_chat_history.php",
    method:"POST",
    data:{user_name: to_user_name},
    success:function(data)
    {
       $('#chat_history_'+to_user_name).html(data);
    }

  });
},5000);
  });


$(document).on('click','.send_chat',function(){
   var to_user_name = $(this).attr('id');
   var chat_message = $('#chat_message_'+to_user_name).val();
   $.ajax({
      url:"insert_chat.php",
      method:"POST",
      data:{user_name: to_user_name, chat: chat_message},
      success:function(data)
      {
         $('#chat_message_'+to_user_name).val('');
         $('#chat_history_'+to_user_name).append(data);
      }
   });
});





});





</script>
<div class="right" style="background-image:url('img/profilebackground.jpg');background-repeat:no-repeat">
<i class="material-icons" style='color:white;font-size:250px;position:relative;top:10px;left:50px'>person</i>
   <?php
       $connection=mysqli_connect('localhost','Neel','neel@123456','classroom');
       $query="SELECT  * FROM student WHERE UserName='$name' ";
       $output1 ="<div style='padding-top:40px'>";
       $output1 .= "<ul style='font-size: 23px;color:white;list-style-type:none;'>";
       $output1 .= "<li style='margin:10px'>Name : ";
       $res=mysqli_query($connection,$query);
       while($row=mysqli_fetch_assoc($res))
       {
       $output1 .=  $row['UserName']."</li>";
       $output1 .= "<li style='line-height:55px;margin-left:10px'>ID : ";
       $output1 .= $row['EnrollmentId']."</li>";
       $output1 .= "<li style='line-height:55px;margin-left:10px'>Branch : ";
       $output1 .= $row['Branch']."</li>";
       $output1 .= "<li style='line-height:55px;margin-left:10px'>Email : ";
       $output1 .= $row['EmailId']."</li>";
       $output1 .= "<li style='line-height:55px;margin-left:10px'>College : ";
       $output1 .= $row['College']."</li>";
       }
       $output1 .= "</ul></div>";
       echo $output1;
   ?>
</div>

</html>  
    







<?php
if(isset($_POST['logout']))
{
     $sql="DELETE  FROM login_details WHERE username= '$name' ";
     $result=mysqli_query($db,$sql);
     unset($_SESSION['username1']);
     session_destroy();
          echo "<script>location.href='index.php'</script>";
}
?>