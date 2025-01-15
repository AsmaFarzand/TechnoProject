<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("links.php");
include("connect.php");
include("script.php");
include("header.php");
session_start();

// Set the timezone to Pakistan Standard Time (PST)
date_default_timezone_set('Asia/Karachi');

if (!isset($_SESSION['adminpage'])) {
    header('location: index.php');
    exit();
}

if (isset($_POST['ok'])) {
    $img = $_FILES['picture']['name'];
    $tempname = $_FILES['picture']['tmp_name'];
    $location = "assets/" . $img;
    move_uploaded_file($tempname, $location);

    $rname = $_POST["name"];
    $rspec = $_POST["spec"];
    $ravlblty = $_POST["avlblty"];
    $rwh = $_POST["wh"];
    // $rlu = $_POST["lu"];
    $description = $_POST["desc"];

    $stmt = $connect->prepare("INSERT INTO doctors (Picture, Name, Specialization, Availablity, Workinghours, Description) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $img, $rname, $rspec, $ravlblty, $rwh, $description);

    if ($stmt->execute()) {
        echo "<script>alert('Doctor added successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - DoctorDetails</title>
    <link rel="stylesheet" href="style.css">
    <style>
        #dashboardmenu {
            position: fixed;
            height: 100%;
        }

        @media screen and (max-width: 991px) {
            #dashboardmenu {
                height: auto;
                width: 100%;
            }

            #content {
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

<body class="bg-light">
    <div class="container-fluid" id="main">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">DOCTOR DETAILS</h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">DOCTOR DETAILS</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#adddocs">
                                <i class="bi bi-plus-square"></i>
                                ADD
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive-md" style="height:450px; overflow-y:scroll;">
                        <table class="table table-hover border">
                            <thead class="sticky-top">
                                <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Picture</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Specialization</th>
                                    <th scope="col">Availablity</th>
                                    <th scope="col">Working Hours</th>
                                    <th scope="col">Last Updated</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM doctors";
                                $result = mysqli_query($connect, $query);
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><img src="assets/<?php echo $row["Picture"]; ?>" width="100" height="100"></td>
                                        <td><?php echo $row["Name"]; ?></td>
                                        <td><?php echo $row["Specialization"]; ?></td>
                                        <td><?php echo $row["Availablity"]; ?></td>
                                        <td><?php echo $row["Workinghours"]; ?></td>
                                        <td><?php echo date('F j, Y, g:i a', strtotime($row["Lastupdated"])); ?></td>
                                        <td><?php echo $row["Description"]; ?></td>
                                        <td><a href="doctoredit.php?Id=<?php echo $row["Id"]; ?>" class="btn btn-primary shadow-none btn-sm"><i class="bi bi-pencil-square"></i>EDIT</a></td>
                                        <td><a href="deletedoctors.php?Id=<?php echo $row["Id"]; ?>" class="btn btn-danger" onclick="return checkdelete()">Delete</a></td>
                                    </tr>
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

    <!-- Add Doctor Modal -->
    <div class="modal fade" id="adddocs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Doctors</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Picture</label>
                                <input type="file" name="picture" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Specialization</label>
                                <input type="text" name="spec" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Availablity</label>
                                <input type="text" name="avlblty" class="form-control shadow-none" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Working Hours</label>
                                <input type="text" name="wh" class="form-control shadow-none" required>
                            </div>
                            <!-- <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Lastupdated</label>
                                <input type="text" name="lu" class="form-control shadow-none" required>
                            </div> -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Description</label>
                                <input type="text" name="desc" class="form-control shadow-none" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" name="ok" onclick="return add()" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

<script>
    function add() {
        return confirm('Are You Sure You Want To Add This Doctor?');
    }

    function checkdelete() {
        return confirm('Are You Sure You Want To Delete This Doctor?');
    }
</script> 
