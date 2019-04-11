<html>
    <head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>SCLASS | Admin</title>

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
		<link href="css/adminhome.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    	
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
            <li><a href="admin.php">Log Out</a></li>                                                         
         </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>

    	
    	<div class="div1" style="width:440px;height: 500px;margin-left: 50px;position: fixed;margin-top: 30px; z-index: 1">
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
	<iframe  id='frame' height="380px" width="580px" style="padding: 10px; margin-left: 750px;margin-top: 70px;z-index: 10; position: absolute;">
	</iframe>
    </body>
 </html>
<?php
if(isset($_POST['logout']))
{
	
    echo "<script>location.href='admin.php'</script>";
}

?> 