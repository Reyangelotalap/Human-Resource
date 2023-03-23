<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div>
    <?php include ('../module-1/m1-page-3.php');
  ?>
</div>

<?php

$connection = mysqli_connect("localhost","root","","human_resource 1");


if(isset($_POST['update']))
{
    
    $id = $_POST['r_id'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $applicant_name = $_POST['applicant_name'];
    $applied_job = $_POST['applied_job'];
    $resume_file = $_POST['resume_file'];
   
    
    if ($status == "Initial Interview") {
        $query = "INSERT INTO initial_interview ( `id`,`email`,  `contact`, `applicant_name` , `applied_job` , `resume_file` ,  `status` ) VALUES (  '$id' , '$email', '$contact', '$applicant_name', '$applied_job', '$resume_file' , '$status')"; 
    } 
    $query_run = mysqli_query($connection, $query);


    
    $query = "DELETE FROM `passed_tbl` WHERE id=$id ";
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
            window.location.href = '../module-1/m1-page-3';
        });
    </script>";
        header("Location: ../module-1/m1-page-3.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: update.php");
    }
}


?>