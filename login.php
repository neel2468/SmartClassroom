<?php
session_start();
include('connection.php');
date_default_timezone_set('Asia/Kolkata');
if(isset($_POST['tregister']))
{
    $name=stripslashes($_POST['nm']);
    $branch=stripslashes($_POST['bn']);
    $email=stripslashes($_POST['em']);
    $id=stripslashes($_POST['id']);
	$college=stripslashes($_POST['cl']);
	$subject1=stripslashes($_POST['sb1']);
	$subject2=stripslashes($_POST['sb2']);
	$subject3=stripslashes($_POST['sb3']);
    $password=md5($_POST['pwd']);
    $password=stripslashes($password);
    $name=mysqli_real_escape_string($db,$name);
    $email=mysqli_real_escape_string($db,$email);
    $id=mysqli_real_escape_string($db,$id);
    $branch=mysqli_real_escape_string($db,$branch);
    $password=mysqli_real_escape_string($db,$password);
	$college=mysqli_real_escape_string($db,$college);
	$subject1=mysqli_real_escape_string($db,$subject1);
	$subject2=mysqli_real_escape_string($db,$subject2);
	$subject3=mysqli_real_escape_string($db,$subject3);
	
    $sql1="insert into teacher(UserName,Branch,EmailId,TeacherId,Password,College,subject1,subject2,subject3) values('$name','$branch','$email','$id','$password','$college','$subject1','$subject2','$subject3') ";
    $result1=mysqli_query($db,$sql1);
    if($result1)
    {
    	echo "<script>alert('Registered Successfully');</script> ";
        echo "<script>location.href='index.php';</script>";
    }
}
else if(isset($_POST['sregister']))
{
    $name=stripslashes($_POST['nm1']);
    $email=stripslashes($_POST['em1']);
    $id=stripslashes($_POST['id1']);
    $sem=stripslashes($_POST['sm']);
    $branch=stripslashes($_POST['bn1']);
    $division=stripslashes($_POST['dv']);
    $college=stripslashes($_POST['cl1']);
    $name=mysqli_real_escape_string($db,$name);
    $email=mysqli_real_escape_string($db,$email);
    $id=mysqli_real_escape_string($db,$id);
    $sem=mysqli_real_escape_string($db,$sem);
    $branch=mysqli_real_escape_string($db,$branch);
    $division=mysqli_real_escape_string($db,$division);
    $college=mysqli_real_escape_string($db,$college);
    $sql1="insert into student(UserName,EnrollmentId,EmailId,Sem,Branch,Division,College) values('$name','$id','$email','$sem','$branch','$division','$college') ";
    $result1=mysqli_query($db,$sql1);
    if($result1)
    {
        echo "<script>alert('Registered Successfully');</script> ";
        echo "<script>location.href='index.php'</script>";
    }
}
if(isset($_POST['tlogin']))
{
    if(empty($_POST['nm3']) || empty($_POST['pwd3']))
    {
           echo "<script>alert('Both fields are required')</script>";
    }
    else
    {
            $username=$_POST['nm3'];
			$password=md5($_POST['pwd3']);
			$subject  = $_POST['sb4'];
			$division= $_POST['dv4'];

			// To protect from MySQL injection
			$username = stripslashes($username);
			$password = stripslashes($password);
			$subject  = stripslashes($subject);
			$division = stripslashes($division);
			$username = mysqli_real_escape_string($db, $username);
			$password = mysqli_real_escape_string($db, $password);
			// $password = md5($password);

			//Check username and password from database
			$sql="SELECT user_id,is_account_active, subject1, subject2, subject3 FROM teacher WHERE UserName= '$username' AND Password='$password' AND is_account_active='1' ";
			// echo $sql;
			$result=mysqli_query($db,$sql);

			//If username and password exist in our database then create a session.
			//Otherwise echo error.

			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['username'] = $username;
				 // Initializing Session
				// Redirecting To Other Page
				while($row=mysqli_fetch_assoc($result))
				{
					if($subject === $row['subject1'] || $row['subject2'] || $row['subject2'])
					{
						$_SESSION['subject'] = $subject;
						$_SESSION['division'] = $division;

					}
					$_SESSION['user_id']=$row['user_id'];
					$Tid=$row['user_id'];
					$_SESSION['is_type']="teacher";
					$Time = date("h:i:sa");
					$date = date("Y-m-d");
					$subquery="INSERT INTO login_details(user_id,UserName,is_type,Login_Time,Login_Date)  
					VALUES('$Tid','$username','teacher','$Time','$date')";
					$subresult=mysqli_query($db,$subquery);
                    $_SESSION['login_details_id']=mysqli_insert_id($db);


				}
			
			}else
			{
				$error = "Incorrect username or password.";
				echo "<script>alert('Please activate your account')</script>";
			}

    }
}
if(isset($_POST['slogin']))
{
    if(empty($_POST['nm2']) || empty($_POST['pwd2']))
    {
           echo "<script>alert('Both fields are required')</script>";
    }
    else
    {
    	    $username=$_POST['nm2'];
			$password=$_POST['pwd2'];
			$division=$_POST['dv2'];

			// To protect from MySQL injection
			$username = stripslashes($username);
			$password = stripslashes($password);
			$division = stripslashes($division);
			$username = mysqli_real_escape_string($db, $username);
			$password = mysqli_real_escape_string($db, $password);
			// $password = md5($password);

			//Check username and password from database
			$sql="SELECT user_id FROM student WHERE UserName='$username' AND is_account_active='1' ";
			$sql1="SELECT UserName FROM teacher WHERE OTP='$password' ";
			// echo $sql;
			$result=mysqli_query($db,$sql);
			$result1=mysqli_query($db,$sql1);
			//If username and password exist in our database then create a session.
			//Otherwise echo error.

			if(mysqli_num_rows($result) == 1 && mysqli_num_rows($result1) == 1)
			{
				$_SESSION['username1'] = $username;
				$_SESSION['division1'] = $division;
				 // Initializing Session
				// Redirecting To Other Page

					while($row=mysqli_fetch_assoc($result))
				{
					$_SESSION['user_id1']=$row['user_id'];
					$Sid=$row['user_id'];
					$_SESSION['is_type']="student";
					$Time = date("h:i:sa");
					$date = date("Y-m-d");
					$subquery="INSERT INTO login_details(user_id,UserName,is_type,Login_Time,Login_Date)  
					VALUES('$Tid','$username','student','$Time','$date')";
                    $subresult=mysqli_query($db,$subquery);
                    $_SESSION['login_details_id']=mysqli_insert_id($db);


				}


				
			}else
			{
				$error = "Incorrect username or password.";
				echo "<script>alert('Please activate your account')</script>";
			}

    }
}
?>
