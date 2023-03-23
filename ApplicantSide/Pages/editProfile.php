<?php
session_start();
include '../../Job Portal/Pages/connection.php';

if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTempName = $_FILES["file"]["tmp_name"];
  $fileSize = $_FILES["file"]["size"];
  $fileError = $_FILES["file"]["error"];
  $fileType = $_FILES["file"]["type"];
  $folder = "profileStorage/" . $fileName;

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      if ($fileSize < 5000000) {
        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
        $fileDestination = $folder;
        move_uploaded_file($fileTempName, $fileDestination);

        if (!empty($file)) {
          $query = "UPDATE regapplicant SET image = '$fileName' ";

          $result = mysqli_query($connection, $query);

          header("location:");
        } else {
          $_SESSION['errorMessage'] = "Failed to update profile picture";
        }
      } else {
        $_SESSION['errorMessage'] = "You image is too big!";
      }
    } else {
      $_SESSION['errorMessage'] = " There was an error uplading your file!";
    }
  } else {
    $_SESSION['errorMessage'] = "You cannot upload this type of Image";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../Image/MyLogo-modified.png" type="image/x-icon">
  <title>Edit Profile | RGBC </title>


  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

  <!-- bootstrap file -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

  <!-- css -->
  <link rel="stylesheet" href="../Css/editProfile.css">
    

</head>
<body>

<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
    <a class="nav-link" href="../index.php">Home</a>
        <a class="nav-link active ms-0" href="../Pages/editProfile.php">Profile</a>
        <a class="nav-link" href="../Pages/accountInformation.php">Account Information</a>
        <a class="nav-link" href="../Pages/changePassword.php">Change Password</a>

    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" novalidate enctype="multipart/form-data" accept="image/png, image/jpeg, image/jpg">
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>

                <?php
            $query = "SELECT image FROM regapplicant WHERE username = '".$_SESSION['username']."'";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result)) {
              $row = mysqli_fetch_assoc($result);
              $image = $row['image'];

            ?>

           
                <div class="card-body text-center">

                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" <?php echo '<img src="profileStorage/' . $image . '" />'; ?> 
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button"  data-toggle="modal"
              data-target="#exampleModalCenter">Upload new image</button>
                </div>
            </div>

            <?php } ?>
            
        </div>
        <div class="col-xl-8">


        
        <?php
            $query = "SELECT * FROM regapplicant WHERE username = '".$_SESSION['username']."'";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result)) {
              $row = mysqli_fetch_assoc($result);
              $image = $row['image'];

            ?>
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Information</div>
                <div class="card-body">
                     <form action="">
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" type="text" readonly="readonly" value="<?php echo $row['firstname'];?>">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" readonly="readonly" value="<?php echo $row['lastname'];?>">
                           </div>
                        </div>
                        <!-- Form Row        -->
                     
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" readonly="readonly" value="<?php echo $row['email'];?>">
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button" name="update" onclick="window.location.href='../Pages/accountInformation.php';" >Edit</button>
                    </form>
                </div>
            </div>
<?php }?>


        </div>
    </div>
</div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Upload your new profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" novalidate enctype="multipart/form-data" accept="image/png, image/jpeg, image/jpg">
        
              <input type="file" name="file">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  
</body>
</html>