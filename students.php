<?php include "header.php"; ?>
    <div class="container py-4">
      <div class="row">
        <div class="pagetitle h2 ps-0">All Students</div>
      </div>

            <div class="row mt-4">
        <div class="col-12 card p-0">
          <div class="card-header">All Student List</div>
          <div class="card-body">
            <table id="example" class="table table-striped" style="width:100%">
              <thead>
                  <tr>
                      <th>ID</th>
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
                  <tr>
                      <td>01</td>
                      <td>202201</td>
                      <td>123456</td>
                      <td>2nd</td>
                      <td>Mr. Moksed</td>
                      <td>jessore</td>
                      <td>0177777777</td>
                      <td>abcde@test.com</td>
                      <td>
                        <a href="#" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                  </tr>
              </tbody>
              <tfoot>
                <thead>
                  <tr>
                      <th>ID</th>
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