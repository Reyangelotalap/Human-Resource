<?php

session_start();

include '../../Job Portal/Pages/connection.php';

if(isset($_POST['submit'])){

  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $salary = $_POST['salary'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $location = $_POST['location'];
  $user_info = $_POST['user_info'];

  $qualification = $_POST['qualification'];

  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTempName = $_FILES["file"]["tmp_name"];
  $fileSize = $_FILES["file"]["size"];
  $fileError = $_FILES["file"]["error"];
  $fileType = $_FILES["file"]["type"];
  $folder = "../../Job Portal/Pages/imageStorage/" . $fileName;

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
          $query = "INSERT INTO job_vacancies ( `employer_id`, `title`, `qualification`, `description`, `location`, `phone`, `email`, `salary`, `user_info`, `image`) VALUES ('$id', '$title', '$qualification',  '$description', '$location', '$phone', '$email', '$salary', '$user_info', '$fileName' ) "; 

          $result = mysqli_query($connection, $query);

          header("location: employer_profile.php");
        } else {
          $_SESSION['errorMessage'] = "Failed to update profile picture";
        }
      } else {
        $_SESSION['errorMessage'] = "You image is too big!";
      }
    } else {
      $_SESSION['errorMessage'] = " There was an error uploading your file!";
    }
  } else {
    $_SESSION['errorMessage'] = "You cannot upload this type of Image";
  }
}

if (isset($_SESSION['username'], $_SESSION['password'])) {

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Job</title>


  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="shortcut icon" href="../../EmployeeSide/Image/apple-touch-icon.png" type="image/x-icon">
  <!--  -->

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">



  <!-- css file -->
  <link rel="stylesheet" href="../Css/addjob.css">
  <link rel="stylesheet" href="../../Job Portal/Pages/imageStorage">


</head>

<body>

  <header class="header">
    <div class="header__container">
      <img src="../Image/pngegg.png" alt="" class="header__img">

      <a href="#" class="header__logo">Hello Recruiter</a>

      <div class="header__search">
        <input type="search" placeholder="Search" class="header__input">
        <i class='bx bx-search header__icon'></i>
      </div>

      <div class="header__toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
      </div>
    </div>
  </header>

  <!-- nav -->
  <div class="nav" id="navbar">
    <nav class="nav__container">
      <div>
        <a href="#" class="nav__link nav__logo">
          <img src="../image/pngegg.png" class="header__img">
          <span class="nav__logo-name"></span>
        </a>

        <div class="nav__list">
          <div class="nav__items">
            <h3 class="nav__subtitle">Profile</h3>

            <a href="../Pages/index.php" class="nav__link active">
              <i class='bx bx-home nav__icon'></i>
              <span class="nav__name">Home</span>
            </a>

            <div class="nav__dropdown">
              <a href="../Pages/profile.php" class="nav__link">
                <i class='bx bx-user nav__icon'></i>
                <span class="nav__name">Profile</span>
                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
              </a>

              <div class="nav__dropdown-collapse">
                <div class="nav__dropdown-content">
                  <a href="#" class="nav__dropdown-item">Change Passwords</a>
                  <a href="#" class="nav__dropdown-item">Mail</a>
                  <a href="#" class="nav__dropdown-item">Accounts</a>
                </div>
              </div>
            </div>

            <a href="#" class="nav__link">
              <i class='bx bx-message-rounded nav__icon'></i>
              <span class="nav__name">Messages</span>
            </a>
          </div>

          <div class="nav__items">
            <h3 class="nav__subtitle">Menu</h3>

            <div class="nav__dropdown">
              <a href="#" class="nav__link">
                <i class='bx bx-bell nav__icon'></i>
                <span class="nav__name">Manage Job</span>
                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
              </a>

              <div class="nav__dropdown-collapse">
                <div class="nav__dropdown-content">
          
                  <a href="../Pages/inactive.php" class="nav__dropdown-item">Inactive Job</a>
                  <a href="../Pages/activejob.php" class="nav__dropdown-item">Active Job</a>
                  <a href="../Pages/addjob.php" class="nav__dropdown-item">Add Job</a>
                </div>
              </div>

            </div>

            <a href="#" class="nav__link">
              <i class='bx bx-user nav__icon'></i>
              <span class="nav__name">Applicant</span>
            </a>
            <!-- <a href="#" class="nav__link">
              <i class='bx bx-bookmark nav__icon'></i>
              <span class="nav__name">Add Job</span>
            </a> -->
          </div>
        </div>
      </div>

      <a href="../../EmployeeSide/Image/android-chrome-192x192.png" class="nav__link nav__logout">
        <i class='bx bx-log-out nav__icon'></i>
        <span class="nav__name">Log Out</span>
      </a>
    </nav>
  </div>

  <!-- content -->

  <main>

  <h2 style="text-transform: uppercase;">Posting Job</h2>

    <section>
      <div class="main">
        <div class="form-container">

        <?php
        $query = "SELECT id FROM regemployer WHERE username = '" . $_SESSION['username'] . "'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result)) {
          $row = mysqli_fetch_assoc($result);

        ?>

          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data" accept="image/png, image/jpeg, image/jpg" > 
          <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
            <div class="form-col">
              <div class="form-group">
                <label for="job-title">Job Title:</label>
                <input type="text" id="job-title" name="title" required>
              </div>
              <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>
              </div>
              <div class="form-group">
                <label for="location">Phone:</label>
                <input type="text" id="location" name="phone" required>
              </div>
              <div class="form-group">
                <label for="location">Email:</label>
                <input type="email" id="location" name="email" required>
              </div>
              <div class="form-group">
                <label for="location">Salary:</label>
                <input type="text" id="location" name="salary" required>
              </div>
              <div class="form-group">
                <label for="location">Info:</label>
                <input type="text" id="location" name="user_info" required>
              </div>
              <div class="form-group">
                <label for="location">Image:</label>
                <input type="file" id="location" name="file" required>
              </div>
            </div>
            <div class="form-col">
              <div class="form-group">
                <label for="job-description">Job Description:</label>
                <textarea id="job-description" name="description" style="height: 20rem;" required></textarea>
              </div>
            </div>
            <div class="form-col">
              <div class="form-group">
                <label for="job-description">Qualification:</label>
                <textarea id="job-description" name="qualification" style="height: 8.4rem;" required></textarea>
              </div>
            </div>
            <input type="submit" value="Post Job" name="submit">
            <input type="reset" value="Reset">
          </form>
        <?php
        }
      
        ?>
        </div>

      </div>



    </section>
  </main>

  <!-- js file -->
  <script src=" ../Javascript/openToggle.js"></script>
</body>

</html>

<?php
} else {
  header("location: ../../Job Portal/Pages/loginEmployee.php");
  session_destroy();
}
unset($_SESSION['prompt']);
mysqli_close($connection);
?>