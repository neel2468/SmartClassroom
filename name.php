<?php
include('connection.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
    if(isset($_GET['type']))
    {
         if($_GET['type']=='teacher')
         {
         	$query1 = "SELECT * FROM teacher WHERE TeacherId='$id'";
         	$result1 = mysqli_query($db,$query1);
         	while($row1=mysqli_fetch_assoc($result1))
         	{
				$actstat = false;
				$btnval = $btnstyl = '';
				if ($row1['is_account_active'] > 0 ) { $actstat = true; }
				if($actstat) { $btnval = 'Activated'; $btnstyl = 'background:green;'; } else { $btnval = 'Activate'; $btnstyl = 'background:red;'; } 
				
         		echo "<html><body><div style='font-size:30px;padding:10px;height:300px;width:550px;margin:5px;position:absolute'>
         		<button class='btn btn-danger' style='margin-left:500px;position:absolute;margin-top:-5px;' onclick='parent.document.getElementById(\"frame\").style.display=\"none\"'>X</button><br>
         		Name : ".$row1['UserName']."<br>
         		Branch : ".$row1['Branch']."<br>
                Email : ".$row1['EmailId']."<br>
                Id : ".$row1['TeacherId']."<br>
                College : ".$row1['College']."</div>
                <div   id='response'>
					<form>
						<input type='hidden' name ='id' value='" . $_GET['id'] . "' />
						<input type='hidden' name ='type' value='" . $_GET['type'] . "' />
						<input type='hidden' name ='activ' value='activate' id='activate' />
						<input type='submit' value='$btnval' class='btn btn-danger' style='margin-left:470px;margin-top:308px; $btnstyl'></button>
					</form>
                </div>
                </body></html>";
         	}
         }
         if(isset($_GET['activ']))
		{
			$query="UPDATE teacher SET is_account_active='1' WHERE TeacherId='$id' ";
            $result=mysqli_query($db,$query);
            if($result)
            {
               echo "<script>alert('account is activated');</script>";
            }
		}
    }
    if($_GET['type']=='student')
         {
         	$query2 = "SELECT * FROM student WHERE EnrollmentId='$id'";
         	$result2 = mysqli_query($db,$query2);
         	while($row2=mysqli_fetch_assoc($result2))
         	{
                $actstat = false;
                $btnval = $btnstyl = '';
                if ($row2['is_account_active'] > 0 ) { $actstat = true; }
                if($actstat) { $btnval = 'Activated'; $btnstyl = 'background:green;'; } else { $btnval = 'Activate'; $btnstyl = 'background:red;'; }
         		echo "<html><body><div style='font-size:30px;padding:20px;margin:40px; height:300px;width:550px;margin:5px;position:absolute'>
                <button class='btn btn-danger' style='float:right' onclick='parent.document.getElementById(\"frame\").style.display=\"none\"'>X</button><br>
                Name : ".$row2['UserName']."<br>
                Branch : ".$row2['Branch']."<br>
                Email : ".$row2['EmailId']."<br>
                Id : ".$row2['EnrollmentId']."<br>
                College : ".$row2['College']."</div>
                <div   id='response'>
                    <form>
                        <input type='hidden' name ='id' value='" . $_GET['id'] . "' />
                        <input type='hidden' name ='type' value='" . $_GET['type'] . "' />
                        <input type='hidden' name ='activ' value='activate' id='activate' />
                        <input type='submit' value='$btnval' class='btn btn-danger' style='margin-left:470px;margin-top:308px; $btnstyl'></button>
                    </form>
                </div>
                 
                </body></html>";
         	}
         }
         if(isset($_GET['activ']))
        {
            $query="UPDATE student SET is_account_active='1' WHERE EnrollmentId='$id' ";
            $result=mysqli_query($db,$query);
            if($result)
            {
               echo "<script>alert('account is activated');</script>";
            }
        }

}
?>