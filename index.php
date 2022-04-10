<?php include "config.php"; ?>
<?php 
  if (isset($_SESSION['LogStatus']) && $_SESSION['LogStatus'] === true) {
    header('location:dashboard.php');
  }

 ?>
<?php 
  if (isset($_POST['loginbtn'])) {
    $userName = $_POST['uname'];
    $password = md5($_POST['upass']);

     $sql = "SELECT * FROM users WHERE username = '$userName' And userpassword = '$password'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $uRulse = $row['user_rules'];
        $_SESSION['LogStatus'] = true;
        $_SESSION['username'] = $userName;
        $_SESSION['userRulse'] = $uRulse;
        header('location:dashboard.php');

        $msg = "Login Successfull";

      }else{
        $err = "Wrong Username & Password. Plase Try Again!";
      }


  }

 ?>

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
        <?php if (isset($msg)): ?>
        <div class="alert alert-success"><?php echo $msg; ?></div>
        <?php endif ?>

        <?php if (isset($err)){?>
        <div class="alert alert-danger"><?php echo $err; ?></div>
        <?php } ?>
          <div class="h2 text-center mb-3">Please Login</div>
          <form method="post" action="">
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