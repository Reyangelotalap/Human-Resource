<?php
include('../../crud/connection.php');

?>

<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    include('../../crud/connection.php');
    
    // Prepare a select statement
    $sql = "SELECT * FROM applicant_resume WHERE id = ?";
    
    if($stmt = mysqli_prepare($connection, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
               
                $id = $row["id"];
                $email = $row["email"];
                $contact = $row["contact"];
                $applicant_name = $row["applicant_name"];
                $applied_job = $row["applied_job"];
                
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
              
             
             
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: ");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($connection);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: done");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update | RGBC</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="../../../favicon/Your paragraph text (1)-modified.png" type="image/x-icon">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/dashboard.css">
  <script src="../css/jquery.min.js"></script>

  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

  <!-- sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!-- OWN STYLE -->
  <link rel="stylesheet" href="../module-1/module-1-css/m1-page-1.css">
  <link rel="stylesheet" href="../include/css//sidebar.css">
  <link rel="stylesheet" href="../include/css//main.css">


</head>

<body>

  <style>
  * {
    box-sizing: border-box;
  }

  input[type="text"] {
  width: 60%; /* adjust the width as per your requirement */
}


  .column {
    float: center;
    width: 50%;
    padding: 30px;
    height: 500px;
  }

  label {
    color: black;
    font-weight: 700 !important;
    text-transform: uppercase;
  }

  .head {
  display: block; 
  margin: 0 auto; 
  width: 15%;
}

.form-group {
  display: flex;
  flex-direction: column;
  align-items: center;
}

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  </style>


  <?php
include '../include/header.php';
?>

  <main class="main">

    <header>
      <div class="pagetitle">
        <h1 style="font-weight: 700;">Update Data</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="../dashboard/dashboard">Home</a>
            </li>

            <li class="breadcrumb-item " style="color: black; font-weight: 500" > Update Data</li>
          </ol>
        </nav>
      </div>
    </header>

    <section style="background-color: #fff; height: 100vh; border-radius: 5px">

   

        <br>
        <br>
        <br>
        <div class="row">
          <div class="col-6 col-sm-6 ">

            <h1 style="font-size: 30px; display:flex; justify-content: center; color: black; font-weight: 700" >Records</h1>
            <br>

            <img src="../../../Job Portal/Image/pngegg.png" class="head">

<br>
            <div class="form-group" ">
              <label>Id</label>
              <input class=" form-control" type="text" name="id" id="id" required value="<?php echo $row["id"]; ?>"
              style="height: 5vh; " readonly>
            </div>

            <div class="form-group">
              <label>Applicant Name</label>
              <input class="form-control" type="text" required value="<?php echo $row["applicant_name"]; ?>"
                style="height: 5vh" readonly>
            </div>

            <div class="form-group">
              <label>Email</label>
              <input class="form-control" type="text" required value="<?php echo $row["email"]; ?>" style="height: 5vh"
                readonly>
            </div>

            <div class="form-group">
              <label>Contact</label>
              <input class="form-control" type="text" required value="<?php echo $row["contact"]; ?>" style="height: 5vh"
                readonly>
            </div>

            <div class="form-group">
              <label>Applied Job</label>
              <input class="form-control" type="text" required value="<?php echo $row["applied_job"]; ?>"
                style="height: 5vh" readonly>
            </div>
          </div>




          <div class="col-6 col-sm-6">

            <form action="../dashboard/updateApplicant" method="post">

              <h1 style="font-size: 30px; display:flex; justify-content: center; color: black; font-weight: 700" >Update Data Form</h1>
              <br>

              <img src="../../../Job Portal/Image/pngegg.png" class="head">
  <br>
              <div class="form-group">
                <label>Id</label>
                <input class="form-control" type="text" name="id" id="id" required value="<?php echo $row["id"]; ?>"
                  style="height: 5vh; color: black; font-weight: 700" readonly>
              </div>

              <div class="form-group">
                <label>Applicant Name</label>
                <input class="form-control" type="text" name="applicant_name" required
                  value="<?php echo $row["applicant_name"]; ?>" style="height: 5vh;color: black; font-weight: 700">
              </div>

              <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" name="email" required value="<?php echo $row["email"]; ?>"
                  style="height: 5vh;color: black; font-weight: 700">
              </div>

              <div class="form-group">
              <label>Contact</label>
              <input class="form-control" type="text"  name=" contact" required value="<?php echo $row["contact"]; ?>" 
              style="height: 5vh;color: black; font-weight: 700">
            </div>

              <div class="form-group">
                <label>Applied Job</label>
                <input class="form-control" type="text" name="applied_job" required
                  value="<?php echo $row["applied_job"]; ?>" style="height: 5vh;color: black; font-weight: 700">
              </div>
          
         
        <div class="button" style=" float: right; margin: 2rem 8rem ">
        <button type="submit" name="update-action" class="btn btn-primary" style="border-radius: 2px;">Update Data</button>
              <a href="../module-1/m1-page-1" class="btn btn-danger ml-2"
                style="background-color: red !important; border-radius: 2px; font-size: 15px" >Cancel</a>
       

          </div>
        </div>
        <br>
        <br>

        
        </form>
      </div>

    </section>

    <?php
    include '../include/footer.php';
    ?>

  </main>







  <?php
include '../include/script.php';
?>


  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>


</body>

</html>