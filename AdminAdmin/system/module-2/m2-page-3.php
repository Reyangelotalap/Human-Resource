
<?php
session_start();
include('../../crud/connection.php');



  if (isset($_SESSION['username'], $_SESSION['password'])) {


    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Include config file
        include('../../crud/connection.php');
        
        // Prepare a select statement
        $sql = "SELECT * FROM examination_tbl WHERE id = ?";
        
        if($stmt = mysqli_prepare($connection, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = trim($_GET["id"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
        
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                   
                    $id = $row["id"];
                    $email = $row["email"];
                  
                 
                 
                } else{
                    // URL doesn't contain valid id parameter. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    
    } 
    
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../../favicon/Your paragraph text (1)-modified.png" type="image/x-icon">
    <title>Email Configuration | RGBC</title>

    <link rel="stylesheet" href="https://kit.fontawesome.com/064cb16be2.css">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/javascript-state-machine/3.1.0/state-machine.min.js">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://kit.fontawesome.com/064cb16be2.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!-- data table -->

    <link rel="stylesheet"
        href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" />
    <script type="text/javascript"
        src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js">
    </script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <!-- OWN STYLE -->
    <link rel="stylesheet" href="../module-1/module-1-css//m1-page-2.css">
    <link rel="stylesheet" href="../include/css//sidebar.css">
    <link rel="stylesheet" href="../include/css//main.css">

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- text editor -->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>



</head>

<body>

    <?php
include '../include/header.php';
?>

    <main class="main">

        <header>
            <div class="pagetitle">
                <h1>Email Configuration</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../dashboard/dashboard.php">Home</a>
                        </li>

                        <li class="breadcrumb-item ">Email Configuration</li>
                    </ol>
                </nav>
            </div>
        </header>



        <section>

                <br>
                <div class="row">
                    
                <form action="../dashboard/mailExam.php?id=<?php echo $id; ?>" method="POST" id="contact-form" class="contact-form">

                    <input type="hidden" value="<?php echo $row["id"]; ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" autocomplete="on" id="Name"
                                        placeholder="Subject" value="Informing Letter">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" autocomplete="on" id="email"
                                        placeholder="E-mail" readonly value="<?php echo $row["email"]; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="Message" id="editor1" rows="30" cols="80" type="text"><p style="text-align:justify;">Dear <b><?php echo $row["applicant_name"]; ?></b> ,<br><br>

I would like to take a moment to express my sincere appreciation for your interest in RGBC and for taking the time to apply for the <b><?php echo $row["applied_job"]; ?></b> role. 
<br>
<br>

We are pleased to inform you that you have been selected to take an examination as part of our organization's selection process. The examination is designed to assess your knowledge, skills, and abilities related to the  for which you have applied. <br> Your examination will be held online.

To ensure a smooth online examination experience, please ensure that you have a stable internet connection and a suitable device (such as a computer or tablet)  <br> to access the examination.  Please note that the examination will become mail to you exactly 20 minutes after informing you.

<br>
<br>

We wish you the best of luck and hope that you perform to the best of your abilities.

<br><br>
Sincerely,

<b>RGBC Lending Investor Company.</b>
</p>
                                      </textarea>
                                    <script>
                                    CKEDITOR.replace('editor1');
                                    </script>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right" name="submit" style="font-family: poppins; font-weight: 700; font-size: 12px">Send a message</button>
                                    <button type="button" onclick="history.back()" class="btn btn-danger pull-right" style="font-family: poppins; font-weight: 700; font-size: 12px; margin: 0 1rem">Cancel</button>
                                </div>
                            </div>
                    </form>
                </div>

                

               
   

        </section>


        <?php
    include '../include/footer.php';
    ?>

    </main>


    <?php
include '../include/script.php';
?>


   

</body>

</html>


<?php

}
  else{
    header('location: ../../../managementLoginForm/pages/index.php');
    session_destroy();
  }
unset($_SESSION['prompt']);
mysqli_close($connection);
?>