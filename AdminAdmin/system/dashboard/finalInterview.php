<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div>
    <?php include ('../module-2/m2-page-2.php');
    include('../../crud/connection.php');
  ?>
</div>
<?php

if(isset($_POST['update']))
{
    // get form data
    $id = $_POST['r_id'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $applicant_name = $_POST['applicant_name'];
    $resume_file = $_POST['resume_file'];
    $applied_job = $_POST['applied_job'];

    
    // insert record into examination table

    if ($status == "Final Interview") {
        $query = "INSERT INTO finalnterview_tbl ( `id`,`email`,  `contact`, `applicant_name` , `applied_job` , `resume_file` ,  `status` ) VALUES (  '$id' , '$email', '$contact', '$applicant_name', '$applied_job', '$resume_file' , '$status')";
    } else if ($status == "failed") {
        $query = "INSERT INTO rejected_tbl ( `id`,`email`,  `contact`, `applicant_name` , `applied_job` , `resume_file` ,  `status` ) VALUES (  '$id' , '$email', '$contact', '$applicant_name', '$applied_job', '$resume_file' , '$status')";
    } 

    $query_run = mysqli_query($connection, $query);

    // delete record from initial interview table
    $query = "DELETE FROM `examination_status` WHERE id=$id ";
    $query_run = mysqli_query($connection, $query);
    
    // redirect to appropriate page
    if($query_run)
    {
        echo "<script>
        swal({
            title: 'Success',
            text: 'Status updated successfully',
            icon: 'success',
            button: 'Ok',
        }).then(() => {
            window.location.href = '../module-2/m2-page-2';
        });
    </script>";
        header("Location: ../module-2/m2-page-2");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: update");
    }
}


?>