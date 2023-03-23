<?php

session_start();

include('../Job Portal/Pages/connection.php');

if (isset($_SESSION['username'], $_SESSION['password'])) {

if (isset($_POST['submit'])) {
  $id = $_POST['myid'];
  $file = $_FILES['file'];
  $applicant_name = $_POST['applicant_name'];
  $applied_job = $_POST['applied_job'];
  $email = $_POST['email'];
  $filename = $_FILES["file"]["name"];
  $tempname = $_FILES["file"]["tmp_name"];
  $folder = "Pages/resumeStorage/" . $filename;
  $folderDestination = $folder;

  if (!empty($filename)) {
    move_uploaded_file($tempname, $folderDestination);
    $sql = "INSERT INTO applicant_resume(applicant_id, resume_file, applicant_name, email, applied_job ) VALUES ('$id','$filename', '$applicant_name', '$email', '$applied_job')";
    $result = mysqli_query($connection, $sql);
    $_SESSION['message'] = "File uploaded successfully";
    header("location: index");
  } else {
    $_SESSION['errorMessage'] = "Failed to upload file";
  }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../favicon/Your paragraph text (1)-modified.png" type="image/x-icon">
  <title>Job | RGBC</title>

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
  <!-- bootstrap file -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



  <!-- sweetalert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.all.min.js"></script>



  <!-- Css file -->
  <link rel="stylesheet" href="../ApplicantSide//index.css">



</head>

<body>


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
  
  include '../Job Portal/Pages//loading.php';
  
  ?>

  <!-- My Logo -->

  <!-- header -->
  <header>
    <a href="" class="logo" style="text-decoration: none;"><img src="../Job Portal/Image/MyLogo-modified.png"> <span>Job Portal</span></a>

    <ul class="navbar">
      <li style="margin-top: 1rem;"><a href="#" style="text-decoration: none !important;">Home</a></li>

      

      <li style="margin-top: 1rem;"><a href="../ApplicantSide/Pages/contactUs" style="text-decoration: none !important;">Contact
          Us</a></li>

    </ul>

    <div class="main">
    <?php
            $query = "SELECT image FROM regapplicant WHERE username = '".$_SESSION['username']."'";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result)) {
              $row = mysqli_fetch_assoc($result);
              $image = $row['image'];

            ?>
     <img class="img-account-profile rounded-circle" style="height : 5vh; margin-right: -5rem; cursor: pointer" onclick="toggleUser()" <?php echo '<img src="Pages/profileStorage/' . $image . '" />'; ?> 
      <div class="bx bx-menu" id="menu-icon"></div>
<?php }?>
    </div>



    <div class="user_menu_wrap" id="userMenu" style="margin-top:1.5%;">
      <div class="user_menu">
      <?php
            $query = "SELECT image FROM regapplicant WHERE username = '".$_SESSION['username']."'";
            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result)) {
              $row = mysqli_fetch_assoc($result);
              $image = $row['image'];

            ?>
        <div class="user_info">
        
        <img class="img-account-profile rounded-circle" <?php echo '<img src="Pages/profileStorage/' . $image . '" />'; ?> 
                    
        
          <div>
     
            <h3><?php echo htmlspecialchars($_SESSION["username"]); ?></h3>

          </div>
        </div>
        <?php }?>
 
        <hr>


        <a href="Pages/accountInformation" class="menu_link" style="text-decoration: none !important;">
          <i class="fas fa-user"></i>
          <p>Account information</p>

          <a href="Pages/editProfile" class="menu_link" style="text-decoration: none !important;">
            <i class="fas fa-user-cog"></i>
            <p>Edit Profile</p>

            <a href="Pages/changePassword" class="menu_link" style="text-decoration: none !important;">
              <i class="fas fa-lock"></i>
              <p>Security</p>
            </a>


            <hr>

            <a href="../ApplicantSide/Pages/logout">
              <button class="signin" id="signin" button
                onClick="">Log
                out</button>

            </a>

      </div>
    </div>
<script>
    let userMenu = document.getElementById("userMenu");

    function toggleUser(){
        userMenu.classList.toggle("open_user");
    }

  </script>

  </header>



  <div class="homePage-search"
    style=" background-image: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.5) 100%),  url(Image/hunters-race-MYbhN8KaaEc-unsplash.jpg ) !important;">
    <div class="home-search">
      <form action="../ApplicantSide/Pages/searchResult" method="GET" class="searchBar">
        <input type="text" placeholder="Search Job" name="search">
        <button type="submit" name="apply"><i class="fas fa-search"></i></button>
      </form>
    </div>
  </div>




  <div class="nextPage">
    <div class="container-fluid">
      <div class="row">

        <?php
          $query = "SELECT * FROM job_vacancies";
          $result = mysqli_query($connection, $query);
          $queryResult = mysqli_num_rows($result);
   ?>

        <?php 

      if($queryResult > 0){
              while ($row = mysqli_fetch_assoc($result)) {
                $image = $row['image'];
           
  ?>



        <div class="col-lg-3">
        <a href="../ApplicantSide/Pages/fullquali2?Id=<?php echo $row['Id']; ?>" style="color:black; text-decoration: none;">
            <div class="card-content" style="display: none;">
              <input type="hidden" name="Id" value="<?php echo $row['Id'];?>">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top"
                <img src="../Job Portal/Image/MyLogo-modified.png" alt="" style="float: left">
                  <div class="card-body" >
                <br>
                <span class="tag"><?php echo $row['title'];?></span>
                <br>


                <hr>
                <h4>Description:</h4>
                <p><?php echo $row['description'];?></p>
                <br>
                <i class="fas fa-map-marker-alt">
                  <small
                    style="margin-left: 1rem; font-size: 16px; color: black; font-weight: normal;"><?php echo $row['location'];?></small></i>
                <hr>
                <!-- <span class="read-more-text"> -->





                <div class="card_footer">
                  <div class="user">

                    <div class="">
                      <h5 style="   font-size: 1rem;">Posted on:<small
                          style="margin-left: 5px; font-size: 15px; color: black"><?php echo $row['date'];?></small>
                      </h5>

                    </div>
                  </div>
                </div>
                <!-- </span>
            <span class="read-more-btn">Read more...</span> -->
              </div>
            </div>
          </a>



        </div>
      </div>

      <?php
}
}
?>

    </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    $query = "SELECT * FROM regapplicant WHERE username = '" . $_SESSION['username'] . "'";
                    $result = mysqli_query($connection, $query);
                    $row = mysqli_fetch_assoc($result);
                    ?>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"
              enctype="multipart/form-data">

              <input type="hidden" value="<?php echo $row['id']?>" name="myid">


              <div class="form-group">
                <label for="">Applied Job</label>
                <input type="text" class="form-control"
                  placeholder="Enter job" name="applied_job" required>
              </div>

              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" 
                  placeholder="Enter name"  name="applicant_name"  required>
              </div>

              <div class="form-group">
                <label for="">Email address</label>
                <input type="email" class="form-control"
                  placeholder="Enter email" name="email" required>
              </div>

              <div class="form-group">
                <label for="">Contact</label>
                <input type="tel" class="form-control"
                  placeholder="Enter contact" name="contact" required>
              </div>

              <br>

              <input type="file" name="file" style="border: 1px solid black"> 

          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
          </form>
        </div>
      </div>
    </div>

  <!-- end of row -->

  <nav aria-label="Page navigation for Available Jobs">
    <br><br>
    <ul class="pagination justify-content-center">
      <li class="page-item previous-page disabled">
        <a class="page-link" href="#" tabindex="-1">Previous</a>
      </li>
      <li class="page-item current-page active"><a class="page-link " href="#">1</a></li>
      <li class="page-item current-page"><a class="page-link " href="#">2</a></li>
      <li class="page-item current-page"><a class="page-link " href="#">3</a></li>
      <li class="page-item dots"><a class="page-link " href="#">...</a></li>
      <li class="page-item next-page">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>


  </div>
  </div>

  <!-- end of card -->



  <!-- Script file -->


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


<script>
  function getPageList(totalPages, page, maxLength) {
    function range(start, end) {
      return Array.from(Array(end - start + 1), (_, i) => i + start);
    }

    var sideWidth = maxLength < 9 ? 1 : 2;
    var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
    var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

    if (totalPages <= maxLength) {
      return range(1, totalPages);
    }

    if (page <= maxLength - sideWidth - 1 - rightWidth) {
      return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
    }

    if (page >= totalPages - sideWidth - 1 - rightWidth) {
      return range(1, sideWidth).concat(0, range(totalPages - sideWidth - 1 - rightWidth - leftWidth, totalPages));
    }

    return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth +
      1, totalPages));
  }

  $(function() {
    var numberOfItems = $(".card-content .card").length;
    var limitPerPage = 12;
    var totalPages = Math.ceil(numberOfItems / limitPerPage);
    var paginationSize = 7;
    var currentPage;

    function showPage(whichPage) {
      if (whichPage < 1 || whichPage > totalPages) return false;

      currentPage = whichPage;

      $(".card-content .card").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

      $(".pagination li").slice(1, -1).remove();

      getPageList(totalPages, currentPage, paginationSize).forEach(item => {
        $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
          .toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
            .attr({
              href: "javascript:void(0)"
            }).text(item || "...")).insertBefore(".next-page");
      });

      $(".previous-page").toggleClass("disabled", currentPage === 1);
      $(".next-page").toggleClass("disabled", currentPage === totalPages);
      return true;
    }

    $(".pagination").append(
      $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({
        href: "javascript:void(0)"
      }).text("Previous")),
      $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({
        href: "javascript:void(0)"
      }).text("Next")),

    );

    $(".card-content").show();
    showPage(1);

    $(document).on("click", ".pagination li.current-page:not(.active)", function() {
      return showPage(+$(this).text());
    });
  });
  </script>

  <script type="text/javascript" src="../Job Portal/JavaScript/OpenMenu.js"></script>
  <script type="text/javascript" src="../JavaScript/Menu-user.js"></script>


</body> 



</html>

<?php


  }
else{
  header('location: ../Job Portal/Pages/loginApplicant');
  session_destroy();
}
unset($_SESSION['prompt']);
mysqli_close($connection);



?>