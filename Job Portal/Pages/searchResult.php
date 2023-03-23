<?php

include '../../Job Portal/Pages/connection.php';

global $search;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Result | RGBC</title>
  <link rel="shortcut icon" href="../Image/MyLogo-modified.png" type="image/x-icon">


  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- bootstrap file -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



  <!-- css file -->
  <link rel="stylesheet" href="../../Job Portal/Css//searchResult.css">

</head>

<body>


  <?php
  
  include '../Pages//loading.php';
  
  ?>

  <!-- My Logo -->

  <header>
    <a href="../index" class="logo" style="text-decoration: none;"><img src="../Image/MyLogo-modified.png"> <span>Job Portal</span></a>

    <ul class="navbar">
      <li style="text-decoration: none;"><a href="../index">Home</a></li>
      <li style="text-decoration: none;"><a href="../index #section-about">About</a></li>
      <li  style="text-decoration: none;"><a href="../index #section-contact">Contact</a></li>
      <li  style="text-decoration: none;"><a href="../Pages/JobVacancies">Find Job</a></li>
    </ul>

    <div class="main">
      <button class="signin" id="signin" button onClick="location.href='../Pages/loginApplicant.php'">Sign
        in</button>
      <button class="hehe" id="button" onClick="location.href='../Pages/regApplicant.php'">Register</button>
      <div class="bx bx-menu" id="menu-icon"></div>

    </div>

  </header>



  <?php
          if (isset($_GET['submit'])) {
              $search = $_GET['search'];
              $query = "SELECT * FROM job_vacancies WHERE title LIKE '%$search%' OR qualification LIKE  '%$search%'" ;
              $result = mysqli_query($connection, $query);
              $queryResult = mysqli_num_rows($result);
       ?>

  <?php
                if($queryResult > 0){
                  while ($row = mysqli_fetch_assoc($result)) {
                    $image = $row['image'];
      ?>

      



<div class="nextPage">
    <div class="container-fluid">
      <div class="row">

        <div class="viewcard">
          <div class="image-container" style="position: relative;">

          <span style="text-transform: uppercase; font-size:18px; text-align:center;" class="found">Search Result for
"<?php echo $search;?>"</span>

            <div class="card"  style="  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px !important;">

              <div class="card-body">
                <h5 class="card-title" style="text-align: center;"><?php echo $row['title'];?></h5>

                <br>
                <br>
                <h4>Qualification:</h4>
                <ul>
                  <p><?php echo $row['qualification'];?></p>
                </ul>

                <div style="text-align: right; margin: 1rem">
                  <a href="../Pages/loginApplicant.php" class="btn btn-primary">Apply</a>
                </div>
              </div>
            </div>

            <br>
            <br>

            <div class="card"  style="  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px !important;">
              <div class="card-body">


                <br>
                <h4>Description:</h4>
                <p><?php echo $row['description'];?></p>
                <br>
               

                <h4>Salary:</h4>
                <p><?php echo $row['salary'];?></p>
                  <br>


                <h4>Benefits:</h4>
                <p><?php echo $row['description'];?></p>

                <br>
                <i class="fas fa-map-marker-alt"><small
                    style="margin-left: 1rem; font-size: 16px; color: #333; font-weight: normal;"><?php echo $row['location'];?></small></i>
                <br>
                <br>
                <i class="fas fa-envelope"><small
                    style="margin-left: 1rem; font-size: 16px; color: #333; font-weight: normal;"><?php echo $row['email'];?></small></i>
                <br>
                <br>
                <i class="fas fa-phone-volume"><small
                    style="margin-left: 1rem; font-size: 16px; color: #333; font-weight: normal;"><?php echo $row['phone'];?></small></i>
                <br>


                <br>
                <div class="card_footer">
                  <div class="user">

                    <div class="user_info" style="margin: 0 1rem; margin-top: -3rem ">
                      <h5 style="font-size: 1rem;">Posted on:<small
                          style="margin-left: 5px; font-size: 15px; color: black"><?php echo $row['date'];?></small>
                      </h5>

                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
          <!-- </span>
            <span class="read-more-btn">Read more...</span> -->
        </div>
      </div>



    </div>
  </div>
  </div>
  <!-- end of row -->




    <?php
}
}
          }
?>

  </div>





  <!-- end of card -->



  <!-- For register -->
  <!-- 
  <div class="bg-modal" id="mymodal">
    <div class="modal-content">
      <div class="close"><i class="fas fa-times"></i></div>
      <p>Select you want to register.</p>
      <br>
      <button class="applicant"><a href="../Pages/regApplicant.php"
          style="color: white;text-decoration: none !important;">Jobseeker</a></button>
      <button class="employee"><a href="../Pages/regEmployee.php"
          style="color: #0d6efd;text-decoration: none !important;">Employer</a></button>
    </div>
  </div> -->

  <!-- for login -->

  <!-- <div class="bg-modalLogin" id="mymodal">
    <div class="modal-content">
      <div class="closeLogin"><i class="fas fa-times"></i></div>
      <p>Select you want to sign in.</p>
      <br>
      <button class="applicant"><a href="../Pages/loginApplicant.php"
          style="color: white; text-decoration: none !important;">Jobseeker</a></button>
      <button class="employee"><a href="../Pages/loginEmployee.php"
          style="color: #0d6efd ;text-decoration: none !important;">Employer</a></button>
    </div>
  </div> -->



  <script>
  document.getElementById('button').addEventListener('click', function() {

    document.querySelector('.bg-modal').style.display = 'flex';
  });

  document.querySelector('.close').addEventListener('click', function() {

    document.querySelector('.bg-modal').style.display = 'none';
  });
  </script>

  <script>
  document.getElementById('signin').addEventListener('click', function() {

    document.querySelector('.bg-modalLogin').style.display = 'flex';
  });

  document.querySelector('.closeLogin').addEventListener('click', function() {

    document.querySelector('.bg-modalLogin').style.display = 'none';
  });
  </script>

  <script src="../JavaScript//OpenMenu.js"></script>

</body>

</html>