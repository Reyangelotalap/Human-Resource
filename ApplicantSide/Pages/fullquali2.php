<?php

session_start();

include '../../Job Portal/Pages/connection.php';



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


  <!-- bootstrap file -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>





  <!-- Css file -->
  <!-- <link rel="stylesheet" href="../../ApplicantSide/index.css"> -->
 <link rel="stylesheet" href="../Css//fullquali2.css">

  <style>
    .qualification-list{
      margin: 1em;
    } 
    .qualification-list li{
      list-style-type: disc !important;
    }
    .qualification-list li:empty {
      list-style: none !important;
    }
    /* ul li {
    list-style-type: disc;
   } */
  </style>


</head>

<body>

  <?php
  
  // include '../Pages//loading.php';
  
  ?>

  <!-- My Logo -->

  <?php 
      if(isset($_SESSION['message'])){ ?>
  <script>
  Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: '<?php echo $_SESSION['message']?>',
    showConfirmButton: false,
    timer: 1500
  })
  </script>
  <?php unset($_SESSION['message']); }?>


  <?php
  

  
  ?>

  <!-- My Logo -->

  <!-- header -->
  <header>
    <a href="" class="logo"><img src="../../ApplicantSide/Image/MyLogo-modified.png"> <span>Job Portal</span></a>

    <ul class="navbar">
      <li style="margin-top: 1rem;"><a href="#" style="text-decoration: none !important;">Home</a></li>

      <li style="margin-top: 1rem;"><a href="#" style="text-decoration: none !important;">Available Job</a></li>

      <li style="margin-top: 1rem;"><a href="../Pages/contactUs" style="text-decoration: none !important;">Contact
          Us</a></li>

          <li style="margin-top: 1rem;"><a href="../index" style="text-decoration: none !important;">Find
          Job</a></li>

    </ul>

    <div class="main">

      <img src="../../ApplicantSide/Image/3135715.png" style="height : 5vh; margin-right: -5rem; cursor: pointer"
        onclick="toggleUser()">
      <div class="bx bx-menu" id="menu-icon"></div>

    </div>



    <div class="user_menu_wrap" id="userMenu" style="margin-top:1.5%;">
      <div class="user_menu">

        <div class="user_info">
          <img src="../../ApplicantSide/Image/3135715.png">
          <div>
            <h3><?php echo htmlspecialchars($_SESSION["username"]); ?></h3>

          </div>
        </div>

        <hr>


        <a href="Pages/accountInformation.php" class="menu_link" style="text-decoration: none !important;">
          <i class="fas fa-user"></i>
          <p>Account information</p>

          <a href="Pages/editProfile.php" class="menu_link" style="text-decoration: none !important;">
            <i class="fas fa-user-cog"></i>
            <p>Edit Profile</p>

            <a href="Pages/changePassword.php" class="menu_link" style="text-decoration: none !important;">
              <i class="fas fa-lock"></i>
              <p>Security</p>
            </a>




            <hr>

            <a href="../Pages/logout.php">
              <button class="signin" id="signin" button>Log
                out</button>

            </a>

      </div>
    </div>
    <script>
    let userMenu = document.getElementById("userMenu");

    function toggleUser() {
      userMenu.classList.toggle("open_user");
    }
    </script>

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

            <div class="card"  style="  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px !important;">

              <div class="card-body">
                <h5 class="card-title" style="text-align: center;"><?php echo $row['title'];?></h5>

                <br>
                <br>
                <h4>Qualification:</h4>
                <ul class="qualification-list">
                <?php 
                    $qualification = $row['qualification'];
                    $qualification_array = explode("\n", $qualification);
                    foreach ($qualification_array as $item) {
                        if (!empty(trim($item))) {
                            echo "<li>" . trim($item) . "</li>";
                        }
                    }
                ?>
          </ul>

                <div style="text-align: right; margin: 1rem">
                  <a href=""  class="btn btn-primary" id="hehe" data-toggle="modal" data-target="#exampleModalCenter">Apply</a>
                </div>
              </div>
            </div>

            <br>
            <br>

            <div class="card"  style="  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px !important;">
              <div class="card-body">


                <br>
                <h4>Description:</h4>
                <p style="line-height: 2rem;"><?php echo $row['description'];?></p>
                <br>
               

                <h4>Salary:</h4>
                <p><?php echo $row['salary'];?></p>
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

                    <div class="" style="margin: 0 1rem; margin-top: -3rem ">
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



  <!--  Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Upload your resume</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <?php

      


            $links = "SELECT * FROM regapplicant WHERE username = '" . $_SESSION['username'] . "'";
            $link_results = mysqli_query($connection, $links);
            $erows = mysqli_fetch_assoc($link_results);


              $job_id = $_GET['Id'];

            $linked = "SELECT * FROM job_vacancies WHERE Id = '$job_id'";
            $link_resultse = mysqli_query($connection, $linked);
            $erowed = mysqli_fetch_assoc($link_resultse);


               ?>

          <form action="../../ApplicantSide/Pages/addresume.php" method="post" enctype="multipart/form-data">



            <input type="hidden" value="<?php echo $erows['id']?>" name="reg_id">


            <input type="hidden" value="<?php echo $job_id?>" name="job_id">

            <div class="form-group">
              <label for="">Applied Job</label>
              <input type="text" class="form-control" placeholder="Enter Job" name="applied_job" required value="<?php echo $erowed['title']?>" disabled>
            </div>

            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control"  name="applicant_name" required value="<?php echo $erows['firstname'], " " , $erows['lastname'];?>" disabled> 
            </div>

            <div class="form-group">
              <label for="">Email address</label>
              <input type="email" class="form-control" placeholder="Enter email" name="email" required value="<?php echo $erowed['email']?>" disable>
            </div>

            <div class="form-group">
              <label for="">Contact Number</label>
              <input type="number" class="form-control" placeholder="Enter contact" name="contact" required>
            </div>


            <input type="file" name="file" accept="application/pdf" required>

        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
        </form>

      </div>
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