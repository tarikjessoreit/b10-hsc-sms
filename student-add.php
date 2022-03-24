<?php include "header.php"; ?>
<?php 
  if (isset($_POST['std_reg_btn'])) {

    $reg_datetime = date('Y-m-d H:i:s');
    $s_roll = $_POST['std_roll'];
    $s_reg_no = $_POST['std_reg'];
    $s_year = $_POST['std_year'];
    $s_name = $_POST['std_name'];
    $s_address = $_POST['std_address'];
    $s_contact_no = $_POST['std_contact_no'];
    $s_email = $_POST['std_email'];
    $s_note = $_POST['std_note'];
    $s_status = 'active';


    // image upload
    $target_dir = "assets/images/uploads/";
    $target_file = $target_dir . $s_roll.'.jpg';
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadOk = 1;

    // Check if image file is a actual image or fake image
   

    // Check file size
    if ($_FILES["std_photo"]["size"] > 5000000) {
      $uploadOk = 0;
      $ferror =  "Image size gaterthan 5 MB";
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      $uploadOk = 0;
      $ferror = "File type is not acceptable";
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk != 0) {
      move_uploaded_file($_FILES["std_photo"]["tmp_name"], $target_file);
    }



  }

 ?>
    <div class="container py-4">
      <div class="row">
        <div class="pagetitle h2 ps-0 text-center">Registration Student</div>
      </div>

      <div class="row d-flex justify-content-center">
       <div class="col-md-8">
         <form class="was-validated" action="" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="form-group col-md-4 mt-4">
                <label for="stdReg">Roll</label>
                <input type="text" name="std_roll" class="form-control" id="stdRoll" placeholder="Enter Roll" required>
              </div>

              <div class="form-group col-md-4 mt-4">
                <label for="stdReg">Registration No</label>
                <input type="text" name="std_reg" class="form-control" id="stdReg" placeholder="Enter Registration No" required>
              </div>

              <div class="form-group col-md-4 mt-4">
                <label for="stdyear">Year</label>
                <select name="std_year" id="stdyear" class="form-control" required>
                  <option value="">Select Year</option>
                  <option value="1st">1st Year</option>
                  <option value="2nd">2nd Year</option>
                </select>
              </div>
            </div>

            <div class="form-group col-md-12 mt-4" required>
              <label for="stdName">Student Name</label>
              <input type="text" name="std_name" class="form-control" id="stdName" placeholder="Enter Name" required>
            </div>



            <div class="form-group col-md-12 mt-4">
              <label for="stdadd">Student Address</label>
              <input type="text" name="std_address" class="form-control" id="stdadd" placeholder="Enter Address">
            </div>

            <div class="form-group col-md-12 mt-4">
              <label for="stdCno">Student Contact no.</label>
              <input type="text" name="std_contact_no" class="form-control" id="stdCno" placeholder="Enter Contact No.">
            </div>

            <div class="form-group col-md-12 mt-4">
              <label for="stdEmail">Student Email</label>
              <input type="text" name="std_email" class="form-control" id="stdEmail" placeholder="Enter Email">
            </div>


            <div class="form-group col-md-12 mt-4">
              <label for="stdNote">Student Note</label>
              <textarea name="std_note" class="form-control" id="stdNote"></textarea>
            </div>


            <div class="form-group col-md-12 mt-4">
              <label for="uploadphoto" class="d-block">Upload Student Photo</label>
              <input type="file" name="std_photo" class="form-control-file mt-2" id="uploadphoto">
            </div>

            <div class="col-md-12 mt-4">
              <input type="submit" name="std_reg_btn" class="btn btn-primary" value="Registratrion">
            </div>
          </form>
       </div>
      </div>
    </div>
<?php include "footer.php"; ?>