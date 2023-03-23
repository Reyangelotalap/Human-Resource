<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>


  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>


  <!--CSS FILE-->
  <link rel="stylesheet" href="../Css/ForgotPassword.css">


</head>

<body>

  <div class="container">
    <div class="inner-box">

      <h2 class="title">Reset Password</h2>
      <hr class="line">
      <p class="direction">Please enter your email address to identify your account to reset your password</p>
      <h3 class="text">Enter your Email.</h3>

      <div class="row mb-3">
        <form action="">

          <div class="col-lg-7 col-md-12 input-field">
            <i class="fas fa-users"></i>
            <input type="text" placeholder="Username" required>
          </div>

          <div class="col-lg-3">
            <input type="submit" class="btn btn-light" value="Reset Password" required style="width: 10rem; ">
          </div>

          <div class="col-lg-3">
            <button type="button" onclick="location.href='../Pages/LoginForm.php';"
              class="btn" style="margin: -3.1rem 12rem; width: 10rem; background-color: #aaa" id="btn2">Cancel</button>
          </div>

        </form>
      </div>

      <div class="image">
        <img src="../Image/Forgot password-cuate.png" alt="">
      </div>


    </div>
  </div>




  <!--FOOTER-->
  <footer id="footer">
    <p>RG Bangalon &copy; 2023. All right reserved.</p>
  </footer>
  <!--END OF FOOTER-->

</body>

</html>