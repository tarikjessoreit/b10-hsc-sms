 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand font-weight-bold" href="#">Student Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="dashboard.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="student-add.php">Add Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="students.php">Student List</a>
            </li>
          </ul>

          <div class="row">
            <form class="d-flex col-8" method="get" action="search.php">
              <input name="s" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-danger" type="submit">Search</button>
            </form>

            <div class="dropdown col-4">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="user-action" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-3"></i><?php echo $_SESSION['username'] ?>
              </button>
              <ul class="dropdown-menu" aria-labelledby="user-action">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="settings.php">Settings</a></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </nav>

