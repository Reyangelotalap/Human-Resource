
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('Connection.php');

if(isset($_SESSION['Username'], $_SESSION['Password'])){


?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ESS Portal</title>

  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<!--database-->
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

  <!--CSS FILE-->

  <link rel="stylesheet" href="../Css/ESS Portal.css">


</head>

<body>

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
              <h3>Admin</h3>
              <small>RGBC</small>
            </div>
          </div>

          <hr>

          <a href="" class="menu_link">
            <i class="las la-user-cog"></i>
            <p>Edit Profile</p>

          </a>
          <a href="../Pages/logout.php" class="menu_link">
            <i class="las la-sign-out-alt"></i>
            <p>Logout</p>

          </a>

        </div>
      </div>

    </div>

    <h3 class="i-name">
    </h3>

    <!--MAIN-->
    <div class="container contact-form2">


<hr>
<br>
<button type="button" style="margin-left: 5px;  width: 15%;padding: 10px;font-size: 14px;color: #2196f3;background-color:#fff ;
                border: 2.5px solid #F6C53F ;
                border-radius: 5px;
                cursor: pointer;

                " class="btn btn-primary fw-bold fs-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-person-fill-add fs-3 text-warning"></i> Add Account</button>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-3 fw-bold ms-5" id="staticBackdropLabel">ESS ACCOUNT</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
            <div class="modal-body">

            
   
                        <form class="form" action="../Pages/registration.php" method="post">
                            <div class="col-md-6">
                            <h1 class="login-title">Registration</h1>
        <input type="text" style="    font-size: 15px;
                             border: 1px solid #ccc;
                             padding: 5%;
                             border-radius:5px;
                            margin-bottom: 25px;
                            height: 10px;
                            width: calc(100% );"
     name="username" placeholder="Username" required />

     <input type="text" style="    font-size: 15px;
                             border: 1px solid #ccc;
                             padding: 5%;
                             border-radius:5px;
                            margin-bottom: 25px;
                            height: 10px;
                            width: calc(100% );"
        
        
        name="email" placeholder="Email Adress">

        <input type="password" style="    font-size: 15px;
                             border: 1px solid #ccc;
                             padding: 5%;
                             border-radius:5px;
                            margin-bottom: 25px;
                            height: 10px;
                            width: calc(100% );"
        
        name="password" placeholder="Password">
  
        
                            </div>
                            <div class="modal-footer">
        <button type="button" class="btn btn-secondary"style="margin-left: 5px;  width: 20%;padding: 
                  10px;font-size: 14px;
                  color: red;background-color:#fff ;
                  border: 2px solid red ;
                  border-radius: 5px;
                  cursor: pointer;"
        
        data-bs-dismiss="modal">Close</button>

        <input type="submit"class="btn btn-primary" style="margin-left: 5px;  width: 20%;padding: 
                  10px;font-size: 14px;
                  color: #2196f3;background-color:#fff ;
                  border: 2px solid #2196f3 ;
                  border-radius: 5px;
                  cursor: pointer;" name="submit" value="Register" class="login-button">
    </div>




                            
                        </form>

               <span class="mt-3"></span>
            </div>

    </div>
</div>
</div>
 
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
  
<!-- excel
<form method="post" >	
     
     <button type="submit" id="export" name="export"  
     style="margin-left: 5px;  width: 15%;padding: 10px;font-size: 14px;color: #2196f3;background-color:#fff ;
                border: 2.5px solid #F6C53F ;
                border-radius: 5px;
                cursor: pointer;

                "
     class="float left" data-loading-text="Loading..." formaction="export_excel.php" float-right>Export To Excel</button>
     
 </form> 
--><br>
<br>
<?php  
$connect = mysqli_connect("localhost", "root", "", "human_resource 1");  
$query ="SELECT * FROM ess_acounts ORDER BY id  DESC";  
$result = mysqli_query($connect, $query);  
?>  


       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
       
       <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
       <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
  </head>  

     
   
      <div style="font-size: medium;">
            <div class="table-responsive"  >  
                 <table id="records" class="table table-striped table-bordered"  >  
                      <thead>  
                           <tr>  
                                <td>Username</td>  
                                <td>Email</td>  
                                <td>Password</td>  
              <td> Modify  </td>

                           </tr>  
                      </thead>  
                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo '  
                           <tr>  
                                <td>'.$row["username"].'</td>  
                                <td>'.$row["email"].'</td>  
                                <td>'.$row["password"].'</td>  

                                <td><a href="#"  style= "margin-right:20px; "class="fas fa-pen block" data-toggle="tooltip" data-placement="top" title="Edit"> </a>
                                <a href="deleteess.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"class="fa fa-trash"style= "margin-left:15px; color: red; ></a>
                                <a href="deleteapplicant.php"  style= "margin-left:20px; color: red; "class="fas fa-trash" "data-toggle="tooltip" data-placement="top" title="Delete"> </a>

                             



   </td>                              
</tr>  
';  
}  
?>  
</table>  
<script>  
$(document).ready(function(){  
    $('#records').DataTable();  
});  
</script> 
</div>   

</div>
  </div>
  

    <!--END OF MAIN-->


    <!--FOOTER-->
    <footer id="footer">
      <p>RG Bangalon &copy; 2023 </p>
    </footer>
    <!--END OF FOOTER-->


    <script>
    $('#menu-btn').click(function() {
      $('#menu').toggleClass("active");
    })
    </script>

    <script src="../Javascript/Menu-user.js"></script>

</body>
<?php

}
else{
  header('location:index.php');
  session_destroy();
}
unset($_SESSION['prompt']);
mysqli_close($connection);
?>
</html>