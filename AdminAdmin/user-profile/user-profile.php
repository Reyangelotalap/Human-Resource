<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../favicon/Your paragraph text (1)-modified.png" type="image/x-icon">
    <title>User Profile</title>


    
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



    <!-- OWN STYLE -->
    <link rel="stylesheet" href="../user-profile/user-profile.css">

   

</head>
<body>


<style>

body{
    font-family: 'Helmet' , sans-serif !important;
    font-weight: 700;
}
    
</style>




<main class="main" >

    <header>
        <div class="pagetitle">
            <h1 style="margin-left: 1rem;">Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../system/dashboard/dashboard.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Users</li>
                    <li class="breadcrumb-item ">Profile</li>
                </ol>
            </nav>
        </div>

    </header>

    <section class="section profile">

        <div class="row">

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="../../Job Portal/Image/3135715.png" alt="Profile" class="rounded-circle">
                        <h2>Rey Angelo Talap</h2>
                        <h3>Hr 1 Admin</h3>

                        <div class="social-links mt-2"> 
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> 
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> 
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a> 
                            <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-8">

                <div class="card">

                    <div class="card-body pt-3">

                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item"> <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button></li>
                        <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button></li>
                        <li class="nav-item"> <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button></li>
                    </ul>

                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">About</h5>
                            <p class="small fst-italic">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum nobis, laboriosam dicta dignissimos inventore expedita, maiores asperiores, eius ex dolores alias natus repudiandae ad quam hic laborum facilis ipsa doloribus!</p>
                            <h5 class="card-title">Profile Details</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                <div class="col-lg-9 col-md-8">Rey Angelo Talap</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Company</div>
                                <div class="col-lg-9 col-md-8">RGBC Lending Investor Company</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Position</div>
                                <div class="col-lg-9 col-md-8">Admin</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Country</div>
                                <div class="col-lg-9 col-md-8">Philipppines</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Address</div>
                                <div class="col-lg-9 col-md-8">Blk. 1, Lot 1, Cute Street, Awesome Village, Brgy. Amazing, Quezon City</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                <div class="col-lg-9 col-md-8">0999-999-9999</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">
                                    <a href="#">reyangelotalap23@gmail.com</a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            <form>
                                <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                <div class="col-md-8 col-lg-9">
                                    <img src="../../Job Portal/Image/3135715.png" alt="Profile">
                                    <div class="pt-2"> <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a> <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a></div>
                                </div>
                                </div>
                                <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                <div class="col-md-8 col-lg-9"> <input name="fullName" type="text" class="form-control" id="fullName" value="Chuu can do it"></div>
                                </div>
                                <div class="row mb-3">
                                <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                <div class="col-md-8 col-lg-9"><textarea name="about" class="form-control" id="about" style="height: 100px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium a aliquam nemo assumenda vitae repellendus itaque quos sit quam qui numquam placeat delectus, voluptatibus aliquid consequatur inventore officia reiciendis alias?</textarea></div>
                                </div>
                                <div class="row mb-3">
                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                <div class="col-md-8 col-lg-9"> <input name="company" type="text" class="form-control" id="company" value="RGBC Lending Investor Company"></div>
                                </div>
                                <div class="row mb-3">
                                <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                <div class="col-md-8 col-lg-9"> <input name="job" type="text" class="form-control" id="Job" value="Web Designer"></div>
                                </div>
                                <div class="row mb-3">
                                <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                <div class="col-md-8 col-lg-9"> <input name="country" type="text" class="form-control" id="Country" value="Philippines"></div>
                                </div>
                                <div class="row mb-3">
                                <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                <div class="col-md-8 col-lg-9"> <input name="address" type="text" class="form-control" id="Address" value="Blk. 1, Lot 1, Cute Street, Awesome Village, Brgy. Amazing, Quezon City"></div>
                                </div>
                                <div class="row mb-3">
                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                <div class="col-md-8 col-lg-9"> <input name="phone" type="text" class="form-control" id="Phone" value="0999-999-9999"></div>
                                </div>
                                <div class="row mb-3">
                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                <div class="col-md-8 col-lg-9"> <input name="email" type="email" class="form-control" id="Email" value="Chuu@gmail.com"></div>
                                </div>
                                <div class="row mb-3">
                                <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                <div class="col-md-8 col-lg-9"> <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#"></div>
                                </div>
                                <div class="row mb-3">
                                <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                <div class="col-md-8 col-lg-9"> <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#"></div>
                                </div>
                                <div class="row mb-3">
                                <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                <div class="col-md-8 col-lg-9"> <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#"></div>
                                </div>      

                                <div class="text-center"> <button type="submit" class="btn btn-primary">Save Changes</button></div>
                            </form>
                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <form>
                                <div class="row mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                <div class="col-md-8 col-lg-9"> <input name="password" type="password" class="form-control" id="currentPassword"></div>
                                </div>
                                <div class="row mb-3">
                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                <div class="col-md-8 col-lg-9"> <input name="newpassword" type="password" class="form-control" id="newPassword"></div>
                                </div>
                                <div class="row mb-3">
                                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                <div class="col-md-8 col-lg-9"> <input name="renewpassword" type="password" class="form-control" id="renewPassword"></div>
                                </div>

                                <div class="text-center"> <button type="submit" class="btn btn-primary">Change Password</button></div>
                            </form>
                        </div>

                    </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    

    <footer class="footer d-flex flex-column align-items-center" style="margin-top:14%;">
        <div class="copyright"> &copy; Copyright <strong><span>RGBC Lending Investor Company</span></strong>. All Rights Reserved</div>
        <div class="credits"> <p>RG Bangalon &copy; 2023 </p></div>
    </footer>

   
</main>


<?php
include '../../AdminAdmin/system/include/script.php';
?>

</body>
</html>