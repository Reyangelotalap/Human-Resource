<?php

session_start();

include '../../Job Portal/Pages/connection.php';

if(isset($_POST['apply'])){

  if (!isset($_SESSION['username'])) {
    echo "Hello";
  }
  else {
    header("location:../Pages/loginApplicant.php");
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
  <link rel="stylesheet" href="../Css//JobVacancies.css">



</head>

<body>

  <?php
  
  // include '../Pages//loading.php';
  
  ?>

  <!-- My Logo -->

  <header>
    <a href="../index.php" class="logo"><img src="../Image/MyLogo-modified.png"> <span
        style="text-decoration: none !important;">Job Portal</span></a>

    <ul class="navbar">
      <li><a href="../index.php" style="text-decoration: none !important;">Home</a></li>

      <li><a href="../index.php #section-about" style="text-decoration: none !important;">About</a></li>

      <li><a href="../index.php #section-contact" style="text-decoration: none !important;">Contact</a></li>

    </ul>


    <div class="main">
      <button class="signin" id="signin" button onClick="location.href='../Pages/loginApplicant'">Sign
        in</button>
      <button class="hehe" id="button" onClick="location.href='../Pages/regApplicant'">Register</button>
      <div class="bx bx-menu" id="menu-icon"></div>

    </div>

  </header>



  <div class="homePage-search"
    style=" background-image: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.5) 100%),  url(../Image/hunters-race-MYbhN8KaaEc-unsplash.jpg ) !important;">
    <div class="home-search">
      <form action="../Pages/searchResult.php" method="GET" class="searchBar">
        <input type="text" placeholder="Search Job" name="search">
        <button type="submit" name="submit"><i class="fas fa-search"></i></button>
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
          <a href="fullquali?Id=<?php echo $row['Id']; ?>" style="color:black; text-decoration: none;">
            <div class="card-content" style="display: none;">
              <input type="hidden" name="Id" value="<?php echo $row['Id'];?>">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top"
               <img src="../../Job Portal/Image/MyLogo-modified.png" alt="" style="float: left">
                   <div class="card-body">
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

                    <div class="user_info">
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

  <script type="text/javascript" src="../JavaScript/OpenMenu.js"></script>
  <!-- <script src="../JavaScript/pagination.js"></script> -->
  <!-- <script src="../JavaScript/readmore.js"></script> -->

</body>

</html>