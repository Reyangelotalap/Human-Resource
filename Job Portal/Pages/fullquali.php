<?php

session_start();

include '../../Job Portal/Pages/connection.php';

if(isset($_POST['apply'])){

  if (!isset($_SESSION['username'])) {
    echo "Hello";
  }
  else {
    header("location:../Pages/loginApplicant");
    $_SESSION['werror'] = "It seems that you are not already login. You must login first before applying to the job!";
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
  <title>Job Vacancies | RGBC</title>

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


  <!-- Css file -->

  <link rel="stylesheet" href="../Css//card.css">


</head>

<body>

  <?php
  
  // include '../Pages//loading.php';
  
  ?>

  <!-- My Logo -->

  <header>
    <a href="../index" class="logo"><img src="../Image/MyLogo-modified.png"> <span
        style="text-decoration: none !important;">Job Portal</span></a>

    <ul class="navbar">
      <li><a href="../index.php" style="text-decoration: none !important;">Home</a></li>

      <li><a href="../index #section-about" style="text-decoration: none !important;">About</a></li>

      <li><a href="../index #section-contact" style="text-decoration: none !important;">Contact</a></li>

      <li><a href="../../Job Portal/Pages/JobVacancies" style="text-decoration: none !important;">Find Job</a></li>

    </ul>


    <div class="main">
      <button class="signin" id="signin" button onClick="location.href='../Pages/loginApplicant'">Sign
        in</button>
      <button class="hehe" id="button" onClick="location.href='../Pages/regApplicant'">Register</button>
      <div class="bx bx-menu" id="menu-icon"></div>

    </div>

  </header>







  <div class="nextPage">
    <div class="container-fluid">
      <div class="row">

        <?php

  $job_vacancy_id = $_GET['Id'];

  $query = "SELECT * FROM job_vacancies WHERE Id = $job_vacancy_id";
  $result = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($result);

  $image = $row['image'];

?>

        <!-- Display the job vacancy's data on the page -->


        <div class="viewcard">
          <div class="image-container" style="position: relative;">

            <div class="card">

              <div class="card-body" style="  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px !important;">
                <h5 class="card-title" style="text-align: center;"><?php echo $row['title'];?></h5>

                <br>
                <br>
                <h4>Qualification:</h4>
                <ul>
                  <p><?php echo $row['qualification'];?></p>
                </ul>

                <div style="text-align: right; margin: 1rem">
                  <a href="../Pages/loginApplicant" class="btn btn-primary">Apply</a>
                </div>
              </div>
            </div>

            <br>
            <br>

            <div class="card" style="  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px !important;">
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




  </div>
  </div>

  <!-- end of card -->


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



  <script type="text/javascript" src="../JavaScript/OpenMenu.js"></script>
  <!-- <script src="../JavaScript/pagination.js"></script> -->
  <!-- <script src="../JavaScript/readmore.js"></script> -->

</body>

</html>