

<?php
session_start();
include('../Pages/Connection.php');

if(isset($_SESSION['Username'], $_SESSION['Password'])){






?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Applicant</title>

  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

  <!-- DATATABLES-->
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
  <link rel="stylesheet" href="../Css//Applicant.css">
  <link rel="stylesheet" href="../Css/css.css">




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

<div class="tabContainer">
  <div class="buttonContainer">
      <button onclick="showPanel(0,)"><b><i class="fas fa-user-edit" style="color: #F6C53F;"></i> Candidate List</b></button>
      <button onclick="showPanel(1,)"><b><i class="fas fa-envelope" style="color: #F6C53F;"></i> Email Configuration</b></button>
      <button onclick="showPanel(2,)"><b><i class="fas fa-user-tie" style="color: #F6C53F;"></i> Qualified Applicant</b></button>
      <button onclick="showPanel(3,)">Unqualified Applicant</button>
  </div>
  <div class="tabPanel">

<hr>
<br>
<form method="post" >	
     
     <button type="submit" id="export" name="export"  
     style="margin-left: 5px;  width: 15%;padding: 10px;font-size: 14px;color: #2196f3;background-color:#fff ;
                border: 2.5px solid #F6C53F ;
                border-radius: 5px;
                cursor: pointer;

                "
     class="float left" data-loading-text="Loading..." formaction="export_excel.php" float-right>Export To Excel</button>
     
 </form> <br>

<?php  
$connect = mysqli_connect("localhost", "root", "", "human_resource 1");  
$query ="SELECT * FROM applicant_resume ORDER BY id  DESC";  
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
                                <td>Applicant Name</td>  
                                <td>Email</td>  
                                <td>Applied_Job</td>  
                                <td>Resume File</td>
                                <td>Upload Date</td>  
              <td> Modify  </td>

                           </tr>  
                      </thead>  
                      <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                           echo '  
                           <tr>  
                                <td>'.$row["applicant_name"].'</td>  
                                <td>'.$row["email"].'</td>  
                                <td>'.$row["applied_job"].'</td>  
                                <td>'.$row["resume_file"].'</td>  
                                <td>'.$row["upload_date"].'</td>

                                <td><a href="#"  style= "margin-right:20px; "class="fas fa-pen block" data-toggle="tooltip" data-placement="top" title="Edit"> </a>
                               
                                <!-- Button trigger modal -->
                                <a href="deleteapplicant.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"class="fa fa-trash"style= "margin-left:15px; color: red; ></a>

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
  </div>
  <div class="tabPanel">
    <br>
  <h1 style="font-size: 20px;">
</h1>
  <hr>

  <form id="contact_form" action="Mail.php" method="POST">

  <div class="row">
    <div class="col-md-6">
      <img src="../Image/message-received.png" alt="" id="image">
    </div>

  
    <div class="col-md-5">
      <div class="form-group">
        <label for="email">Email</label>
        <i class="fas fa-envelope"></i>

        <input required type="text" placeholder="@Email"  class="form-control" name="Email" id="email">
      </div>

      <div class="form-group">
        <label for="subject">Subject</label>
        <i class="fas fa-pen block"></i>
        <input type="text" placeholder="subject" name="subject" required class="form-control" id="subject" required>
      </div>

      <div class="form-group">
        <label for="message">Message</label>
        <i class="fas fa-paper-plane" id="plane"></i>
        <textarea id="msg" cols="10" rows="1" placeholder="Message" name="Message" required id="message-box"></textarea>
      </div>

        <div class="send">
        <button type="submit" id="send">Send</button>
      </div>
      </form>
    </div>
  </div>
  </div>
  <div class="tabPanel">Qualified Applicant</div>
  <div class="tabPanel">Tab 4:Content</div>
</div>

<!-- java tab function-->
<script>
var tabButtons=document.querySelectorAll(".tabContainer .buttonContainer button");
var tabPanels=document.querySelectorAll(".tabContainer  .tabPanel");

function showPanel(panelIndex,colorCode) {
  tabButtons.forEach(function(node){
      node.style.backgroundColor="";
      node.style.color="";
  });
  tabButtons[panelIndex].style.backgroundColor=colorCode;
  tabButtons[panelIndex].style.color="black";
  tabPanels.forEach(function(node){
      node.style.display="none";
  });
  tabPanels[panelIndex].style.display="block";
  tabPanels[panelIndex].style.backgroundColor=colorCode;
}
showPanel(0,);
</script>

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

</html><?php

}
else{
  header('location:index.php');
  session_destroy();
}
unset($_SESSION['prompt']);
mysqli_close($connection);
?>