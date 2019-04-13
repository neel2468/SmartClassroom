<?php 
include('checkteachersession.php');
$name=$_SESSION['username'];
$sb=$_SESSION['subject'];
$dv=$_SESSION['division'];
?>
<html>
<head>
  <link type="text/css" rel="stylesheet" href="css/teacherhome.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>SCLASS | Teacher</title>

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
  right: 28px;
  width: 280px;
  z-index: 10px;

}
#chatbox{
  position:fixed;
  height:400px;
  width:282px;
  right:28px;
  bottom:24px;
  border:1px solid black;
  display: none;
  z-index: 2000;
  background-color: white;
}

body{
  background-image:url('img/bg.jpg')
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
            <input type="submit" name="gen" class="genBtn" value="Generate OTP"/>
            <input type="submit" name="clr" class="clearBtn" value="Clear"/>
            <input type="submit" name="logout" class="genBtn" value="Log Out"/>
         </form>
         <li>                                     
         </ul>             
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>





<div id="chatbtn">Chat
<img src="img/chaticon.png" height="20px" width="20px" style='float: right'>
</div>
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
<div id="container" style="position:absolute;z-index:1000"></div>








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
                width: '442px', height: '420px',  margin: '0' , background: 'white'
                   
        
            });
            
            element_pos = element_pos + $('#container').width() + 20;
            $(dynamic_div).append('<div style="height:40px;width:442px;background-color:#0080ff"><p style="color:white;font-size:20px">You have chat with '+to_user_name+' <img src="img/close.png" id="cls" height="20px" width="30px"  style="margin-top:10px;float: right;cursor:pointer"></p></div>');
            $(dynamic_div).append('<div style="height:200px;width:420px;border:1px solid #ccc;overflow-y:scroll;margin:10px;background-color:#FFFFE0" class="chat_history" data-tousername="'+to_user_name+'" id="chat_history_'+to_user_name+'"></div>');
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
       $query="SELECT  * FROM teacher WHERE UserName='$name' ";
       $output1 ="<div style='padding-top:40px'>";
       $output1 .= "<ul style='font-size: 23px;color:white;list-style-type:none;'>";
       $output1 .= "<li style='margin:10px'>Name : ";
       $res=mysqli_query($connection,$query);
       while($row=mysqli_fetch_assoc($res))
       {
       $output1 .=  $row['UserName']."</li>";
       $output1 .= "<li style='line-height:55px;margin-left:10px'>ID : ";
       $output1 .= $row['TeacherId']."</li>";
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


<div class='upload'>
        <div class='heading'>
              Material Upload
        </div>
        <div class="content">
           <form method='POST' action=" " enctype="multipart/form-data">
                Select a file to upload:
                <input type="file" name="userfile" class="form-control" /><br>
                <input type="submit" name="upload" value="upload" class="btn btn-danger" />
            </form>
        </div>
</div>

<div class='screenSharing'>
        <div class='heading'>
              Screen Sharing
        </div>
        <div class="content">
           <form method='POST' action=" ">
                <input type="text" name="screensharinglink" class="form-control screenlink" />
                <input type="submit" name="send" value="send" class="btn btn-primary uploadBtn" />
            </form>
        </div>
</div>

<div id='AttendanceContainer'>
    <div id='TableWrapper'>
        <table>
          <tr>
                  <th>Enrollment No</th>
                  <th>Student Name</th>
                  <th>Time</th>
                  <th>Date</th>

          </tr>
          <tr>
              
                    <?php
                       $temp[0][0] = "";
                       $tempCount = 0;
                      if($_SESSION['is_type'] == 'teacher')
                      {
                        $output  = ' ';
                        $subquery1="SELECT * FROM login_details WHERE is_type='student'";
                        $subresult1=mysqli_query($db,$subquery1);
                        while($subrow1=mysqli_fetch_assoc($subresult1))
                        {
                          $username = $subrow1['UserName'];
                          $subquery2="SELECT EnrollmentId FROM student WHERE UserName ='$username'";
                          $subresult2=mysqli_query($db,$subquery2);
                          while($subrow2=mysqli_fetch_assoc($subresult2)){
                          $output .= '
                            <tr>
                            <td>'.$subrow2['EnrollmentId'].'</td>
                            <td>'.$subrow1['UserName'].'</td>
                            <td>'.$subrow1['Login_Time'].'</td>
                            <td>'.$subrow1['Login_Date'].'</td>
                            
                            </tr>
                            ';
                            $temp[$tempCount][0] = $subrow1['Login_Date'];
                            $temp[$tempCount][1] = $subrow1['Login_Time'];
                            $temp[$tempCount][2] = $subrow1['UserName'];
                            $temp[$tempCount][3] = $subrow2['EnrollmentId'];
                          }
                          $tempCount += 1;
                        }
                    
                    echo $output;
                    
                    $data1 = " ";$data2 = " ";$data3 =" ";$data4 =" ";
                    if(isset($_POST['save'])) {
                    //echo "<script>alert('".$tempCount."');</script>";
                    for($i = 0; $i < $tempCount; $i++) {
                      for($j = 0; $j <= 3; $j++) {
                         $data1 = $temp[$i][0];
                         $data2 = $temp[$i][1];
                         $data3 = $temp[$i][2];
                         $data4 = $temp[$i][3];
                        }
                        $query = "INSERT INTO  attendance(AttendanceDate, AttendanceTime, StudentName, StudentId, AttendanceIsDone,subjectName,division)
                         VALUES('$data1','$data2','$data3','$data4','1','$sb','$dv')";
                         $result = mysqli_query($db,$query);
                         //echo $query45;

                    }
                  }
                      }
                     ?>
        </table>
    </div>
    <form method='POST' action = ''>
    <input type="submit" name="save" value="Save" class="btn btn-danger" style = 'position:absolute;bottom:5px;right:5px' />
    </form>
</div>



</body>
  

</html>



<?php
$connection=mysqli_connect('localhost','Neel','neel@123456','classroom');
if(isset($_POST['logout']))
{
     
     $sql="DELETE  FROM login_details WHERE UserName='$name' ";
     $result=mysqli_query($db,$sql);
     unset($_SESSION['username']);
     session_destroy();
     echo "<script>location.href='index.php'</script>";
}
if(isset($_POST['gen']))
  {

     $string='0123456789';
     $pass=str_shuffle($string);
    $sql="UPDATE teacher SET OTP='$pass' WHERE UserName='$name' " ;
    $sql1="select OTP from teacher where UserName='$name' ";
    $result=mysqli_query($connection,$sql);
  $result1=mysqli_query($connection,$sql1);
  if (mysqli_num_rows($result1) > 0)
   {
    // output data of each row
    while($row = mysqli_fetch_assoc($result1)) {
      echo "<div id='mydiv1'><output>OTP is:</br>".$row['OTP']."</output>";
  
    }

      }
}

if(isset($_POST['upload']))
{
	$file_name=$_FILES['userfile']['name'];
	$file_size=$_FILES['userfile']['size'];
	$file_tmp=$_FILES['userfile']['tmp_name'];
	$upload_dir = "uploads/";
	$uploadpath = $upload_dir.basename($file_name);
	move_uploaded_file($file_tmp,$uploadpath);
	echo "<script>alert('file uploaded successfully')</script>";
  $query = "INSERT INTO materialdownload(UserName,FilePath,division,subjectName,screensharinglink) 
  VALUES('$name', '$uploadpath','$dv','$sb','null')";
  $result = mysqli_query($connection, $query);
}


if(isset($_POST['send']))
{
    $link = $_POST['screensharinglink'];
    $query = "UPDATE materialdownload SET screensharinglink='$link' WHERE UserName = '$name' ";
    $result = mysqli_query($connection,$query);
}
?>