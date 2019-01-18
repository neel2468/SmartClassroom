<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php
session_start();
include('connection.php');
$output= "
<table class='table table-bordered table-striped'>
 <tr>
  <td>Username</td>
  <td>Action</td>
 </tr>
";
	if($_SESSION['is_type'] == 'teacher')
	{
		$subquery="SELECT * FROM login_details WHERE is_type='student' ";
		$subresult=mysqli_query($db,$subquery);
		while($subrow=mysqli_fetch_assoc($subresult))
		{
			$output .= '
         <tr>
        <td>'.$subrow['UserName'].'</td>
        <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$subrow['user_id'].'" data-tousername="'.$subrow['UserName'].'">Start Chat</button></td>
        </tr>
        ';

		}
		$output .= '</table>';

echo $output;

	}
if($_SESSION['is_type'] == 'student')
	{
		$subquery="SELECT * FROM login_details WHERE is_type='teacher' ";
		$subresult=mysqli_query($db,$subquery);
		while($subrow=mysqli_fetch_assoc($subresult))
		{
			$output .= '
 <tr>
  <td>'.$subrow['UserName'].'</td>
  <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$subrow['user_id'].'" data-tousername="'.$subrow['UserName'].'">Start Chat</button></td>
 </tr>
 ';

		}
		$output .= '</table>';

echo $output;

	}

?>