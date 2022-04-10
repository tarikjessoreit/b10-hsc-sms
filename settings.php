<?php include "header.php"; ?>
<?php 
  if (isset($_POST['user_reg_btn'])) {
    $userName = $_POST['username'];
    $password = $_POST['upassword'];
    $confirmPass = $_POST['uconpassword'];
    $userRules = $_POST['userRules'];

    if ($password != $confirmPass) {
      $err = "Password is not match";
    }else{
      $password = md5($password);
      // data insert
      $sql = "INSERT INTO users(username, userpassword, user_rules) VALUES ('$userName','$password','$userRules')";
      if ($conn->query($sql) === true) {
        $msg = "New User Registered";
      }else{
        $err = "Registation faild. Error: ".$conn->error;
      }
    }
  }

 ?>

    <div class="container py-4">
      <div class="row">
        <div class="pagetitle h2 ps-0">Settings</div>
      </div>

      <div class="row col-md-8">
        <?php if (isset($msg)): ?>
        <div class="alert alert-success"><?php echo $msg; ?></div>
        <?php endif ?>

        <?php if (isset($err)){?>
        <div class="alert alert-danger"><?php echo $err; ?></div>
        <?php } ?>

       <form class="was-validated" method="post" action="">
        <div class="form-group mt-3">
          <label for="uname">Username</label>
          <input type="text" name="username" class="form-control" id="uname" placeholder="Enter Username" required>
        </div>
        <div class="form-group mt-3">
          <label for="upass">Password</label>
          <input type="password" name="upassword" class="form-control" id="upass" placeholder="Password" required>
        </div>
        <div class="form-group mt-3">
          <label for="upass">Confirm Password</label>
          <input type="password" name="uconpassword" class="form-control" id="upass" placeholder="Password" required>
        </div>
        <div class="form-group mt-3">
          <label for="urules">User Rules</label>
          <select class="form-control" name="userRules" id="urules" required>
            <option value="">Please Select</option>
            <option value="admin">Admin</option>
            <option value="editor">Editor</option>
          </select>
        </div>

        <button type="submit" name="user_reg_btn" class="btn btn-primary mt-4">Registration</button>
      </form>
      </div>


      <div class="row mt-4">
        <div class="col-12 card p-0">
          <div class="card-header">All Users</div>
          <div class="card-body">
            <table id="example" class="table table-striped" style="width:100%">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>User Name</th>
                      <th>User Rulse</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) { ?>
                  <tr>
                      <td><?php echo $row['ID'];?></td>
                      <td><?php echo $row['username'];?></td>
                      <td><?php echo $row['user_rules'];?></td>
                      <td>
                        <a href="#?eid=<?php echo $row['ID'];?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                        <a href="#?did=<?php echo $row['ID'];?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                  </tr>
                  <?php 
                  }
                }

                 ?>
              </tbody>
              <tfoot>
                <thead>
                  <tr>
                      
                  <tr>
                      <th>ID</th>
                      <th>User Name</th>
                      <th>User Rulse</th>
                      <th>Action</th>
                  </tr>
                  </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>

    </div>
<?php include "footer.php"; ?>