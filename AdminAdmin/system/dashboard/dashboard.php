<?php
session_start();
include('../../crud/connection.php');


if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $salary = $_POST['salary'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $user_info = $_POST['user_info'];
    $qualification = $_POST['qualification'];
  
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTempName = $_FILES["file"]["tmp_name"];
    $fileSize = $_FILES["file"]["size"];
    $fileError = $_FILES["file"]["error"];
    $fileType = $_FILES["file"]["type"];
    $folder = "../dashboard/imageStorage/" . $fileName;
  
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
  
    $allowed = array('jpg', 'jpeg', 'png');
  
    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 5000000) {
          $fileNameNew = uniqid('', true) . "." . $fileActualExt;
          $fileDestination = $folder;
          move_uploaded_file($fileTempName, $fileDestination);
  
          if (!empty($file)) {
            $query = "INSERT INTO job_vacancies ( `employer_id`, `title`, `qualification`, `description`, `location`, `phone`, `email`, `salary`, `user_info`, `image`) VALUES ('$id', '$title', '$qualification',  '$description', '$location', '$phone', '$email', '$salary', '$user_info', '$fileName' ) "; 
  
            $result = mysqli_query($connection, $query);
  
          }
        }
      }
    }
  }
  
  if (isset($_SESSION['username'], $_SESSION['password'])) {

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../../../favicon/Your paragraph text (1)-modified.png" type="image/x-icon">
    <title>Recruitment | RGBC </title>

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

    <!-- Datatable Dependency start -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js">
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">


    <!-- Datatable Dependency end -->

    <!-- OWN STYLE -->
    <link rel="stylesheet" href="../dashboard/dashboard-css/dashboard.css">
    <link rel="stylesheet" href="../include/css//sidebar.css">
    <link rel="stylesheet" href="../include/css//main.css">
    <link rel="stylesheet" href="../dashboard/updatejob.php">

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- Include stylesheet -->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>




</head>

<body>

    <?php
include '../include/header.php';
?>

    <main class="main">

        <header>
            <div class="pagetitle">
                <h1 style="color: black; font-weight: 700">Recruitment</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <!-- <a href="../dashboard/dashboard.php">Dashboard</a> -->
                        </li>
                    </ol>
                </nav>
            </div>
        </header>



        <section style="padding: 20px">


            <!-- <div class="row">
                <div class="col-md-3">
                    <div class="card-counter primary" onclick="window.location.href='../module-1/m1-page-1';"
                        style="cursor: pointer">
                        <?php      $link = mysqli_connect("localhost", "root", "", "human_resource 1");
 
 // Check connection
 if($link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }
             $query = "SELECT * FROM applicant_resume";
         $result = mysqli_query( $link,$query);
         $row = mysqli_num_rows($result);
       ?>
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span class="count-numbers"><?php echo $row;?></span>
                        <span class="count-name">Applicant</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-counter danger">
                        <?php      $link = mysqli_connect("localhost", "root", "", "human_resource 1");
 
 // Check connection
 if($link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }
             $query = "SELECT * FROM job_vacancies";
         $result = mysqli_query( $link,$query);
         $row = mysqli_num_rows($result);
       ?>
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <span class="count-numbers"><?php echo $row;?></span>
                        <span class="count-name">Job Vacancies</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-counter success">
                        <?php      $link = mysqli_connect("localhost", "root", "", "human_resource 1");
 
 // Check connection
 if($link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }
             $query = "SELECT * FROM ess_acounts";
         $result = mysqli_query( $link,$query);
         $row = mysqli_num_rows($result);
       ?>
                        <i class="fas fa-user-tie" aria-hidden="true"></i>
                        <span class="count-numbers"><?php echo $row;?></span>
                        <span class="count-name">Newly Hired</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-counter info">
                        <?php      $link = mysqli_connect("localhost", "root", "", "human_resource 1");
 
 // Check connection
 if($link === false){
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }
             $query = "SELECT * FROM ess_acounts";
         $result = mysqli_query( $link,$query);
         $row = mysqli_num_rows($result);
       ?>
                        <i class="fa fa-users"></i>
                        <span class="count-numbers"><?php echo $row;?></span>
                        <span class="count-name">Ess Account</span>
                    </div>
                </div>
            </div> -->

            <!-- table -->

            <br>
            <br>

            <div class="col-md-15">
                <div class="card">

                    <div class="card-body">


                        <button type="button" class="btn btn-sm btn-primary btn-create" data-toggle="modal"
                            data-target="#addjob"
                            style="float: right; margin-left: -10rem; background-color: #007bff; padding: 10px;   border-radius: 2px"><i
                                class="fas fa-plus" style="padding: .2rem"></i>New Vacancy</button>

                        <br>

                        <?php  
                $connect = mysqli_connect("localhost", "root", "", "human_resource 1");  
                $query ="SELECT * FROM job_vacancies ORDER BY Id  DESC";  
                $result = mysqli_query($connect, $query);  
               ?>

                        <br>
                        <table id="table_id" class="table table-bordered" style="width:100%; ">
                            <thead height="40px">
                                <tr style="background-color: #007bff; color: #fff; font-weight: normal;"
                                    class="text-center">

                                    <th>#</th>
                                    <th>Job Title</th>
                                    <th>Qualification</th>
                                    <th>Description</th>
                                    <th>Location</th>
                                    <th>Salary</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>HR personnel</th>
                                    <th>Date Posted</th>
                                    <th>Action</th>



                                </tr>
                            </thead>
                            <tbody>

                                <?php  
                      while($row = mysqli_fetch_array($result))  
                      {  
                ?>
                                <tr class="text-center">

                                    <!-- <td><input type="checkbox" name=""></td> -->

                                    <td><?php echo $row['Id']?></td>
                                    <td><?php echo $row['title']?></td>
                                    <td><?php echo substr($row['qualification'], 0, 100)?></td>
                                    <td><?php echo $row['description']?></td>
                                    <td><?php echo $row['location']?></td>
                                    
                                    <td><?php echo $row['salary']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['phone']?></td>
                                    <td><?php echo $row['user_info']?></td>
                                    <td><?php echo $row['date']?></td>

                                    <td>

                                        <!-- Call to action buttons -->
                                        <ul class="list-inline m-0">


                                  

                                            <li class="list-inline-item">
                                                <a href="../dashboard/updatejob?Id=<?php echo $row["Id"]?>."class=" btn-outline btn-sm rounded-55" type="button"style="border: 1px solid #007bff; color: #007bff; background-color:transparent;"><i
                                                            class="fas fa-pencil">
                                             </i></a>
                                           
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="../dashboard/deletedata?Id=<?php echo $row["Id"]?>">
                                                    <button class=" btn-outline btn-sm rounded-55" type="button"
                                                        data-toggle="modal" data-placement="top" title="Delete"
                                                        data-target="#delete-confirm"
                                                        style="border: 1px solid red; color: red; background-color:transparent; "><i
                                                            class="fas fa-trash"></i></button>
                                                </a>
                                            </li>
                                            
                                        </ul>


                                    </td>

                                </tr>
                                <?php
                  
                  }  
                  ?>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>


            <!-- add job -->

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true" id="addjob">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="padding: 20px">

                        <div class="modal-header text-center">
                            <h4 class="modal-title font-weight-bold">Add Job</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>



                        <form action="addjob" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <br>
                                    <label for="inputEmail4" style="font-weight: 700;">Job Title</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Job Title"
                                        name="title" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <br>
                                    <label for="inputPassword4" style="font-weight: 700;">Location</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="Location"
                                        name="location" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress" style="font-weight: 700;">Job Qualification</label>
                                <textarea name="qualification" id="editor1" rows="10" cols="102">
             </textarea>
                                <script>
                                CKEDITOR.replace('editor1');
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress" style="font-weight: 700;">Job Description</label>
                                <textarea name="description" id="" cols="30" rows="7" class="form-control"
                                    placeholder="Job Description" required maxlength="200" minlength="200"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity" style="font-weight: 700;">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="email" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputState" style="font-weight: 700;">Salary</label>
                                    <input type="text" class="form-control" id="inputEmail" name="salary" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputState" style="font-weight: 700;">Phone</label>
                                    <input type="text" class="form-control" id="inputEmail" name="phone" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputState" style="font-weight: 700;">Hr personnel</label>
                                    <input type="text" class="form-control" id="inputEmail" name="user_info" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputZip" style="font-weight: 700;">Image</label>
                                    <input type="file" id="inputFile" name="file" placeholder="Upload image"
                                        accept="image/png, image/jpeg, image/jpg" required>
                                </div>
                            </div>



                            <div class="form-group">
                            </div>
                            <button type="submit" class="btn btn-primary" style="float:right; border-radius: 2px"
                                name="submit" style="text-transform:capitalize  !important;">Add
                                Job</button>
                        </form>

                    </div>
                </div>
            </div>



            <!-- edit job modal -->

            <div class="modal fade bd-example-modal-lg" id="jobedit" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="padding: 20px">
                        <div class="modal-header text-center">
                            <h4 class="modal-title font-weight-bold">Add Job</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="" method="post" enctype="multipart/form-data"
                            accept="image/png, image/jpeg, image/jpg">
                            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Job Title</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Job Title"
                                        name="title" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Location</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="Location"
                                        name="location" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Job Qualification</label>
                                <textarea name="qualification" id="editor2" rows="10" cols="80">
                </textarea>
                                <script>
                                CKEDITOR.replace('editor2');
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Job Description</label>
                                <textarea name="description" id="" cols="30" rows="2" class="form-control"
                                    placeholder="Job Description" required></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="email" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputState">Salary</label>
                                    <input type="text" class="form-control" id="inputEmail" name="salary" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputState">Phone</label>
                                    <input type="text" class="form-control" id="inputEmail" name="phone" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputState">Hr personnel</label>
                                    <input type="text" class="form-control" id="inputEmail" name="user_info" required>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputZip">Image</label>
                                    <input type="file" id="inputFile" name="file" required>
                                </div>
                            </div>



                            <div class="form-group">
                            </div>
                            <button type="submit" class="btn btn-primary" style="float:right" name="submit"
                                style="font-weight:700; color: black" > Update Job</button>
                        </form>

                    </div>
                </div>
            </div>

            <!-- edit last line -->




        </section>



        <?php
    include '../include/footer.php';
    ?>

    </main>


    <?php
include '../include/script.php';
?>


    <script>
    $(document).ready(function() {
        $('#table_id').DataTable({

            dom: 'Bfrtip',
            responsive: true,
            pageLength: 5,
            // lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],

            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]

        });
    });
    </script>

<script>
// For Applicant Initial Interview Appoint
$(document).ready(function() {
    $('.name').on('click', function() {
        $('#viewJob').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();
        console.log(data);
        $('#Id').val(data[0]);
        $('#title').val(data[1]);
        $('#qualification').val(data[2]);
        $('#description').val(data[3]);
        $('#salary').val(data[4]);
        $('#email').val(data[5]);
        $('#phone').val(data[6]);
        $('#user_info').val(data[7]);
        $('#date').val(data[8]);
    });
});
</script>






    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

</body>

</html>

<?php

}
  else{
    header('location:../../../managementLoginForm/pages/index');
    session_destroy();
  }
unset($_SESSION['prompt']);
mysqli_close($connection);
?>