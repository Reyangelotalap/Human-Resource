
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div>
  <?php include ('../module-1/m1-page-1');
  include('../../crud/connection.php');
  ?>
</div>

<?php
session_start();
$connection = mysqli_connect("localhost","root","","human_resource 1");

if(isset($_POST['update-action']))
{
    $id = $_POST['id'];
	 $email = $_POST['email'];
     $contact = $_POST['contact'];
     $applied_job = $_POST['applied_job'];
     $applicant_name = $_POST['applicant_name'];
 
	
    

    $sql = " UPDATE applicant_resume SET  email='$email' ,  contact='$contact' , applied_job='$applied_job',  applicant_name='$applicant_name' WHERE id='$id'";
    $query_run = mysqli_query($connection, $sql);

    if($query_run)
    {
        echo "<script>
        swal({
            title: 'Success',
            text: 'Data updated successfully',
            icon: 'success',
            button: 'Ok',
        }).then(() => {
            window.location.href = '../module-1/m1-page-1';
        });
    </script>";
        header("Location: ../module-1/m1-page-1");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: update");
    }
}

?>