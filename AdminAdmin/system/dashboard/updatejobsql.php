
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div>
  <?php include ('dashboard.php');
  include('../../crud/connection.php');
  ?>
</div>

<?php
session_start();
$connection = mysqli_connect("localhost","root","","human_resource 1");

if(isset($_POST['update-action']))
{
    $Id = $_POST['Id'];
	 $title = $_POST['title'];
     $qualification = $_POST['qualification'];
     $description = $_POST['description'];
     $user_info = $_POST['user_info'];
	 $salary = $_POST['salary'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
 
	
    

    $sql = " UPDATE job_vacancies SET  title='$title' , qualification='$qualification',  description='$description', salary='$salary' , email='$email',  phone='$phone'  WHERE Id='$Id'";
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
            window.location.href = 'dashboard';
        });
    </script>";
        header("Location: dashboard");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: update");
    }
}

?>