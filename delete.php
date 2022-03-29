<?php include "header.php"; ?>

<?php 

if (isset($_GET['did'])) {
  $sid = $_GET['did'];

  if (isset($_POST['act'])) {
    $txt = $_POST['txt'];
    if ('DELETE'==$txt) {

      $sql = "DELETE FROM students WHERE ID = $sid";
      if ($conn->query($sql) === true) {
        $msg = "Data Delete Successfull";
        header("Refresh:2; url=students.php");
      }else{
        $err = "Data Delete Faild. Error:".$conn->error;
      }

    }else{
      $err="Wrong Input. Please Type <b>DELETE</b> for confirm.";
    }
  }

    


  }else{
    header('location:students.php');
  }

 ?>

    <div class="container py-4">
      <div class="row">
        <div class="pagetitle h2 ps-0">Delete Student</div>
      </div>

      <?php if (isset($msg)): ?>
        <div class="alert alert-success"><?php echo $msg; ?></div>
        <?php endif ?>

        <?php if (isset($err)){?>
        <div class="alert alert-danger"><?php echo $err; ?></div>
        <?php } ?>

      <div class="row">
        <p>Please Type <b>DELETE</b> for confirm.</p>
        <form action="" method="post">
          <input type="text" name="txt" class="" placeholder="Type DELETE">
          <input type="submit" name="act" class="btn btn-danger btn-sm" value="Confirm"> 
        </form>
      </div>
    </div>
<?php include "footer.php"; ?>