<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div>
    <?php include ('../module-1/m1-page-5.php');
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

    if ($status == "examination") {
        $query = "INSERT INTO examination_tbl ( `id`,`email`,  `contact`, `applicant_name` , `applied_job` ,  `status` ) VALUES (  '$id' , '$email', '$contact', '$applicant_name', '$applied_job',  '$status')";
    } else if ($status == "failed") {
        $query = "INSERT INTO initialfailed_tbl ( `id`,`email`,  `contact`, `applicant_name` , `applied_job` , `resume_file` ,  `status` ) VALUES (  '$id' , '$email', '$contact', '$applicant_name', '$applied_job', '$resume_file' , '$status')";
    } 

    if($query_run = mysqli_query($connection, $query)){

    $r_id = $_POST['r_id'];
    $initial_ratings = $_POST['ratings'];

    $query2 = "INSERT INTO initialratings(applicant_id , initial_ratings) VALUES('$r_id', '$initial_ratings')";
    $result2 = mysqli_query($connection, $query2);

    if($result2){



    // delete record from initial interview table
    $query = "UPDATE `initial_interview` SET status = 'Initial Interview Passed' WHERE id= $id ";
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
}
}
?>