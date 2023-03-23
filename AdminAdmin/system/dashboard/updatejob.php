

<?php
include('../../crud/connection.php');

?>

<?php
// Check existence of id parameter before processing further
if(isset($_GET["Id"]) && !empty(trim($_GET["Id"]))){
    // Include config file
    include('../../crud/connection.php');
    
    // Prepare a select statement
    $sql = "SELECT * FROM job_vacancies WHERE Id = ?";
    
    if($stmt = mysqli_prepare($connection, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["Id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
               
                $Id = $row["Id"];
                $title = $row["title"];
                $qualification = $row["qualification"];
                $description = $row["description"];
                
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
  <link rel="stylesheet" href="../module-1/module-1-css/m2-page-2.css">
  <link rel="stylesheet" href="../include/css//sidebar.css">
  <link rel="stylesheet" href="../include/css//main.css">

  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

</head>

<body>

  <style>


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

    <section style="padding: 20px">



          <form action="updatejobsql" method="post" enctype="multipart/form-data">
                            <input  type="hidden" value="<?php echo $row['Id']; ?>" name="Id">
                            <div class="form-row">
                                <div class="form-group col-md-6" >
                                    <br>
                                    <label for="inputEmail4" style="font-weight: 700;">Job Title</label>
                                    <input type="text" class="form-control" id="inputEmail4" value="<?php echo $row["title"]; ?>"
                                        name="title" required style="height: 70px">
                                </div>
                                <div class="form-group col-md-6">
                                    <br>
                                    <label for="inputPassword4" style="font-weight: 700;">Location</label>
                                    <input type="text" class="form-control" id="inputPassword4" value="<?php echo $row["location"]; ?>"
                                        name="location" required  required style="height: 70px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress" style="font-weight: 700;">Job Qualification</label>
                                <textarea name="qualification" id="editor1" rows="40" cols="102" ><?php echo $row["qualification"]; ?>
             </textarea>
                                <script >
                                CKEDITOR.replace('editor1');
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress" style="font-weight: 700;">Job Description</label>
                                <textarea name="description" id="" cols="30" rows="7" class="form-control"
                                   required maxlength="200" minlength="200" ><?php echo $row["description"]; ?></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity" style="font-weight: 700;">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" value="<?php echo $row["email"]; ?>" name="email"  required style="height: 70px">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputState" style="font-weight: 700;">Salary</label>
                                    <input type="text" class="form-control" id="inputEmail" name="salary" required value="<?php echo $row["salary"]; ?>" style="height: 70px">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputState" style="font-weight: 700;">Phone</label>
                                    <input type="text" class="form-control" id="inputEmail" value="<?php echo $row["phone"]; ?>" name="phone" required style="height: 70px">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputState" style="font-weight: 700;">Hr personnel</label>
                                    <input type="text" class="form-control" id="inputEmail"value="<?php echo $row["user_info"]; ?>" name="user_info" required style="height: 70px">
                                </div>

                            </div>



                            <div class="form-group">
                            </div>
                            <script src="../Javascript/openToggle.js"></script>
  <button onclick="window.location.href='dashboard';"class="btn btn-danger "style="margin-left:1%;float:right; background-color: red !important; border-radius: 2px; font-size: 16px">cancel</button>

                            <button onclick="window.location.href='dashboard';" type="submit" class="btn btn-primary" style=" float:right; border-radius: 2px"
                                name="update-action" style="text-transform:capitalize  !important;">Update</button>

                        </form>
 

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