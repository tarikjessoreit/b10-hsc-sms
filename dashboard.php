<?php include "header.php"; ?>
    <div class="container py-4">
      <div class="row">
        <div class="pagetitle h2 ps-0">Dashboard</div>
      </div>
      <!-- students count -->
      <div class="row mt-4 m-0 p-0">
        <div class="col-md-4">
          <div class="card p-3">
             <div class="h5 border-bottom pb-2">Total Students</div>
          <div class="h1"><?php echo count_students(); ?></div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card p-3">
             <div class="h5 border-bottom pb-2">1st Year Students</div>
          <div class="h1"><?php echo count_1st_year_students(); ?></div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card p-3">
             <div class="h5 border-bottom pb-2">2nd Year Students</div>
          <div class="h1"><?php echo count_2nd_year_students(); ?></div>
          </div>
        </div>
      </div><!--/students count-->

      <div class="row mt-4">
        <div class="col-12 card p-0">
          <div class="card-header">All Student List</div>
          <div class="card-body">
            <table id="example" class="table table-striped" style="width:100%">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Photo</th>
                      <th>Roll</th>
                      <th>Reg. No.</th>
                      <th>Year</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Contact No.</th>
                      <th>Email</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                $sql = "SELECT * FROM students";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) { ?>
                  <tr>
                      <td><?php echo $row['ID'];?></td>
                      <td><img src="<?php echo $row['std_photo_url'];?>" alt="" style="max-height: 50px;"></td>
                      <td><?php echo $row['std_roll'];?></td>
                      <td><?php echo $row['std_reg'];?></td>
                      <td><?php echo $row['std_year'];?></td>
                      <td><?php echo $row['std_name'];?></td>
                      <td><?php echo $row['std_address'];?></td>
                      <td><?php echo $row['std_contact'];?></td>
                      <td><?php echo $row['std_email'];?></td>
                      <td>
                        <a href="student-edit.php?eid=<?php echo $row['ID'];?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                        <a href="delete.php?did=<?php echo $row['ID'];?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
                      <th>ID</th>
                      <th>Photo</th>
                      <th>Roll</th>
                      <th>Reg. No.</th>
                      <th>Year</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Contact No.</th>
                      <th>Email</th>
                      <th>Action</th>
                  </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>


    </div>
<?php include "footer.php"; ?>