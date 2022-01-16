
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../frontend/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Devicks &copy;</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../frontend/dist/img/avatar5.png" class="img-circle " alt="User Image">
        </div>
        <div class="info">
          <a href="home.php"  class="d-block"><?php echo $asfun->getUsername($_SESSION["email"]); ?></a>
        </div>
      </div>


      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!--
          <li class="nav-item">
            <a href="sprints.php" class="nav-link" >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
-->

          <li class="nav-item">
            <a href="project.php" class="nav-link" >
              <i class="nav-icon fas fa-list"></i>
              <p>
                Projects
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="task.php" class="nav-link" >
              <i class="nav-icon fas fa-list"></i>
              <p>
                Task
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="sprints.php" class="nav-link" >
              <i class="nav-icon fas fa-list"></i>
              <p>
                Sprint
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>