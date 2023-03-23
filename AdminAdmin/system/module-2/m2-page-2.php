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
  <title>Learning Management | RGBC</title>


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
  <link rel="stylesheet" href="../module-2/module-2-css//m2-page-2.css">
  <link rel="stylesheet" href="../include/css//sidebar.css">
  <link rel="stylesheet" href="../include/css//main.css">

  <!-- sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<body>

  <?php
include '../include/header.php';
?>

  <main class="main">

    <header>
      <div class="pagetitle">
        <h1 style="color: black; font-weight: 700" >Learning Management</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="../dashboard/dashboard.php">Home</a>
            </li>
            <li class="breadcrumb-item active" style="color: black; font-weight: 700">Status</li>

          </ol>
        </nav>
      </div>
    </header>



    <section style="padding: 20px">

     

      <div class="col-md-15">
        <div class="card">

          <div class="card-body">


            <!-- <button type="button" class="btn btn-sm btn-primary btn-create" data-toggle="modal"
                                data-target="#addApplicant"
                                style="float: right; margin-left: -10rem;  background-color: #007bff; padding: 10px; text-transform: uppercase;"><i
                                    class="fas fa-plus" style="padding: .2rem"></i>Add  Qualified</button> -->


            <?php  
                $connect = mysqli_connect("localhost", "root", "", "human_resource 1");  
                $query ="SELECT * FROM  examination_status ";  
                $result = mysqli_query($connect, $query);  
                ?>
  

            <table id="table_id" class="table table-bordered" style="width:100%; ">
              <thead height="40px">
                <tr style="background-color: #007bff; color: #fff; font-weight: normal; " class="text-center">

                  <th>#</th>
                  <th>Applicant Name</th>
                  <th>Email</th>
                  <th>Job Applied</th>
                  <th>Score</th>
                  <th>Status</th>
                  <th>Action</th>
                  <th>Manage</th>




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
      <td><?php echo $row['applied_job']?></td>
      <td><?php echo $row['exam_score']?></td>
      <?php 
      if($row['status'] === "passed"){
      ?>
      <td style="color: green;  font-weight: 700; text-transform: uppercase"><?php echo $row['status']?></td>
      <?php } elseif($row['status'] === "failed"){?>
        <td style="color: red;  font-weight: 700; text-transform: uppercase"><?php echo $row['status']?></td>
        <?php }?>
    

        <td class="text-center">

              <!-- Call to action buttons -->
              <ul class="list-inline m-0">

            <li class="list-inline-item">
                <button class="btn btn-outline btn-sm rounded-55 " type="button" data-toggle="modal"
                  data-placement="top" title="View" data-target="#"
                  style="border: 1px solid #007bff;  color: #007bff !important; background-color:transparent ! important"><i class="fas fa-eye"></i></button>
              </li>

              <li class="list-inline-item">
              <a href="../dashboard/qdelete?id=<?php echo $row['id']?>">
              <button class="btn btn-outline btn-sm rounded-55" type="button" data-toggle="modal" data-placement="top"
                title="Delete" data-target="#delete-confirm" style="border: 1px solid red; color: red !important; background-color:transparent !important "><i class="fas fa-trash"></i></button>
            </a>
              </li>

              <li class="list-inline-item">
              <a href="../module-2/m2-page-3?id=<?php echo $row['id']?>">
              <button class="btn btn-outline btn-sm rounded-55" type="button" data-toggle="modal"
                data-placement="top" title="Send email" data-target="#myModal"
                style="border: 1px solid #007bff;  color: #007bff !important; background-color:transparent ! important"><i class="fas fa-paper-plane"></i></button>
               </a>
            </li>


            </ul>

        </td>

        <td style="text-transform:uppercase">
    <ul class="list-inline m-0">
        <li class="list-inline-item">
            <?php if ($row['status'] != 'failed'): ?>
                <button class="btn btn-outline btn-sm rounded-55 name" type="button" data-bs-toggle="modal"
                    data-placement="top" title="View" data-bs-target="#statusModal"
                    style="border: 1px solid #007bff;  color: #007bff !important; background-color:transparent ! important">
                    <i class="fas fa-exchange">
                        <small style="font-size: 15px; padding: 1rem; font-family: poppins; text-transform:uppercase; font-weight: bold">Status</small>
                    </i>
                </button>
            <?php else: ?>
                <button class="btn btn-outline btn-sm rounded-55 name" type="button" data-bs-toggle="modal"
                    data-placement="top" title="View" data-bs-target="#statusModal"
                    style="border: 1px solid #007bff;  color: #007bff !important; background-color:transparent ! important" disabled>
                    <i class="fas fa-exchange">
                        <small style="font-size: 15px; padding: 1rem; font-family: poppins; text-transform:uppercase; font-weight: bold">Status</small>
                    </i>
                </button>
            <?php endif; ?>
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

      <!-- status modal -->

      <div id="statusModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class='modal-title' id='myModalLabel'>Changing Status</h5>

              <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>

            </div>
            <div class="modal-body">

              <?php
        $query = "SELECT * FROM examination_status";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result)) {
          $row = mysqli_fetch_assoc($result);

        ?>

              <form action="../dashboard/finalInterview" method="POST">
              <input type="hidden" name="r_id" id="r_id" value="<?php echo $row["id"]; ?>">
                <input type="hidden" name="applicant_name" id="applicant_name"
                                value="<?php echo $row["applicant_name"]; ?>">
                            <input type="hidden" name="applied_job"  id="applied_job" value="<?php echo $row["applied_job"]; ?>">
                            <input type="hidden" name="contact"  id="contact" value="<?php echo $row["contact"]; ?>">
                            <input type="hidden" name="resume_file"  id="resume_file" value="<?php echo $row["resume_file"]; ?>">
                            <input type="hidden" name="email" id="email" value="<?php echo $row["email"]; ?>">
                           
                <select class="form-select" name="status" aria-label="Default select example">
                  <option selected>Select status</option>
                  <!-- <option value="Initial" name="initial"  >Initial Interview</option>
                  <option value="Examination" name="exam">Examination</option> -->
                  <option value="Final Interview" name="final">Final Interview</option>
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
      pageLength: 10,
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
      $('#statusModal').modal('show');

      $tr = $(this).closest('tr');

      var data = $tr.children("td").map(function() {
        return $(this).text();
      }).get();
      console.log(data);
      $('#r_id').val(data[0]);
          $('#applicant_name').val(data[1]);
          $('#email').val(data[2]);
          $('#applied_job').val(data[3]);
    
       
    });
  });
  </script>


  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="dist/js/adminlte.min.js"></script>


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