<?php
include('checkstudentsession.php');
$name=$_SESSION['username1'];
?>
<html>
<head>
  <link type="text/css" rel="stylesheet" href="css/teacherhome.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
  overflow:auto;
  width:282px;
  right:28px;
  bottom:24px;
  border:1px solid black;
  display: none;
  background-color: white;
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
   <nav> 
        <a href="#"class="link1">Welcome <?php echo $_SESSION['username1'] ?></a>.
        <div style="float: right;">
          <form method="POST" action="<?php $_PHP_SELF ?>">
            <input type="submit" value="Log Out" class="btn" name="logout"/>
          </form>
        </div>

  </nav>
  <h1>Welcome To classroom</h1>
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