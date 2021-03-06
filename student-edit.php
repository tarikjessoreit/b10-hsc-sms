<?php include "header.php"; ?>
<?php 
if (isset($_GET['eid'])) {
  $sid = $_GET['eid'];

  // edit data
  if (isset($_POST['std_update_btn'])) {

    $s_roll = $_POST['std_roll'];
    $s_reg_no = $_POST['std_reg'];
    $s_year = $_POST['std_year'];
    $s_name = $_POST['std_name'];
    $s_address = $_POST['std_address'];
    $s_contact_no = $_POST['std_contact_no'];
    $s_email = $_POST['std_email'];
    $s_note = $_POST['std_note'];
    $s_status = $_POST['std_status'];

    // variable for photo upload
    $target_file = 'assets/images/uploads/' . $s_roll.'.jpg';
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadOk = 1;

    // image upload
    // Check file size
    if ($_FILES["std_photo"]["size"] > 5200000) {
      $uploadOk = 0;
      $err =  "Image size gaterthan 5 MB";
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      $uploadOk = 0;
      $err = "File type is not acceptable";
    }
    

    // data insert
    $sql = "UPDATE students SET std_roll=$s_roll, std_reg=$s_reg_no, std_year='$s_year', std_name='$s_name', std_address='$s_address', std_contact='$s_contact_no', std_email='$s_email', std_photo_url='$target_file', std_note='$s_note', std_status='$s_status' WHERE ID = $sid"; 

    
    if ($conn->query($sql) === true) {
      if ($uploadOk != 0) {
        move_uploaded_file($_FILES["std_photo"]["tmp_name"], $target_file);
      }

      $msg = "Student Data Updated!";
    }else{
      $err = "Data Update Faild. Error:".$conn->error;
    }
    
  }


// get data from dataabase
  $sql = "SELECT * FROM students WHERE ID = $sid";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) { 
      $sroll = $row['std_roll'];
      $sreg = $row['std_reg'];
      $syear = $row['std_year'];
      $sname = $row['std_name'];
      $saddr =$row['std_address'];
      $scon = $row['std_contact'];
      $semail = $row['std_email'];
      $snote= $row['std_note'];
      $sphotoURL= $row['std_photo_url'];
      $sstatus= $row['std_status'];
     }
   }
}else{
  header('location:index.php');
}




 ?>
    <div class="container py-4">
      <div class="row">
        <div class="pagetitle h2 ps-0 text-center">Registration Student</div>
      </div>

      <div class="row d-flex justify-content-center">
       <div class="col-md-8">
        <div class="text-center">
          <div style="background: url(<?php echo $sphotoURL;?>);background-size: cover; width: 200px; height: 200px;border-radius: 50%;border: 5px solid #dadada; margin: 0px auto;"></div>
        </div>

        <?php if (isset($msg)): ?>
        <div class="alert alert-success"><?php echo $msg; ?></div>
        <?php endif ?>

        <?php if (isset($err)){?>
        <div class="alert alert-danger"><?php echo $err; ?></div>
        <?php } ?>

         <form class="was-validated" action="" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="form-group col-md-4 mt-4">
                <label for="stdReg">Roll</label>
                <input type="text" name="std_roll" value="<?php echo $sroll;?>" class="form-control" id="stdRoll" placeholder="Enter Roll" required>
              </div>

              <div class="form-group col-md-4 mt-4">
                <label for="stdReg">Registration No</label>
                <input type="text" name="std_reg" value="<?php echo $sreg;?>" class="form-control" id="stdReg" placeholder="Enter Registration No" required>
              </div>

              <div class="form-group col-md-4 mt-4">
                <label for="stdyear">Year</label>
                <select name="std_year" id="stdyear" class="form-control" required>
                  <option value="">Select Year</option>
                  <option value="1st" <?php echo $syear=='1st'?'selected':''?>>1st Year</option>
                  <option value="2nd" <?php echo $syear=='2nd'?'selected':''?>>2nd Year</option>
                </select>
              </div>
            </div>

            <div class="form-group col-md-12 mt-4" required>
              <label for="stdName">Student Name</label>
              <input type="text" name="std_name"  value="<?php echo $sname;?>" class="form-control" id="stdName" placeholder="Enter Name" required>
            </div>



            <div class="form-group col-md-12 mt-4">
              <label for="stdadd">Student Address</label>
              <input type="text" name="std_address" value="<?php echo $saddr;?>" class="form-control" id="stdadd" placeholder="Enter Address">
            </div>

            <div class="form-group col-md-12 mt-4">
              <label for="stdCno">Student Contact no.</label>
              <input type="text" name="std_contact_no"  value="<?php echo $scon;?>" class="form-control" id="stdCno" placeholder="Enter Contact No.">
            </div>

            <div class="form-group col-md-12 mt-4">
              <label for="stdEmail">Student Email</label>
              <input type="text" name="std_email"  value="<?php echo $semail;?>" class="form-control" id="stdEmail" placeholder="Enter Email">
            </div>


            <div class="form-group col-md-12 mt-4">
              <label for="stdNote">Student Note</label>
              <textarea name="std_note" class="form-control" id="stdNote"><?php echo $snote;?></textarea>
            </div>


            <div class="form-group col-md-12 mt-4">
              <label for="uploadphoto" class="d-block">Upload Student Photo</label>
              <input type="file" name="std_photo" class="form-control-file mt-2" id="uploadphoto">
            </div>


              <div class="form-group col-md-4 mt-4">
                <label for="stdstatus">Status</label>
                <select name="std_status" id="stdstatus" class="form-control" required>
                  <option value="">Select Year</option>
                  <option value="active" <?php echo $sstatus=='active'?'selected':''?>>Active</option>
                  <option value="deactive" <?php echo $sstatus=='deactive'?'selected':''?>>Deactive</option>
                  <option value="transferred" <?php echo $sstatus=='transferred'?'selected':''?>>Transferred</option>
                </select>
              </div>

            <div class="col-md-12 mt-4">
              <input type="submit" name="std_update_btn" class="btn btn-primary" value="Registratrion">
            </div>
          </form>
       </div>
      </div>
    </div>
<?php include "footer.php"; ?>