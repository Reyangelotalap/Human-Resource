<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div>
    <?php include ('../module-1/m1-page-3.php');
  ?>
</div>
<?php

$connection = mysqli_connect("localhost","root","","human_resource 1");


if(isset($_POST['update']))
{
    
    $id = $_POST['id'];
    $status = $_POST['status'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $applicant_name = $_POST['applicant_name']; 
    $applied_job = $_POST['applied_job'];
   
    
	
    $query = "INSERT INTO examination_tbl ( `id`,`email`, `contact`, `applicant_name` , `applied_job` ,  `status` ) VALUES (  '$id' , '$email', '$contact' '$applicant_name', '$applied_job', '$status')"; 
    $query_run = mysqli_query($connection, $query);

    
    $query = "DELETE FROM `initial_interview` WHERE id=$id ";
    $query_run = mysqli_query($connection, $query);
    

    if($query_run)
    {
      
        echo "<script>
        swal({
            title: 'Success',
            text: 'Status updated successfully',
            icon: 'success',
            button: 'Ok',
        }).then(() => {
            window.location.href = '../module-1/m1-page-5';
        });
    </script>";
        header("Location: ../module-1/m1-page-3");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: update");
    }
}


?>