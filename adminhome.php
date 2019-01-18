<html>
    <head>

    	<link rel="stylesheet" href="css/admin.css">
	</head>
    <body>
    	<nav>
    		<a class="link1" href="">Welcome Admin</a>
    		 <div style="float: right;">
              <form method="POST" action=" ">
                <input type="submit" value="Log Out" class="btn" name="logout"/>
              </form>
            </div>
    	</nav>
    	<div class="jumbotron" style="width:440px;height: 500px;margin-left: 50px;position: fixed;margin-top: 30px; z-index: 1">
    		<h4 style="margin-top:-30px;position: fixed;margin-left: 30px">Account Activation Table</h4>
    	<div class="table-wrapper-scroll-y">
	    	<table>
	    		<tr>
	    			<th>UserName</th>
	    			<th>Details</th>
	    		</tr>
	    	
	    				<?php
	    				   include('connection.php');
	    				   $query1="SELECT * FROM teacher";
	    				   $result1=mysqli_query($db,$query1);
	    				   $query2="SELECT * FROM student";
	    				   $result2=mysqli_query($db,$query2);
	    				   $output1 = " ";
	    				   $output2  = " ";
	    				   while ($row1=mysqli_fetch_assoc($result1)) 
	    				   {
	    				      $output1 = "<tr><td>".$row1['UserName']."</td>";
	    				      $output1 .= "<td><button id='btn1' class='btn btn-primary'
	    				      onclick='document.getElementById(\"frame\").style.display=\"block\";document.getElementById(\"frame\").src=\"name.php?id=".$row1['TeacherId']."&type=teacher\"'>Details</button></td>";	    				  
	    				      $output1 .= "</tr>";
	    				      echo $output1;
	    				   }
	    				   while($row2=mysqli_fetch_assoc($result2))
	    				   {
	                           $output2 = "<tr><td>".$row2['UserName']."</td>";
	    				       $output2 .= "<td><button id='btn3' class='btn btn-primary' onclick='document.getElementById(\"frame\").style.display=\"block\";document.getElementById(\"frame\").src=\"name.php?id=".$row2['EnrollmentId']."&type=student\"'>Details</button></td>";
	    				       $output2 .= "</tr>";
	    				       echo $output2;	
	    				   }

	    				?>
	    		
	    	</table>
	   </div>
	</div>
	<iframe  id='frame' height="380px" width="580px" style="background-color: grey;padding: 10px; margin-left: 750px;margin-top: 70px;z-index: 10; position: absolute;">
	</iframe>
    </body>
 </html>
<?php
session_start();
if(!isset($_SESSION['name']) || $_SESSION['name'] == " ")
{
	echo "<script>location.href='admin.php';</script>";
}
if(isset($_POST['logout']))
{
	session_destroy();
     echo "<script>location.href='admin.php'</script>";
}

?> 