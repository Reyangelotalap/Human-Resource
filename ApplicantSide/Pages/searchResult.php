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
  <link rel="stylesheet" href="../Css/searchResult.css">

</head>

<body>



  <!-- My Logo -->

  <header>
    <a href="" class="logo" style="text-decoration: none;"><img src="../../Job Portal/Image/MyLogo-modified.png">
      <span>Job Portal</span></a>

    <ul class="navbar">
      <li style="margin-top: 1rem;"><a href="#" style="text-decoration: none !important;">Home</a></li>



      <li style="margin-top: 1rem;"><a href="../ApplicantSide/Pages/contactUs.php"
          style="text-decoration: none !important;">Contact
          Us</a></li>

    </ul>

    <div class="main">

      <img src="../../Job Portal/Image/3135715.png" style="height : 5vh; margin-right: -5rem; cursor: pointer"
        onclick="toggleUser()">
      <div class="bx bx-menu" id="menu-icon"></div>

    </div>



    <div class="user_menu_wrap" id="userMenu" style="margin-top:1.5%;">
      <div class="user_menu">

        <div class="user_info">
          <img src="../../Job Portal/Image/3135715.png">

          <div>


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

            <a href="../../ApplicantSide/Pages/logout.php">
              <button class="signin" id="signin" button onClick="">Log
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




  <?php
          if (isset($_GET['apply'])) {
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

            <div class="card">

              <div class="card-body">
                <h5 class="card-title" style="text-align: center;"><?php echo $row['title'];?></h5>

                <br>
                <br>
                <h4>Qualification:</h4>
                <ul>
                  <p><?php echo $row['qualification'];?></p>
                </ul>

                <div style="text-align: right; margin: 1rem">
                  <a href=""  class="btn btn-primary" id="hehe" data-toggle="modal" data-target="#exampleModalCenter">Apply</a>
                </div>
              </div>
            </div>

            <br>
            <br>

            <div class="card">
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




  <?php
}
}
          }
?>


    


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

      


            $links = "SELECT id FROM regapplicant WHERE username = '" . $_SESSION['username'] . "'";
            $link_results = mysqli_query($connection, $links);
            $erows = mysqli_fetch_assoc($link_results);

            $linked = "SELECT * FROM job_vacancies ";
            $link_resultse = mysqli_query($connection, $linked);
            $erowed = mysqli_fetch_assoc($link_resultse);


               ?>

          <form action="../../ApplicantSide/Pages/addresume.php" method="post" enctype="multipart/form-data">



            <input type="hidden" value="<?php echo $erows['id']?>" name="reg_id">



            <div class="form-group">
              <label for="">Applied Job</label>
              <select name="applied_job" class="form-control">
                <option value="">Select Job</option>
                <option value="<?php echo $erowed['title']?>"><?php echo $erowed['title']?></option>
              </select>
            </div>

            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control" placeholder="Enter name" name="applicant_name" required>
            </div>

            <div class="form-group">
              <label for="">Email address</label>
              <input type="email" class="form-control" placeholder="Enter email" name="email" required>
            </div>

            <input type="file" name="file"  accept="application/pdf,application/vnd.ms-excel" > 

        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
        </form>

      </div>
    </div>
  </div>







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

  
  <script type="text/javascript" src="../Job Portal/JavaScript/OpenMenu.js"></script>
  <script type="text/javascript" src="../JavaScript/Menu-user.js"></script>

</body>

</html>

