<?php
session_start();
include('Connection.php');

if(isset($_SESSION['Username'], $_SESSION['Password'])){

?>

<?php
$link = mysqli_connect("localhost", "root", "", "human_resource 1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
            $query = "SELECT * FROM regapplicant";
        $result = mysqli_query( $link,$query);
        $row = mysqli_num_rows($result);
      ?>  

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="refresh" content="3540; url=index.php">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recruitment</title>

  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>




  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  
  <!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/plug-ins/1.13.2/sorting/absolute.js" />
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- modal -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">


  <!--css file-->
  <link rel="stylesheet" href="../Css/Recruitment.css">
  <link rel="stylesheet" href="../Css/css.css">
  <link rel="stylesheet" href="../Css/dsh.css">


  <!--modal file-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <!--css file-->



</head>

<body>


  <?php 
if(isset($_SESSION['message'])){ ?>
  <script>
  swal({
    title: "Succesfully Login",
    text: "<?php echo $_SESSION['message'];?>",
    icon: "success",
    button: "OK"
  })
  </script>
  <?php unset($_SESSION['message']); }?>



<section id="menu">
  <div class="logo">
    <i class='fas fa-circle'></i>
    <h2>RGBC</h2>
  </div>

  <div class="items">

    <li>
      <a href="../pages/Recruitment.php">
        <i class="la la-search"></i>
        <span class="link">Recruitment</span>
      </a>

    </li>
    <li>
      <a href="../pages/Applicant.php">
        <i class="las la-user-friends"></i>
        <span class="link">Applicant</span>
      </a>

    </li>
    <li>
      <a href="../pages/Learning.php">
        <i class="las la-file-invoice"></i>
        <span class="link">Learning</span>
      </a>

    </li>
    <li>
      <a href="../pages/Training.php">
        <i class="las la-user-edit"></i>
        <span class="link">Training</span>
      </a>

    </li>
    <li>
      <a href="../pages/New Hired.php">
        <i class="las la-briefcase"></i>
        <span class="link">New Hired</span>
      </a>
    </li>
    <li>
      <a href="../pages/ESS portal.php">
        <i class="las la-address-card"></i>
        <span class="link">Ess Portal</span>
      </a>
    </li>
    <li>
      <a href="../pages/Performance.php">
        <i class="las la-theater-masks"></i>
        <span class="link">Performance</span>
      </a>
    </li>
    <li>
      <a href="../pages/Recognition.php">
        <i class="las la-award"></i>
        <span class="link">Recognition</span>
      </a>
    </li>
    <li>
      <a href="../pages/Succession.php">
        <i class="las la-chalkboard-teacher"></i>
        <span class="link">Succession</span>
      </a>
    </li>
    <li>
      <a href="../pages/Competency.php">
        <i class="las la-highlighter"></i>
        <span class="link">Competency</span>
      </a>
    </li>
    </ul>
  </div>
  </div>
</section>


<section id="interface">
  <div class="navigation">
    <div class="n1">

      <div>
        <i id="menu-btn" class="fas fa-bars"></i>
      </div>

      <div class="search">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Search here..">
      </div>

    </div>

    <div class="profile">
      <i class="fas fa-envelope"></i>
      <i class="far fa-bell"></i>
      <div class="bell-notification" current-count="8">
      </div>
      <img src="../Image/3135715.png" alt="" onclick="toggleUser()">
    </div>

    <div class="user_menu_wrap" id="userMenu">
      <div class="user_menu">

        <div class="user_info">
          <img src="../Image/3135715.png">
          <div>
            <h3 style="font-size: 14px">Admin</h3>
            <small>RGBC</small>
          </div>
        </div>
        <hr>

        <a href="" class="menu_link">
          <i class="las la-user-cog"></i>
          <p style="font-size: 14px;">Edit Profile</p>
        </a>

        <a href="../Pages/logout.php" class="menu_link">
          <i class="las la-sign-out-alt"></i>
          <p style="font-size: 14px;">Logout</p>
        </a>

      </div>
    </div>

  </div>


  

  <!-- end of main-->
<br>
<br>
  <main>
    <section>
      <div class="main">
        <div class="cards">
          <div class="card">
            <div class="card-content">
              <div class="number"><?php echo $row;?></div>
              <div class="card-name">Job Portal Users</div>
            </div>
            <div class="icon-box">
              <i class="fas fa-user-edit"></i>
            </div>
          </div>
          <div class="card">
    <?php      $link = mysqli_connect("localhost", "root", "", "human_resource 1");
 
 // Check connection
 if($link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }
             $query = "SELECT * FROM applicant_resume";
         $result = mysqli_query( $link,$query);
         $row = mysqli_num_rows($result);
       ?> 
            <div class="card-content">
              <div class="number"><?php echo $row;?></div>
              <div class="card-name">Applicant</div>
            </div>
            <div class="icon-box">
            <i class="fas fa-user-friends"></i>
            </div>
          </div>
          <div class="card">
          <?php      $link = mysqli_connect("localhost", "root", "", "human_resource 1");
 
 // Check connection
 if($link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }
             $query = "SELECT * FROM job_vacancies";
         $result = mysqli_query( $link,$query);
         $row = mysqli_num_rows($result);
       ?> 
            <div class="card-content">
              <div class="number"><?php echo $row;?></div>
              <div class="card-name">Job Vacanies</div>
            </div>
            <div class="icon-box">
            <i class="fas fa-briefcase"></i>
            </div>
          </div>
          <div class="card">
          <?php      $link = mysqli_connect("localhost", "root", "", "human_resource 1");
 
 // Check connection
 if($link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }
             $query = "SELECT * FROM ess_acounts";
         $result = mysqli_query( $link,$query);
         $row = mysqli_num_rows($result);
       ?> 
            <div class="card-content">
              <div class="number"><?php echo $row;?></div>
              <div class="card-name">ESS Accounts</div>
            </div>
            <div class="icon-box">
              <i class="fas fa-user-tie"></i>
            </div>
          </div>
        </div>


        <h2 style="text-transform: uppercase;"></h2>

        </div><!--vacancies-->
        <div class="container contact-form2">
<hr>
<br>
<form method="post" >	
     
     <button type="submit" id="export" name="export"  
     style="margin-left: 5px;  width: 15%;padding: 10px;font-size: 14px;color: #2196f3;background-color:#fff ;
                border: 2.5px solid #F6C53F ;
                border-radius: 5px;
                cursor: pointer;

                "
     class="float left" data-loading-text="Loading..." formaction="excelvacancies.php" float-right>Export To Excel</button>
     
 </form> <br>

<?php  
$connect = mysqli_connect("localhost", "root", "", "human_resource 1");  
$query ="SELECT * FROM job_vacancies ORDER BY Id  DESC";  
$result = mysqli_query($connect, $query);  
?>  


       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
       
       <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
       <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
  </head>  

     
   
      <div style="font-size: medium;">
            <div class="table-responsive"  >  
                 <table id="applicant_resume" class="table table-striped table-bordered"  >  
                      <thead>  
                           <tr>  
                           <td> Employer ID</td>  
                                <td>Title</td>  
                               
                                <td> User Info</td>  
                                <td> Salary</td>  
                                <td>Email</td>  
                                <td>Phone</td>  
                                <td> Location</td>

                                <td> Date</td>

              <td> Modify  </td>

                           </tr>  
                      </thead>  
                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo '  
                           <tr>  
                           <td>'.$row["employer_id"].'</td>  
                           <td>'.$row["title"].'</td>  
                          
                           <td>'.$row["user_info"].'</td>
                           <td>'.$row["salary"].'</td>  
                           <td>'.$row["email"].'</td>  
                           <td>'.$row["phone"].'</td>  
                           <td>'.$row["location"].'</td>  

                           <td>'.$row["date"].'</td>

                           <td><a href="#"  style= "margin-right:20px; "class="fas fa-pen block" data-toggle="tooltip" data-placement="top" title="Edit"> </a>
                          
                           <!-- Button trigger modal -->
                           <a href="deletevacancies.php?Id='. $row['Id'] .'" title="Delete Record" data-toggle="tooltip"class="fa fa-trash"style= "margin-left:15px; color: red; ></a>

                            <a href="deleteapplicant.php"  style= "margin-left:20px; color: red; "class="fas fa-trash" "data-toggle="tooltip" data-placement="top" title="Delete"> </a>




   </td>                              
</tr>  
';  
}  
?>  
</table>  
<script>  
$(document).ready(function(){  
    $('#applicant_resume').DataTable();  
});  
</script> 
</div>   

</div>

    </section>
  </main>

  <!--footer-->

  <footer id="footer">
    <p style="margin-bottom: 0;">RG Bangalon &copy; 2023 </p>
  </footer>

  <!--end of footer-->


  <!--script-->

  <script>
  $('#menu-btn').click(function() {
    $('#menu').toggleClass("active");
  })
  </script>

  <script src="../Javascript/Menu-user.js"></script>
  <script src="../Javascript//HideRecruitment.js"></script>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!--script-->

</body>


</html>

<?php

  }
  else{
    header('location:index.php');
    session_destroy();
  }
unset($_SESSION['prompt']);
mysqli_close($connection);
?>