<?php
include('login.php');
if ((isset($_SESSION['username']) && $_SESSION['username'] != ''))
	{
		header('Location: teacherhome.php');

	}
if ((isset($_SESSION['username1']) && $_SESSION['username1'] != '' ))
	{
		header('Location: studenthome.php');

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/home.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<style>
	   body{
	   margin: 0px;
	  background-image: url('img/bg.png');
		overflow: hidden;
    }
   </style>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
  <body>
  	 	 <nav>
  	 	 	   <img src="img/icon.jpg" height="30" width="30" style="float:left"/>
			     <a class="link" href="#">Home</a>
			     <a class="link" href="#">About Us</a>
			     <a class="link" href="#">Contact</a>
					 <div class="dropdown" style="display:inline">
					      <a class="link1" href="#" style="left: 900px;position: relative;">Register <i class="fa fa-caret-down"></i></a>
							 	<div  class='dropdown-content'>
								<button id='myBtn11'>Teacher</button></br>
								<button id='myBtn12'>Student</button>
								</div>
          </div>
					<div class="dropdown1" style="display:inline">
							 <a class="link1" href="#" style="left: 900px; position:relative;">Log In <i class="fa fa-caret-down"></i></a>
							 <div  class='dropdown-content1'>
							 <button id='myBtn21'>Student</button></br>
							 <button id='myBtn22'>Teacher</button>
							 </div>
				 </div>
			</nav>

        <div id="myModal1" class="modal1">
        <div class="modal-content1">
            <div class="container1">
							<form method="POST" action="">
	 <span class="close1">&times;</span>
	 <label>
	 <input type="text" required autosave="off" autocomplete="off" name="nm" style="margin-top:10px" />
	 <div class="label-text">Name</div>
	 </label>
	 <label>
		 <input type="text" required autosave="off" autocomplete="off" name="bn"/>
		 <div class="label-text">Branch</div>
	 </label>
	 <label>
	 <input type="text" required autosave="off" autocomplete="off" name="em" />
	 <div class="label-text">email id</div>
	 </label>
	 <label>
	 <input type="text" required autosave="off" autocomplete="off" name="id" />
	 <div class="label-text">Teacher ID</div>
	 </label>

	 <label>
	 <input type="password" required  name="pwd"/>
	 <div class="label-text">Password</div>
	 </label>
		 <label>
		 <input type="text" required autosave="off" autocomplete="off" name="cl"/>
		 <div class="label-text">College</div>
	 </label>

	 <input type="submit" class="btn" value="Register" name="tregister" />
	 </form>

   </div>
 </div>
</div>



<div id="myModal2" class="modal2">
 <div class="modal-content2">
   <div class="container2">
		 <form method="POST" action="">
 		<span class="close2">&times;</span>
 		<label>
 		<input type="text" required autosave="off" autocomplete="off" name="nm1" style="padding-top:10px"/>
 		<div class="label-text">Name</div>
 		</label>
		<label>
 		<input type="text" required autosave="off" autocomplete="off" name="id1" />
 		<div class="label-text">Enrollment ID</div>
 		</label>
		<label>
 		<input type="text" required autosave="off" autocomplete="off" name="em1" />
 		<div class="label-text">Email</div>
 		</label>
 		<label>
 			<input type="text" required autosave="off" autocomplete="off" name="sm"/>
 			<div class="label-text">Sem</div>
 		</label>
 			<label>
 			<input type="text" required autosave="off" autocomplete="off" name="bn1"/>
 			<div class="label-text">Branch</div>
 		</label>
 		<label>
 			<input type="text" required autosave="off" autocomplete="off" name="dv"/>
 			<div class="label-text">Division</div>
 		</label>
     <label>
 			<input type="text" required autosave="off" autocomplete="off" name="cl1"/>
 			<div class="label-text">College</div>
 		</label>
          <input type="submit" class="btn" value="Register" name="sregister" />
 		</form>
   </div>
 </div>
</div>


<div id="myModal3" class="modal3">
 <div class="modal-content3">
   <div class="container3">
		<form method="POST" action=" ">
		<span class="close3">&times;</span>
		<label>
		<input type="text" required autocomplete="off" autosave="off" name="nm2" style="margin-top:10px" />
		<div class="label-text">username</div>
		</label>
		<label>
		<input type="password" required  name="pwd2"/>
		<div class="label-text">Password</div>
		</label>
		<input type="submit" class="btn" value="Login" name="slogin" />
        </form>
   </div>
 </div>
</div>



<div id="myModal4" class="modal4">
 <div class="modal-content4">
   <div class="container4">
		<form method="POST" action="">
		<span class="close4">&times;</span>
		<label>
		<input type="text" required autosave="off" autocomplete="off" name="nm3" style="margin-top:10px" />
		<div class="label-text">username</div>
		</label>
		<label>
		<input type="password" required  name="pwd3"/>
		<div class="label-text">Password</div>
		</label>
		<input type="submit" class="btn" value="Login" name="tlogin" />
		</form>
   </div>
 </div>
</div>





<script>
var modal1 = document.getElementById('myModal1');
var btn1 = document.getElementById("myBtn11");
var span1 = document.getElementsByClassName("close1")[0];
btn1.onclick = function() {
    modal1.style.display = "block";
}
span1.onclick = function() {
    modal1.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
var modal2 = document.getElementById('myModal2');
var btn2 = document.getElementById("myBtn12");
var span2 = document.getElementsByClassName("close2")[0];
btn2.onclick = function() {
    modal2.style.display = "block";
}
span2.onclick = function() {
    modal2.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
var modal3 = document.getElementById('myModal3');
var btn3 = document.getElementById("myBtn21");
var span3 = document.getElementsByClassName("close3")[0];
btn3.onclick = function() {
    modal3.style.display = "block";
}
span3.onclick = function() {
    modal3.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}
var modal4 = document.getElementById('myModal4');
var btn4 = document.getElementById("myBtn22");
var span4 = document.getElementsByClassName("close4")[0];
btn4.onclick = function() {
    modal4.style.display = "block";
}
span4.onclick = function() {
    modal4.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
}
var modal5 = document.getElementById('myModal5');
var btn5 = document.getElementById("myBtn23");
var span5 = document.getElementsByClassName("close5")[0];
btn5.onclick = function() {
    modal5.style.display = "block";
}
span5.onclick = function() {
    modal5.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal5) {
        modal5.style.display = "none";
    }
}
</script>
     </body>
</html>
