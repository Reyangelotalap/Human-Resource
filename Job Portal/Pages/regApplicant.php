
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../../favicon/Your paragraph text (1)-modified.png" type="image/x-icon">
  <title>Registration | RGBC</title>

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- Css file -->
  <link rel="stylesheet" href="../../Job Portal/Css//RegistrationForm.css">

  <!-- sweetalert -->
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>



</head>

<body>





  <?php
  
  include '../Pages//loading.php'
  
  ?>

  <section class="vh-100">

    <img src="../Image/MyLogo-modified.png" class="py-3" style="margin-left: 2rem; height: 10vh;  cursor: pointer"
      onClick="location.href='../index'">

    <div class="login">
      <h2>Registration</h2>
      <br>
      <form action="regApplicantquery" method="post" class="needs-validation"
        novalidate>



        <form class="needs-validation" novalidate>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" id="validationCustom01" name="firstname" placeholder="Firstname"
                required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" id="validationCustom02" name="lastname" placeholder="Lastname"
                required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>
          <br>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <input type="email" class="form-control" id="validationCustom03" name="email" placeholder="Email"
                required>
              <div class="invalid-feedback">
                Please provide a valid email.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <input type="username" class="form-control" id="validationCustom04" name="username" placeholder="Username"
                required>
              <div class="invalid-feedback">
                Please provide a username.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <input type="password" class="form-control" id="validationCustom05" name="password" placeholder="Password"
                required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
              <div class="invalid-feedback">
                Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more
                characters.
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to <a href="../../Job Portal/termsandcondition"
            style="color: #0d6efd; text-align:center;">Term & Conditions</a>
              </label>
              
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          <button class="btn btn-primary mx-auto d-flex justify-content-center" type="submit" name="signup">Sign
            up</button>
          <span style=" font-size: 1.2rem; display: flex; justify-content: center ;"> Already have an account? <a
              href="../Pages/loginApplicant"
              style=" text-decoration: none; right: 2rem; border: none; outline: none;"> Login here</a></span>
        </form>
    </div>

  </section>

  <footer id="footer">
    <p style="display: flex; align-items: center; justify-content: center; font-size: 18px; margin-top: -3rem">RG
      Bangalon &copy; 2023 All Rights Reserved. </p>
  </footer>

  <!-- js file -->

  <script>
  const inputs = document.querySelectorAll(".input");


  function addcl() {
    let parent = this.parentNode.parentNode;
    parent.classList.add("focus");
  }

  function remcl() {
    let parent = this.parentNode.parentNode;
    if (this.value == "") {
      parent.classList.remove("focus");
    }
  }


  inputs.forEach(input => {
    input.addEventListener("focus", addcl);
    input.addEventListener("blur", remcl);
  });
  </script>


  <script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  </script>




  <script src="../JavaScript/OpenMenu.js"></script>
  <script src="../JavaScript//RegistrationForm.js"></script>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>

</html>