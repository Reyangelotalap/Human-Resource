<?php
// include ('./admin/db_connect.php');
require_once'../Pages/excel.php';

// $db = new Database();
// $conn = $db->db_connect();

$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM job_vacancies";
//  $result = mysqli_query($conn, $query);
 $stmt = $pdo->prepare($query);
 $stmt->execute();

if($stmt->rowCount() > 0)
{
 $output .= '
  <table class="table table-striped table-bordered" border="1">  
                   <tr>  
                   <th> Employer ID</th>  
                   <th>Title</th>  
                  
                   <th> User Info</th>  
                   <th> Salary</th>  
                   <th>Email</th>  
                   <th>Phone</th>  
                   <th> Location</th>

                   <th> Date</th>
                   </tr>
 ';
  foreach($stmt as $row)
//  while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>  
   <td>'.$row["employer_id"].'</td>  
   <td>'.$row["title"].'</td>  
  
   <td>'.$row["user_info"].'</td>
   <td>'.$row["salary"].'</td>  
   <td>'.$row["email"].'</td>  
   <td>'.$row["phone"].'</td>  
   <td>'.$row["location"].'</td>  

   <td>'.$row["date"].'</td>
     
   </tr>
  ';
 }
$output .= '</table>';

header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename=vacancies.xls');
echo $output;
}
}
?>




