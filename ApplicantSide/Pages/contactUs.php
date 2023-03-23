<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="shortcut icon" href="../../favicon/Your paragraph text (1)-modified.png" type="image/x-icon">
  <title>Contact Form | RGBC</title>

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

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>



  <!-- Style -->
  <link rel="stylesheet" href="../Css/contactUs.css">

</head>

<body>

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-5 mr-auto">
          <h2>Contact Us</h2>
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quaerat autem corrupti
            asperiores accusantium et fuga! Facere excepturi, quo eos, nobis doloremque dolor labore expedita illum
            iusto, aut repellat fuga!</p>

          <ul class="list-unstyled pl-md-5 mb-5">
            <li class="d-flex text-black mb-2">
              <span class="mr-3"><i class="fas fa-map-marker" style="color:#0d6efd; font-size: 20px"></i></span></span> Tugatog St. , <br> Manila, Philippines
             
            </li>
            <li class="d-flex text-black mb-2"><span class="mr-3"><i class="fas fa-phone" style="color:#0d6efd; font-size: 20px"></i></span></span> +699999999</li>
            <li class="d-flex text-black"><span class="mr-3"><i class="fas fa-envelope" style="color:#0d6efd; font-size: 20px" ></i></span></span>
              humanresource.rgbcmicrofinancems.com </li>
          </ul>
        </div>

        <div class="col-md-6">
          <form class="mb-5" method="post" id="contactForm" name="contactForm">
            <div class="row">

              <div class="col-md-12 form-group">
                <label for="name" class="col-form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" style="border: 1px solid black">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email" class="col-form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" style="border: 1px solid black">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="message" class="col-form-label">Message</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="7" style="border: 1px solid black"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn rounded-0 py-2 px-4" style="background-color: #0d6efd; color: #fff">
                <span class="submitting"></span>
                <input type="button" value="Cancel" onclick="location.href='../index.php'" class="btn1 btn1 rounded-0 py-2 px-4" style="background-color: #F6C53F; color: #fff">
                <span class="submitting"></span>
              </div>
            </div>
          </form>

          <div id="form-message-warning mt-4"></div>
          <div id="form-message-success">
       
          </div>
        </div>
      </div>

    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>