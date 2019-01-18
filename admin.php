<html>
    <head>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	</head>
	<body style="background-color: grey">
		<div class="jumbotron" style="height:500px;width: 500px;left: 500px;top:120px;position: absolute;border:2px solid #CD5C5C;">
			 <div style="background-color:#CD5C5C;height: 40px; width:498px; color: white;position: fixed;top:120px;color: white ">
			 	<p style="padding: 6px">Admin Login</p>
			 </div>
			 <form method="POST" action="">
			 	 <p style="margin-top: 120px;margin-left: 40px">UserName:
			 	 <input type="text" name="username" style="margin-left: 40px" autocomplete="off" autosave="off"/></p>
			 	 <p style="margin-top: 40px;margin-left: 40px">Password:
			 	 <input type="password" name="password" style="margin-left: 48px" autocomplete="off" autosave="off"/></p>
			 	 <input type="submit" name="login" value="Login" class="btn btn-danger" style="margin-left: 390px;margin-top: 20px" />
			 </form>
		</div>
	</body>
</html>
<?php
session_start();
if(isset($_POST['login']))
{
	$_SESSION['name'] = $_GET['username'];
	if($_POST['username']== 'admin' && $_POST['password']== '1234')
	{
        $_SESSION['name'] = $_POST['username'];
        if(isset($_SESSION['name']) && $_SESSION['name'] != '' )
        {
		 echo "<script>location.href='adminhome.php';</script>";
	    }
	    else
	    {
           echo "<script>location.href='admin.php';</script>";
	    }
	}
	else 
	{

		echo "<script>alert('Incorrect UserName or Password');</script>";
	}
}
?>