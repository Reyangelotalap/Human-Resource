<?php
// include ('./admin/db_connect.php');
require_once'../Pages/excel.php';

// $db = new Database();
// $conn = $db->db_connect();

$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM applicant_resume";
//  $result = mysqli_query($conn, $query);
 $stmt = $pdo->prepare($query);
 $stmt->execute();

if($stmt->rowCount() > 0)
{
 $output .= '
  <table class="table table-striped table-bordered" border="1">  
                   <tr>  
                   <th>Applicant Name</th>  
                   <th>Email</th>  
                   <th>Applied_Job</th>  
                   <th>Resume File</th>
                   <th>Upload Date</th>  
                   </tr>
 ';
  foreach($stmt as $row)
//  while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>  
   <td>'.$row["applicant_name"].'</td>  
   <td>'.$row["email"].'</td>  
   <td>'.$row["applied_job"].'</td>  
   <td>'.$row["resume_file"].'</td>  
   <td>'.$row["upload_date"].'</td>
     
   </tr>
  ';
 }
$output .= '</table>';

header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename=Applicant.xls');
echo $output;
}
}
?>




