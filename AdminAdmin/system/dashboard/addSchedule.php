
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div>
  <?php 
include('../../crud/connection.php');
  ?>
</div>
<?php



      if (isset($_POST['submit'])) {

        $id = $_POST['reg_id'];
      
        
        $datetime = date("Y-m-d H:i:s");

        // Separate date and time
        $date = date("Y-m-d", strtotime($datetime));
        $time = date("H:i:s", strtotime($datetime));

        if (!empty($date)) {
         
          $sql = "INSERT INTO initial interview ( reg_id,  date, time,  ) VALUES ('$id',  '$date', '$time)";


          $result = mysqli_query($connection, $sql);

        if ($result) {

      

            // Show a success message
            echo "<script>
            swal({
              title: 'Success!',
              text: 'Your file is successfully submitted!',
              icon: 'success'
            }).then(function() {
              // Redirect to a new page
              window.location = '';
            });
            </script>";
          } else {
            // Show an error message
            echo "<script>
            swal({
              title: 'Error!',
              text: 'Data submission failed!',
              icon: 'error'
            });
            </script>";
          }
        } 
       
    }

?>

