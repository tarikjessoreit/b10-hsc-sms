<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Login | Student Management System</title>
  </head>
  <body id="loginpage">
    <div class="container col-4 card p-3">
      <div class="row">
        <div class="col-md-12">
          <div class="h2 text-center mb-3">Please Login</div>
          <form method="" action="dashboard.php">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="uname" class="form-control" id="username">
            </div>
            <div class="mb-3">
              <label for="userpassword" class="form-label">Password</label>
              <input type="password" name="upass" class="form-control" id="userpassword">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="loginchecked">
              <label class="form-check-label" for="loginbtn">Check me out</label>
            </div>
            <button type="submit" name="loginbtn" class="btn btn-primary w-100">Login</button>
          </form>
          
        </div>
      </div>
    </div>
    <!--  Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>