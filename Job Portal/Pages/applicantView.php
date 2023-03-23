<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../Image//MyLogo-modified.png" type="image/x-icon">
  <title>Job Portal</title>

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

  <!-- Css file -->

  <link rel="stylesheet" href="../Css//applicantView.css">

</head>

<body>

  <?php
  
  include '../Pages//loading.php'
  
  ?>

  <!-- My Logo -->
  <section id="content">
    <header>
      <a href="" class="logo"><img src="../Image/MyLogo-modified.png"> <span>Job Portal</span></a>

      <ul class="navbar">
        <li><a href="#">Home</a></li>
        <hr>
        <li><a href="#section-about">About</a></li>
        <hr>
        <li><a href="#section-contact">Contact</a></li>
        <hr>
      </ul>

      <div class="main">
        <button class="signin" id="signin" button onClick="location.href='../Pages/index #content'">Sign in</button>
        <button class="hehe" id="button" onClick="location.href='../Pages/index #content'">Register</button>
        <div class="bx bx-menu" id="menu-icon"></div>

      </div>

    </header>

  </section>




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

  <script type="text/javascript" src="../JavaScript/OpenMenu.js"></script>

</body>

</html>