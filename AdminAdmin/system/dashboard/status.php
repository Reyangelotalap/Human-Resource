<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div>
    <?php include ('../module-1/m1-page-1.php');
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

    if ($status == "passed") {
        $query = "INSERT INTO `passed_tbl` ( `id`,`email`,  `contact`, `applicant_name` , `applied_job` , `resume_file` ,  `status` ) 
    VALUES ('".mysqli_real_escape_string($connection, $id)."', 
                  '".mysqli_real_escape_string($connection, $email)."', 
                  '".mysqli_real_escape_string($connection, $contact)."', 
                  '".mysqli_real_escape_string($connection, $applicant_name)."', 
                  '".mysqli_real_escape_string($connection, $applied_job)."', 
                  '".mysqli_real_escape_string($connection, $resume_file)."', 
                  '".mysqli_real_escape_string($connection, $status)."' )";


    } else if ($status == "failed") {
        $query = "INSERT INTO `rejected_tbl` ( `id`,`email`,  `contact`, `applicant_name` , `applied_job` , `resume_file` ,  `status` ) VALUES (  '$id' , '$email', '$contact', '$applicant_name', '$applied_job', '$resume_file' , '$status')";
    } 

    $query_run = mysqli_query($connection, $query);

    $query = "DELETE FROM `applicant_resume` WHERE id=$id ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    { 
        echo "<script>
        const sweetAlert = document.createElement('div');
        sweetAlert.setAttribute('class', 'sweet-alert');
        document.body.appendChild(sweetAlert);
        swal({
            
            title: 'Success',
            text: 'Status updated successfully',
            icon: 'success',
            button: 'Ok',
            closeOnClickOutside: false,
            closeOnEsc: false,
            dangerMode: false,
            timer: 3000
        }).then(() => {
            window.location.href = '../module-1/m1-page-1';
        });
    </script>";
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: update");
    }
}


?>