<?php include "header.php"; ?>
<?php 
  $s = "";
  if (isset($_GET['s'])) {
    $s = $_GET['s'];
  }

 ?>

    <div class="container py-4">
      <div class="row">
        <div class="pagetitle h2 ps-0"></div>
      </div>

      <div class="row justify-content-center">
       <form class="d-flex col-8 mb-3" method="get" action="search.php">
        <input name="s" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" onkeyup="loadData(this.value)">
        <button class="btn btn-danger" type="submit">Search</button>
      </form>

      <hr>

      <div class="row" id="show-result">
      <?php 
        $sql = "SELECT * FROM students WHERE std_roll LIKE '%$s%' OR std_name LIKE '%$s%'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) { ?>
        <div class="col-md-4">
          <div class="card">
            <?php 
            $img_url = $row['std_photo_url'];
            if ($img_url == '') {
              $img_url = 'assets/images/def-pro-image.jpg';
            }

             ?>
            <img class="card-img-top" src="<?php echo $img_url ?>" alt="Card image cap" height="200">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['std_name'] ?>  (<?php echo $row['std_year'] ?> Year)</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <b>Roll: </b><?php echo $row['std_roll'] ?>
              </li>
              <li class="list-group-item">
                <b>Mail: </b><a href="mailto:<?php echo $row['std_email'] ?>"><?php echo $row['std_email'] ?></a>
              </li>
              <li class="list-group-item">
                <b>Contact: </b><a href="tel:<?php echo $row['std_contact'] ?>"><?php echo $row['std_contact'] ?></a>
              </li>
            </ul>
            <div class="card-body">
             <a href="student-edit.php?eid=<?php echo $row['ID'];?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i> Edit</a>
              <a href="delete.php?did=<?php echo $row['ID'];?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
            </div>
          </div>
        </div>

        <?php 
          }

        }else{
          echo '<h1 class="text-center">No Data Found</h1>';
        }
        ?>


      </div>
      </div>
    </div>

    <div id="time"></div>


    <script type="text/javascript">
      function loadData(val){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
          document.getElementById("show-result").innerHTML = this.responseText;
        }
        xhttp.open("GET", "ajax-search.php?s="+val, true);
        xhttp.send();
      }

    </script>
<?php include "footer.php"; ?>