<?php include('header1.php')?>
 
 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- navbar -->
      <li class="nav-item">
        <a href="../logout.php" class="nav-link" titel="logout" role="button">
          <i class="fas fa-sign-out-alt"></i>
          Logout
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TFGP Admin</span>
    </a>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item has-treeview menu-open">
            <a href="<?=$site_url?>Admin/dashboard.php"
             class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
</li> 

    <!-- create Accounts   -->
    <li class="nav-item has-treeview">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Create Accounts</p>
              <i class="fas fa-angle-left rigth"></i>
            </a>
            <ul class="nav nav-treeview"class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=$site_url?>Admin/Teacher.php?user=teacher"
                 class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teachers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=$site_url?>Admin/Student.php?user=Student"
                 class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students</p>
                </a>
              </li>
              </ul>
          </li>
<!-- Manage Accounts -->
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Manage Accounts</p>
              <i class="fas fa-angle-left rigth"></i>
            </a>
            <ul class="nav nav-treeview"class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=$site_url?>Admin/user-account.php?user=Teacher"
                 class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Teachers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=$site_url?>Admin/user-account.php?user=Student"
                 class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Students</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=$site_url?>Admin/Activation.php?user=Activation"
                 class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Activation</p>
                </a>
              </li>
              </ul>
          </li>
           

          <!-- Department  -->
          <li class="nav-item has-treeview">
            <a href="<?=$site_url?>Admin/courses.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Manage Department</p>
            </a>
            </li>

            <!--courses  -->
           <li class="nav-item has-treeview">
            <a href="<?=$site_url?>Admin/Subjects.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Manage Subjects  </p>
            </a>
            </li>
            

<!-- Exams -->
          <!-- <li class="nav-item has-treeview">
            <a href="Admin/Exams.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Manage Exams</p>
            </a>
          </li> -->


          <!-- time table -->
          <li class="nav-item has-treeview">
            <a href="<?=$site_url?>Admin/Timetable.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Manage Time Table</p>
            </a>
          </li>

          <!-- changepassword -->
          <!-- <li class="nav-item has-treeview">
            <a href="<?=$site_url?>Admin/Change_password.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Change password</p>
            </a>
          </li> -->

         
</ul>
</nav> 
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">