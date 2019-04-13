<?php
include('checkteachersession.php');
$name=$_SESSION['username'];
$sb=$_SESSION['subject'];
$dv=$_SESSION['division'];
?>
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