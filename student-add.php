<?php include "header.php"; ?>
    <div class="container py-4">
      <div class="row">
        <div class="pagetitle h2 ps-0 text-center">Registration Student</div>
      </div>

      <div class="row d-flex justify-content-center">
       <div class="col-md-8">
         <form class="was-validated">
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
                  <option value="1st Year">1st Year</option>
                  <option value="2nd Year">2nd Year</option>
                </select>
              </div>
            </div>

            <div class="form-group mt-4" required>
              <label for="stdName">Student Name</label>
              <input type="text" name="std_name" class="form-control" id="stdName" placeholder="Enter Name" required>
            </div>



            <div class="form-group mt-4">
              <label for="stdadd">Student Address</label>
              <input type="text" name="std_address" class="form-control" id="stdadd" placeholder="Enter Address">
            </div>

            <div class="form-group mt-4">
              <label for="stdCno">Student Contact no.</label>
              <input type="text" name="std_contact_no" class="form-control" id="stdCno" placeholder="Enter Contact No.">
            </div>

            <div class="form-group mt-4">
              <label for="stdEmail">Student Email</label>
              <input type="text" name="std_email" class="form-control" id="stdEmail" placeholder="Enter Email">
            </div>

            <div class="col-md-12 mt-4">
              <input type="submit" name="std_reg_btn" class="btn btn-primary" value="Registratrion">
            </div>
          </form>
       </div>
      </div>
    </div>
<?php include "footer.php"; ?>