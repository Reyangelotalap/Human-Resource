<?php

session_start();

include '../../Job Portal/Pages/connection.php';

if (isset($_SESSION['username'], $_SESSION['password'])) {

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RGBC | ESS User Profile</title>


  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="shortcut icon" href="../../EmployeeSide/Image/apple-touch-icon.png" type="image/x-icon">
  <!--  -->

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css file -->
  <link rel="stylesheet" href="../Css/index.css">
  <link rel="stylesheet" href="../Css/style.css">
  <link rel="stylesheet" href="../../Job Portal/index.css">
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
  
  include '../../Job Portal/Pages/loading.php';
  
  ?>
   <div class="sidebar">
    <div class="logo-details"style="">
      <i class='bx bxl-E-plus-plus icon'></i>
        <div class="logo_name">ESS Portal</div>
        <i class='bx bx-menu ' id="btn"  ></i>
    </div>
    <ul class="nav-list">
 
      <li>
        <a href="../Pages/index.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Home</span>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
       <a href="../Pages/profile.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">User Profile</span>
       </a>
       <span class="tooltip">User Profile</span>
     </li>
     <li>
       <a href="../Pages/timeandattendance.php">
         <i class='bx bx-time' ></i>
         <span class="links_name">Time And Attendance</span>
       </a>
       <span class="tooltip">Time And Attendance</span>
     </li>
     <li>
       <a href="../Pages/performance.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Performance </span>
       </a>
       <span class="tooltip">Performance</span>
     </li>
     <li>
       <a href="../Pages/payroll.php">
       <i class="fas fa-credit-card"></i>
         <span class="links_name">Payroll Slip Record</span>
       </a>
       <span class="tooltip">Payroll Slip Record</span>
     </li>
     <!--
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Order</span>
       </a>
       <span class="tooltip">Order</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-heart' ></i>
         <span class="links_name">Saved</span>
       </a>
       <span class="tooltip">Saved</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>-->
     <li class="profile">
         <div class="profile-details">
           <img src="profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name"><?php echo htmlspecialchars($_SESSION["username"]); ?></div>

           </div>
         </div>
         <a href="Logout.php" class="nav__link nav__logout">
         <i class='bx bx-log-out' id="log_out" ></i>
       
</a>   <span class="tooltip">LogOut</span>
     </li>
    </ul>
  </div>

<script>
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});

searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}

</script>
  <!-- content -->
  <header class="header">
    <div class="header__container">
      

   <a href="#" class="header__logo">Hello <?php echo htmlspecialchars($_SESSION["username"]); ?></a>

    <!--     <div class="header__search">
        <input type="search" placeholder="Search" class="header__input">
        <i class='bx bx-search header__icon'></i>
      </div>-->

    </div>
  </header>

  <main>    

  <h2 style="text-transform: uppercase; margin-left:9%;">RGBC | User Profile</h2> 
      
    <section>


    </section>
  </main>

  <!-- js file -->
  <script src="../Javascript/openToggle.js"></script>
</body>

</html>

<?php
} else {
  header("location: ../../Job Portal/Pages/loginEmployee.php");
  session_destroy();
}
unset($_SESSION['prompt']);
mysqli_close($connection);
?>