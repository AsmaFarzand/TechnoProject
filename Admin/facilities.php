<?php
include("links.php");
include("connect.php");
include("header.php");
include("script.php");

session_start();
// echo "WLCM" . $_SESSION['adminpage'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Facilities</title>
    <style>
    #dashboardmenu {
      position: fixed;
      height: 100%;
  }
  @media screen and (max-width: 991px) {
      #dashboardmenu {
          height:auto;
          width: 100%;
      }
      #content
  {
    margin-top: 60px;
  }
  }
  * {

font-family: 'Poppins', sans-serif;

}

.h-font {
font-family: 'Merienda', cursive;
}

.custom-bg {
background-color: #2ec1ac;

}

.custom-bg:hover {
background-color: #279ebc;

}

.form-available {
margin-top: -50px;
z-index: 2;
position: relative;
}

 </style>
</head>
<?php
include "connect.php";
$user = $_SESSION['adminpage'];
if ($user == true) {
} else {
    header('location: index.php');
}
?>
<?php
if (isset($_POST['sub'])) {
    $username = $_POST["facility"];
    $img = $_FILES['picture']['name'];
    $tempname = $_FILES['picture']['tmp_name'];
    $location = "assets/" . $img;
    move_uploaded_file($tempname, $location);
    $desc = $_POST["description"];
    $insertquery = "insert into facilities values('','" . $username . "','" . $img . "','" . $desc . "')";
    $ins = mysqli_query($connect, $insertquery);
}
?>
<body class="bg-light">
    <div class="container-fluid" id=main>
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">FACILITIES </h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">FACILITIES</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#inputfacility">
                                <i class="bi bi-plus-square"></i>
                                ADD
                            </button>
                        </div>
                        <div class="table-responsive-md" style="height:450px; overflow-y:scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Icon</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM facilities ";
                                    $result = mysqli_query($connect, $query);
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo $i ?>
                                            </td>
                                            <td>
                                                <?php echo $row["Name"]; ?>
                                            </td>
                                            <td>
                                                <img src="assets/<?php echo $row["Icon"]; ?>" width:="100px" height="100">
                                            </td>
                                            <td>
                                                <?php echo $row["Description"]; ?>
                                            </td>
                                            <td><a href="facilitydelete.php?Id=<?php echo $row["Id"]; ?>" class="btn btn-danger" onclick='return checkdelete()'>Delete</a></td>
                                        <?php
                                        $i++;
                                    }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="inputfacility" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Facilities</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Name</label>
                            <input type="text" name="facility" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Picture</label>
                            <input type="file" name="picture" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Description</label>
                            <input type="text" name="description" class="form-control shadow-none" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" name="sub" onclick='return add()' class="btn custom-bg text-white shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<script>
    function add() {
        return confirm('Are You Sure You Want To Add This Facility?');
    }
    function checkdelete() {
        return confirm('Are You Sure You Want To Delete This Facility?');
    }
</script>