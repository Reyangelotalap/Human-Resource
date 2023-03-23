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

    $applied_job = $_POST['applied_job'];

    
    // // insert record into examination table

    if ($status == "passed") {
        $query = "INSERT INTO newlyhired_tbl ( `id`, `applicant_name` , `email`, `applied_job` ) 
        VALUES (  '$id' ,  '$applicant_name', '$email',  '$applied_job')";
         
         if($query_run = mysqli_query($connection, $query)){

            $fetch = "SELECT * FROM initialratings WHERE applicant_id = '$id' ";
            $fetchResults = mysqli_query($connection, $fetch);
            $fetchRow = mysqli_fetch_assoc($fetchResults);
            $initial_ratings =  $fetchRow['initial_ratings'];
            $final_ratings = $_POST['ratings'];
            $total_ratings = $initial_ratings + $final_ratings;
            $percentage = ($initial_ratings / $final_ratings) * 100;
    
            $update = "UPDATE initialratings 
            SET  final_ratings = '$final_ratings', total_ratings = '$total_ratings', percentage = '$percentage'
            WHERE applicant_id = '$id'";
            $updateResults = mysqli_query($connection, $update);
    
            if($updateResults){
                $updateQuery = "UPDATE finalnterview_tbl SET status = 'Final Interview Passed' WHERE id = '$id'";
                $updateResult = mysqli_query($connection, $updateQuery);

                if($updateResult){
            echo "<script>
            swal({
                title: 'Success',
                text: 'Status updated successfully',
                icon: 'success',
                button: 'Ok',
            }).then(() => {
                window.location.href = '../module-1/m1-page-6';
            });
        </script>";
            header("Location: ../module-1/m1-page-6");
        }
        else
        {
            $_SESSION['status'] = "Not Updated";
            header("Location: update");
        }
    }
         }
    } 
    if ($status == "failed") {
        $query = "INSERT INTO finalfailed_tbl ( `id`, `applicant_name`  , `email` ,  `contact` , `applied_job`  , `status`  ) VALUES (  '$id', '$applicant_name',  '$email', '$contact' , '$applied_job' , '$status' )";

        if($query_run = mysqli_query($connection, $query)){

            $fetch = "SELECT * FROM initialratings WHERE applicant_id = '$id' ";
            $fetchResults = mysqli_query($connection, $fetch);
            $fetchRow = mysqli_fetch_assoc($fetchResults);
            $initial_ratings =  $fetchRow['initial_ratings'];
            $final_ratings = $_POST['ratings'];
            $total_ratings = $initial_ratings + $final_ratings;
            $percentage = ($initial_ratings / $final_ratings) * 100;
    
            $update = "UPDATE initialratings 
            SET  final_ratings = '$final_ratings', total_ratings = '$total_ratings', percentage = '$percentage'
            WHERE applicant_id = '$id'";
            $updateResults = mysqli_query($connection, $update);
    
            if($updateResults){
    
                $updateQuery = "UPDATE finalnterview_tbl SET status = 'Final Interview Failed' WHERE id = '$id'";
                $updateResult = mysqli_query($connection, $updateQuery);

                if($updateResult){

            echo "<script>
            swal({
                title: 'Success',
                text: 'Status updated successfully',
                icon: 'success',
                button: 'Ok',
            }).then(() => {
                window.location.href = '../module-1/m1-page-6';
            });
        </script>";
            header("Location: ../module-1/m1-page-6");
        }
        else
        {
            $_SESSION['status'] = "Not Updated";
            header("Location: update");
        }
    }
        }
    } 

    
}

?>