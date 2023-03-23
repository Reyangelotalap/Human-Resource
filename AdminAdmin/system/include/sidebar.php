<?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1) ?>

<nav class="sidebar py-2 px-1 bg-primary text-secondary d-flex flex-column" id="sidebar">

  <div class="text-center prof mt-2 mx-2 p-3 pt-3">
    <a href="../user-profile/user-profile.php">
      <img src="../../../Job Portal/Image/3135715.png" width="60px" height="60px" class="rounded-pill justify-content-center">
    </a>

    <div class="sidebar-profile">
      <h4 class="m-0">Admin</h4>
      <small class="m-0">HR1 - Admin</small>
    </div>
  </div>

  <hr class="bg-lightblue">

  <div class="scrollbox my-2 px-1 border-top border-bottom border-lightblue">

    <!-- ##########################################################################################################
                                           RECRUITMENT
########################################################################################################## -->


    <ul class="navbar-nav bg-blue1">
      <li class="nav-item px-2 py-1">
        <a href="../dashboard/dashboard" class="nav-link rounded
        <?= $page == 'dashboard.php' ? 'active':'' ?> ">
        <i class="fa-solid fa-magnifying-glass-plus" style="min-width: 30px; font-size:21px; margin-left:13px; color: #F6C53F"></i><span
            class="p-2" style=" font-weight:  ">Recruitment</span>
        </a>
      </li>
    </ul>

    <!-- ##########################################################################################################
                                         APPLICANT MANAGEMENT
########################################################################################################## -->

    <div class="accordion accordion-flush" id="module1-link">

      <div class="accordion-item border-top border-bottom border-lightblue">

        <h2 class="accordion-header" id="module1-heading">
          <button class="accordion-button collapsed p-3 bg-blue1 text-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#corehuman-collapse" aria-expanded="false" aria-controls="module1-collapse">
            <i class="fa-solid fa-users" style="min-width: 30px; font-size:21px; color: #F6C53F;"></i><span class="px-2" style=" font-weight:  ">
              Applicant</span>
          </button>
        </h2>

        <div id="corehuman-collapse"
          class="accordion-collapse collapse 
            <?= $page == 'm1-page-1.php' || $page == 'm1-page-2.php' || $page == 'm1-page-3.php' || $page == 'm1-page-4.php' || $page == 'm1-page-5.php' || $page == 'm1-page-6.php'  || $page == 'm1-page-7.php' ? 'show':'' ?>"
          aria-labelledby="corehuman-heading" data-bs-parent="#corehuman-link">

          <div class="accordion-body m-0 p-0">

            <ul class="navbar-nav d-flex flex-column text-secondary">
              <li class="nav-item bg-blue1 border-top border-bottom border-lightblue py-1 px-2">
                <a href="../module-1/m1-page-1"
                  class="nav-link rounded p-2 <?= $page == 'm1-page-1.php' ? 'active':'' ?>">
                  <i class="fas fa-users" style="margin-right: 10px; color:#F6C53F"></i> <small style="font-size: 13px;  font-weight:  ">Applicant list</small>
                </a>
              </li>
           
              <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-1/m1-page-3"
                  class="nav-link rounded p-2 <?= $page == 'm1-page-3.php' ? 'active':'' ?>">
                  <i class="fas fa-user-check" style="margin-right: 10px; color:#F6C53F"></i> <small style="font-size: 13px;  font-weight:  ">Shortlisted applicant</small>
                </a>
              </li>
              <!-- <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-1/m1-page-4"
                  class="nav-link rounded p-2 <?= $page == 'm1-page-4.php' ? 'active':'' ?>">
                  <i class="fas fa-users-slash" style="margin-right: 10px; color:#F6C53F"></i> <small style="font-size: 13px; font-weight:  ">Rejected applicant</small>
                </a>
              </li> -->

              <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-1/m1-page-5"
                  class="nav-link rounded p-2 <?= $page == 'm1-page-5.php' ? 'active':'' ?>">
                  <i class="fas fa-user-check"  style="margin-right: 10px; color:#F6C53F"></i>
                  <small style="font-size: 13px; font-weight:  " >Initial Interview</small>
                </a>
              </li>


              <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-1/m1-page-6"
                  class="nav-link rounded p-2 <?= $page == 'm1-page-6.php' ? 'active':'' ?>">
                  <i class="fas fa-user-tie"  style="margin-right: 10px; color:#F6C53F"></i>
          <small style="font-size: 13px; font-weight:  ">Final Interview</small>
                </a>
              </li>

              <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-1/m1-page-7"
                  class="nav-link rounded p-2 <?= $page == 'm1-page-7.php' ? 'active':'' ?>">
                  <i class="fas fa-user-tie"  style="margin-right: 10px; color:#F6C53F"></i>
          <small style="font-size: 13px; font-weight:  ">Top Candidates</small>
                </a>
              </li>

            </ul>

          </div>

        </div>

      </div>

    </div>

    <!-- ##########################################################################################################
                                       LEARNING MANAGEMENT
########################################################################################################## -->

    <div class="accordion accordion-flush" id="module2-link">

      <div class="accordion-item border-top border-bottom border-lightblue">

        <h2 class="accordion-header" id="module2-heading">
          <button class="accordion-button collapsed p-3 bg-blue1 text-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#analytics-collapse" aria-expanded="false" aria-controls="module2-collapse">
            <i class="fa fa-chalkboard-teacher" style="min-width: 30px; font-size:21px; color: #F6C53F"></i>
            <span
              class="px-2" style=" font-weight:  ">Learning</span>
          </button>
        </h2>

        <div id="analytics-collapse"
          class="accordion-collapse collapse 
            <?= $page == 'm2-page-1.php' || $page == 'm2-page-2.php' || $page == 'm2-page-3.php' || $page == 'm2-page-4.php' ? 'show':'' ?>"
          aria-labelledby="analytics-heading" data-bs-parent="#analytics-link">

          <div class="accordion-body m-0 p-0">

          <ul class="navbar-nav d-flex flex-column text-secondary">
              <li class="nav-item bg-blue1 border-top border-bottom border-lightblue py-1 px-2">
                <a href="../module-2/m2-page-1"
                  class="nav-link rounded p-2 <?= $page == 'm2-page-1.php' ? 'active':'' ?>">
                  <i class="fas fa-copy"style="margin-right: 10px; color:#F6C53F"></i>
                  <small style="font-size: 13px; font-weight:  ">Examinee</small>
                </a>
              </li>

              <li class="nav-item bg-blue1 border-top border-bottom border-lightblue py-1 px-2">
                <a href="../module-2/m2-page-2"
                  class="nav-link rounded p-2 <?= $page == 'm2-page-2.php' ? 'active':'' ?>">
                  <i class="fas fa-copy"style="margin-right: 10px; color:#F6C53F"></i>
                  <small style="font-size: 13px;font-weight:  ">Status</small>
                </a>
              </li>

            </ul>

          </div>

        </div>

      </div>

    </div>

    <!-- ##########################################################################################################
                                   TRAINING MANAGEMENT
########################################################################################################## -->

    <div class="accordion accordion-flush" id="module3-link">

      <div class="accordion-item border-top border-bottom border-lightblue">

        <h2 class="accordion-header" id="module3-heading">
          <button class="accordion-button collapsed p-3 bg-blue1 text-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#timesheet-collapse" aria-expanded="false" aria-controls="module3-collapse">
            <i class="fas fa-business-time" style="min-width: 30px; font-size:21px; color: #F6C53F"></i><span
              class="px-2" style=" font-weight:  ">Training</span>
          </button>
        </h2>

        <div id="timesheet-collapse"
          class="accordion-collapse collapse 
            <?= $page == 'm3-page-1.php' || $page == 'm3-page-2.php' || $page == 'm3-page-3.php' || $page == 'm3-page-4.php' ? 'show':'' ?>"
          aria-labelledby="timesheet-heading" data-bs-parent="#timesheet-link">

          <div class="accordion-body m-0 p-0">

            <ul class="navbar-nav d-flex flex-column text-secondary">
              <li class="nav-item bg-blue1 border-top border-bottom border-lightblue py-1 px-2">
                <a href="../module-3/m3-page-1"
                  class="nav-link rounded p-2 <?= $page == 'm3-page-1.php' ? 'active':'' ?>">
                  <i class="fas fa-copy"style="margin-right: 10px; color:#F6C53F"></i>
                  <small style="font-size: 13px;font-weight:  ">Trainees</small>
                </a>
              </li>
              <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-3/m3-page-2"
                  class="nav-link rounded p-2 <?= $page == 'm3-page-2.php' ? 'active':'' ?>">
                  <i class="fas fa-copy"style="margin-right: 10px; color:#F6C53F"></i>
                  <small style="font-size: 13px;font-weight:  ">Status</small>
                </a>
              </li>
              <!-- <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-3/m3-page-3.php"
                  class="nav-link rounded p-2 <?= $page == 'm3-page-3.php' ? 'active':'' ?>">
                  Attendance
                </a>
              </li>
              <li class="nav-item bg-blue1 py-1 px-2">
                <a href="../module-3/m3-page-4.php"
                  class="nav-link rounded p-2 <?= $page == 'm3-page-4.php' ? 'active':'' ?>">
                  Page 4
                </a>
              </li> -->


            </ul>

          </div>

        </div>

      </div>

    </div>

    <!-- ##########################################################################################################
                            NEWLY HIRED
########################################################################################################## -->

    <div class="accordion accordion-flush" id="module4-link">

      <div class="accordion-item border-top border-bottom border-lightblue">

        <h2 class="accordion-header" id="module4-heading">
          <button class="accordion-button collapsed p-3 bg-blue1 text-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#leave-collapse" aria-expanded="false" aria-controls="module4-collapse">
            <i class="fas fa-user-tie" style="min-width: 30px; font-size:21px; color: #F6C53F"></i>
            <span class="px-2" style=" font-weight:  ">Newly Hired</span>
          </button>
        </h2>

        <div id="leave-collapse"
          class="accordion-collapse collapse 
            <?= $page == 'm4-page-1.php' || $page == 'm4-page-2.php' || $page == 'm4-page-3.php' || $page == 'm4-page-4.php' ? 'show':'' ?>"
          aria-labelledby="leave-heading" data-bs-parent="#leave-link">

          <div class="accordion-body m-0 p-0">

            <ul class="navbar-nav d-flex flex-column text-secondary">
              <li class="nav-item bg-blue1 border-top border-bottom border-lightblue py-1 px-2">
                <a href="../module-4/m4-page-1"
                  class="nav-link rounded p-2 <?= $page == 'm4-page-1.php' ? 'active':'' ?>">
                  <i class="fas fa-copy"style="margin-right: 10px; color:#F6C53F"></i>
                  <small style="font-size: 13px;font-weight:  ">List of Newly Hired</small>
                </a>
              </li>
              <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-4/m4-page-2"
                  class="nav-link rounded p-2 <?= $page == 'm4-page-2.php' ? 'active':'' ?>">
                  <i class="fas fa-copy"style="margin-right: 10px; color:#F6C53F"></i>
                  <small style="font-size: 13px;font-weight:  ">Contract Request</small>
                </a>
              </li>
              <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-4/m4-page-3"
                  class="nav-link rounded p-2 <?= $page == 'm4-page-3.php' ? 'active':'' ?>">
                  <i class="fas fa-copy"style="margin-right: 10px; color:#F6C53F"></i>
                  <small style="font-size: 13px;font-weight:  ">Status</small>
                </a>
              </li>
            

            </ul>


          </div>

        </div>

      </div>

    </div>

    <!-- ##########################################################################################################
                            ESS PORTAL
########################################################################################################## -->

    <div class="accordion accordion-flush" id="module5-link">

      <div class="accordion-item border-top border-bottom border-lightblue">

        <h2 class="accordion-header" id="module5-heading">
          <button class="accordion-button collapsed p-3 bg-blue1 text-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#claims-collapse" aria-expanded="false" aria-controls="module5-collapse">
            <i class="fas fa-user-plus" style="min-width: 30px; font-size:21px; color: #F6C53F"></i>
            <span class="px-2" style=" font-weight:  !important">
              Ess Portal</span>
          </button>
        </h2>

        <div id="claims-collapse"
          class="accordion-collapse collapse 
    <?= $page == 'm5-page-1.php' || $page == 'm5-page-2.php' || $page == 'm5-page-3.php' || $page == 'm5-page-4.php' ? 'show':'' ?>"
          aria-labelledby="claims-heading" data-bs-parent="#claims-link">

          <div class="accordion-body m-0 p-0">

            <ul class="navbar-nav d-flex flex-column text-secondary">
              <li class="nav-item bg-blue1 border-top border-bottom border-lightblue py-1 px-2">
                <a href="../module-5/m5-page-1.php"
                  class="nav-link rounded p-2 <?= $page == 'm5-page-1.php' ? 'active':'' ?>">
                    Ess Accounts
                </a>
              </li>
              <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-5/m5-page-2.php"
                  class="nav-link rounded p-2 <?= $page == 'm5-page-2.php' ? 'active':'' ?>">
                  Page 2
                </a>
              </li>
              <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-5/m5-page-3.php"
                  class="nav-link rounded p-2 <?= $page == 'm5-page-3.php' ? 'active':'' ?>">
                  Page 3
                </a>
              </li>
              <li class="nav-item bg-blue1 py-1 px-2">
                <a href="../module-5/m5-page-4.php"
                  class="nav-link rounded p-2 <?= $page == 'm5-page-4.php' ? 'active':'' ?>">
                  Page 4
                </a>
              </li>

            </ul>


          </div>

        </div>

      </div>

    </div>

    <!-- ##########################################################################################################
                                            PERFORMANCE MANAGEMENT
########################################################################################################## -->

    <div class="accordion accordion-flush" id="module6-link">

      <div class="accordion-item border-top border-bottom border-lightblue">

        <h2 class="accordion-header" id="module6-heading">
          <button class="accordion-button collapsed p-3 bg-blue1 text-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#compen-collapse" aria-expanded="false" aria-controls="module6-collapse">
            <i class="fa-solid fa-handshake " style="min-width: 30px; font-size:21px; color: #F6C53F"></i>
            <span class="px-2" style=" font-weight:  !important">
              Performance</span></span>
          </button>
        </h2>

        <div id="compen-collapse"
          class="accordion-collapse collapse 
    <?= $page == 'm6-page-1.php' || $page == 'm6-page-2.php' || $page == 'm6-page-3.php' || $page == 'm6-page-4.php' ? 'show':'' ?>"
          aria-labelledby="compen-heading" data-bs-parent="#compen-link">

          <div class="accordion-body m-0 p-0">

            <ul class="navbar-nav d-flex flex-column text-secondary">
              <li class="nav-item bg-blue1 border-top border-bottom border-lightblue py-1 px-2">
                <a href="../module-6/m6-page-1.php"
                  class="nav-link rounded p-2 <?= $page == 'm6-page-1.php' ? 'active':'' ?>">

                </a>
              </li>
              <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-6/m6-page-2.php"
                  class="nav-link rounded p-2 <?= $page == 'm6-page-2.php' ? 'active':'' ?>">
                  Page 2
                </a>
              </li>
              <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-6/m6-page-3.php"
                  class="nav-link rounded p-2 <?= $page == 'm6-page-3.php' ? 'active':'' ?>">
                  Page 3
                </a>
              </li>
              <li class="nav-item bg-blue1 py-1 px-2">
                <a href="../module-6/m6-page-4.php"
                  class="nav-link rounded p-2 <?= $page == 'm6-page-4.php' ? 'active':'' ?>">
                  Page 4
                </a>
              </li>

            </ul>


          </div>

        </div>

      </div>

    </div>

    <!-- ##########################################################################################################
                                 SOCIAL RECOGNITION
########################################################################################################## -->

    <div class="accordion accordion-flush" id="module7-link">

      <div class="accordion-item border-top border-bottom border-lightblue">

        <h2 class="accordion-header" id="module7-heading">
          <button class="accordion-button collapsed p-3 bg-blue1 text-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#payroll-collapse" aria-expanded="false" aria-controls="module7-collapse">
            <i class="fas fa-certificate" style="min-width: 30px; font-size:21px; color: #F6C53F"></i>
            <span class="px-2"style=" font-weight:  !important">
             Recognition</span>
          </button>
        </h2>

        <div id="payroll-collapse"
          class="accordion-collapse collapse 
    <?= $page == 'm7-page-1.php' || $page == 'm7-page-2.php' || $page == 'm7-page-3.php' || $page == 'm7-page-4.php' ? 'show':'' ?>"
          aria-labelledby="payroll-heading" data-bs-parent="#payroll-link">

          <div class="accordion-body m-0 p-0">

            <ul class="navbar-nav d-flex flex-column text-secondary">
              <li class="nav-item bg-blue1 border-top border-bottom border-lightblue py-1 px-2">
                <a href="../module-7/m7-page-1.php"
                  class="nav-link rounded p-2 <?= $page == 'm7-page-1.php' ? 'active':'' ?>">

                </a>
              </li>
              <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-7/m7-page-2.php"
                  class="nav-link rounded p-2 <?= $page == 'm7-page-2.php' ? 'active':'' ?>">
                  Page 2
                </a>
              </li>
              <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
                <a href="../module-7/m7-page-3.php"
                  class="nav-link rounded p-2 <?= $page == 'm7-page-3.php' ? 'active':'' ?>">
                  Page 3
                </a>
              </li>
              <li class="nav-item bg-blue1 py-1 px-2">
                <a href="../module-7/m7-page-4.php"
                  class="nav-link rounded p-2 <?= $page == 'm7-page-4.php' ? 'active':'' ?>">
                  Page 4
                </a>
              </li>

            </ul>


          </div>

        </div>

      </div>

    </div>



      <!-- ##########################################################################################################
                                  sUCCESSION PLANNING
########################################################################################################## -->

<div class="accordion accordion-flush" id="module8-link">

<div class="accordion-item border-top border-bottom border-lightblue">

  <h2 class="accordion-header" id="module8-heading">
    <button class="accordion-button collapsed p-3 bg-blue1 text-secondary" type="button" data-bs-toggle="collapse"
      data-bs-target="#payroll1-collapse" aria-expanded="false" aria-controls="module8-collapse">
      <i class="fas fa-search-plus"  style="min-width: 30px; font-size:21px; color: #F6C53F"></i>
     <span class="px-2" style=" font-weight:  !important">
        Succession</span>
    </button>
  </h2>

  <div id="payroll1-collapse"
    class="accordion-collapse collapse 
<?= $page == 'm8-page-1.php' || $page == 'm8-page-2.php' || $page == 'm8-page-3.php' || $page == 'm8-page-4.php' ? 'show':'' ?>"
    aria-labelledby="payroll-heading" data-bs-parent="#payroll-link">

    <div class="accordion-body m-0 p-0">

      <ul class="navbar-nav d-flex flex-column text-secondary">
        <li class="nav-item bg-blue1 border-top border-bottom border-lightblue py-1 px-2">
          <a href="../module-8/m8-page-1.php"
            class="nav-link rounded p-2 <?= $page == 'm8-page-1.php' ? 'active':'' ?>">

          </a>
        </li>
        <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
          <a href="../module-8/m8-page-2.php"
            class="nav-link rounded p-2 <?= $page == 'm8-page-2.php' ? 'active':'' ?>">
            Page 2
          </a>
        </li>
        <li class="nav-item bg-blue1 border-bottom border-lightblue py-1 px-2">
          <a href="../module-8/m8-page-3.php"
            class="nav-link rounded p-2 <?= $page == 'm8-page-3.php' ? 'active':'' ?>">
            Page 3
          </a>
        </li>
        <li class="nav-item bg-blue1 py-1 px-2">
          <a href="../module-9/m8-page-4.php"
            class="nav-link rounded p-2 <?= $page == 'm8-page-4.php' ? 'active':'' ?>">
            Page 4
          </a>
        </li>

      </ul>


    </div>

  </div>

</div>

</div>




  <!-- ##########################################################################################################
                                     COMPETENCY MANAGEMENT
########################################################################################################## -->

<div class="accordion accordion-flush" id="module6-link">

<div class="accordion-item border-top border-bottom border-lightblue">

  <h2 class="accordion-header" id="module6-heading">
    <button class="accordion-button collapsed p-3 bg-blue1 text-secondary" type="button" data-bs-toggle="collapse"
      data-bs-target="#payroll6-collapse" aria-expanded="false" aria-controls="module6-collapse">
      <i class="fas fa-list-alt"  style="min-width: 30px; font-size:21px; color: #F6C53F"></i>
      <span class="px-2" style=" font-weight:  !important">
        Competency </span>
    </button>
  </h2>

  <div id="payroll6-collapse"
    class="accordion-collapse collapse 
<?= $page == 'm9-page-1.php' || $page == 'm9-page-2.php' || $page == 'm9-page-3.php' || $page == 'm9-page-4.php' ? 'show':'' ?>"
    aria-labelledby="payroll-heading" data-bs-parent="#payroll-link">

    <div class="accordion-body m-0 p-0">

      <ul class="navbar-nav d-flex flex-column text-secondary">
        <li class="nav-item bg-blue1 border-top border-bottom border-lightblue py-1 px-2">
          <a href="../module-9/m9-page-1.php"
            class="nav-link rounded p-2 <?= $page == 'm9-page-1.php' ? 'active':'' ?>">
            <i class="fas fa-th-list" style="margin-right: 10px; color:#F6C53F"></i>
                  <small style="font-size: 13px;font-weight:  ">Request List </small>
      </span>
          </a>
        </li>
        

      </ul>


    </div>

  </div>

</div>

</div>


    <!-- <div class="container border-top border-3 border-yellow p-3 mt-auto"></div> -->

</nav>