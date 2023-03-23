<?php
session_start();
include('../../crud/connection.php');


  if (isset($_SESSION['username'], $_SESSION['password'])) {

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../../../favicon/Your paragraph text (1)-modified.png" type="image/x-icon">
  <title>Reject Applicant | RGBC</title>

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

    <!-- Datatable Dependency end -->



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

  <!-- OWN STYLE -->
  <link rel="stylesheet" href="../module-1/module-1-css/m1-page-4.css">
  <link rel="stylesheet" href="../include/css//sidebar.css">
  <link rel="stylesheet" href="../include/css//main.css">

  <!-- sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  

</head>

<body>

  <?php
include '../include/header.php';
?>

  <main class="main">

    <header>
      <div class="pagetitle">
        <h1 style="color: black; font-weight: 700" >Applicant Management</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="../dashboard/dashboard">Home</a>
            </li>

            <li class="breadcrumb-item"style="color: black; font-weight: 700" >Rejected Applicant</li>
          </ol>
        </nav>
      </div>
    </header>



    <section>


    
    <div class="col-md-15">
                    <div class="card">

                        <div class="card-body">


                            <!-- <button type="button" class="btn btn-sm btn-primary btn-create" data-toggle="modal"
                                data-target="#addApplicant"
                                style="float: right; margin-left: -10rem;  background-color: #007bff; padding: 10px; text-transform: uppercase;"><i
                                    class="fas fa-plus" style="padding: .2rem"></i>Add  Qualified</button> -->

                            <br>
 
<?php  
$connect = mysqli_connect("localhost", "root", "", "human_resource 1");  
$query ="SELECT * FROM rejected_tbl";  
$result = mysqli_query($connect, $query);  
?>

                            <br>
                            <table id="table_id" class="table table-bordered" style="width:100%; ">
                                <thead height="70px">
                                    <tr
                                        style="background-color: #007bff; color: #fff; font-weight: normal; text-transform: uppercase"class="text-center" >

                                        <th>#</th>
                                        <th>Applicant Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Job Applied</th>
                                     
                                        <th>Status</th>
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



                  <td><?php echo $row['id']?></td>
                  <td><?php echo $row['applicant_name']?></td>
                  <td><?php echo $row['email']?></td>
                  <td><?php echo $row['contact']?></td>
                  <td><?php echo $row['applied_job']?></td>
           
                  <td><?php echo $row['status']?></td>


        <td>

              <!-- Call to action buttons -->
              <ul class="list-inline m-0">

   

              <li class="list-inline-item">
              <a href="../dashboard/qdelete?id=<?php echo $row['id']?>">
              <button class="btn btn-outline btn-sm rounded-55" type="button" data-toggle="modal" data-placement="top"
                title="Delete" data-target="#delete-confirm" style="border: 1px solid red; color: red !important; background-color:transparent !important "><i class="fas fa-trash"></i></button>
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



                <!-- add applicant -->
                <!-- <div id="addApplicant" class="modal fade" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabelApplicant" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class='modal-title font-weight-bold' id='myModalLabelApplicant'>Add Applicant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            </div>
            <div class="modal-body">


                <form id="contact_form" action="../dashboard/addApplicant.php" method="POST"
                    class="form-horizontal col-sm-12" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="myid">
                    <div class="form-group"><label>Applicant name</label><input
                            class="form-control required" placeholder="Applicant name"
                            data-placement="top" data-trigger="manual" type="text" name="applicant_name"
                            required>
                    </div>
                    <div class="form-group"><label>E-Mail</label><input class="form-control email"
                            placeholder="Email" data-placement="top" data-trigger="manual"
                            data-content="Must be a valid e-mail address (user@gmail.com)" type="email" name="email">
                    </div>
                    <div class="form-group"><label>Applied Job</label><input
                            class="form-control required" placeholder="Applied Job" data-placement="top"
                            data-trigger="manual" type="text" name="applied_job" required>
                    </div>
                    <div class="form-group"><label>Upload file</label><input
                            class="form-control required" placeholder="Applied Job" data-placement="top"
                            data-trigger="manual" type="file" name="file" required
                            accept="application/pdf">
                    </div>

                    <div class="form-group"><button type="submit" class="btn btn-primary pull-right"
                            name="submit"> Add Applicant
                        </button>
                    </div>
                </form>

     </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div> -->






                <!-- modal send message

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class='modal-title' id='myModalLabel'>Send email</h5>

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            </div>
            <div class="modal-body">

         
                <form id="contact_form" action="../dashboard/Mail.php" method="POST"
                    class="form-horizontal col-sm-12">
                    <input type="hidden" value="" name="id">
                    <div class="form-group"><label>Subject</label><input class="form-control required"
                            placeholder="Subject" data-placement="top" data-trigger="manual" type="text"
                            name="subject" required>
                    </div>
                    <div class="form-group"><label>Message</label><textarea class="form-control"
                            placeholder="Message" data-placement="top" data-trigger="manual"
                            name="Message" required></textarea></div>
                    <div class="form-group"><label>E-Mail</label><input class="form-control email"
                            placeholder="Email" data-placement="top" data-trigger="manual"
                            data-content="Must be a valid e-mail address (user@gmail.com)" type="email"
                            name="Email" value="">
                    </div>
                    <div class="form-group"><button type="submit"
                            class="btn btn-primary pull-right">Send</button>
                    </div>
                </form>


            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div> -->


                <!-- status modal -->

                <div id="statusModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class='modal-title' id='myModalLabel'>Changing Status</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                            </div>
                            <div class="modal-body">

                                <?php
        $query = "SELECT * FROM rejected_tbl";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result)) {
          $row = mysqli_fetch_assoc($result);

        ?>

                                <form action="../dashboard/status?<?php echo $row["id"]; ?>" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                                    <input type="hidden" name="applicant_name"
                                        value="<?php echo $row["applicant_name"]; ?>">
                                    <input type="hidden" name="applied_job" value="<?php echo $row["applied_job"]; ?>">
                                    <input type="hidden" name="resume_file" value="<?php echo $row["resume_file"]; ?>">
                                    <input type="hidden" name="email" value="<?php echo $row["email"]; ?>">
                                    <input type="hidden" name="contact" value="<?php echo $row["contact"]; ?>">
                                    <select class="form-select" name="status" aria-label="Default select example">
                                        <option selected>Select status</option>
                                        <option value="Passed" name="Passed">Passed</option>
                                        <option value="Failed" name="Failed">Failed</option>
                                    </select>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary pull-right" name="update">Update
                                            Status</button>
                                    </div>
                                </form>
                                <?php
}
?>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>


                </div>







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

</body>

</html>
<?php

}
  else{
    header('location: ../../../managementLoginForm/pages/index');
    session_destroy();
  }
unset($_SESSION['prompt']);
mysqli_close($connection);
?>