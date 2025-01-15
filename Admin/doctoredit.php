<?php
ob_start();
include("links.php");
include("connect.php");
include("header.php");

$edit = $_GET['Id'];
$query = "SELECT * FROM doctors WHERE Id = '" . $edit . "'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor-Edit</title>
    
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
    </style>
</head>

<body class="bg-light">
    <div class="container-fluid" id="main">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <form method="POST" enctype="multipart/form-data">
                <div class="heading">
                    <h3 class="mb-4">UPDATE DOCTORS</h3>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Name</label>
                        <input type="text" name="name" value="<?php echo $row["Name"]; ?>" class="form-control shadow-none" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Specialization</label>
                        <input type="text" name="spec" value="<?php echo $row["Specialization"]; ?>" class="form-control shadow-none" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Availability</label>
                        <input type="text" name="avlblty" value="<?php echo $row["Availablity"]; ?>" class="form-control shadow-none" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Working Hours</label>
                        <input type="text" name="wh" value="<?php echo $row["Workinghours"]; ?>" class="form-control shadow-none" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Picture</label>
                        <input type="file" name="picture" class="form-control shadow-none"><br>
                        <img src="assets/<?php echo $row["Picture"]; ?>" width="100"/>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label fw-bold">Description</label>
                        <input type="text" name="desc" value="<?php echo $row["Description"]; ?>" class="form-control shadow-none" required> 
                    </div>
                </div>
                <center>
                <button type="submit" name="ok" onclick="return edit()" class="btn custom-bg text-white shadow-none">UPDATE</button>

                </center>
            </form>
        </div>
    </div>
</body>
</html>

<?php

if (isset($_POST['ok'])) {
    $rname = $_POST["name"];
    $rspec = $_POST["spec"];
    $ravlblty = $_POST["avlblty"];
    $rwh = $_POST["wh"];
    $description = $_POST["desc"];
    $edit = $_GET['Id'];
    
    // Check if the image is uploaded
    if ($_FILES['picture']['name']) {
        $img = $_FILES['picture']['name'];
        $tempname = $_FILES['picture']['tmp_name'];
        $location = "assets/" . $img;
        move_uploaded_file($tempname, $location);
        
        // Update with new image
        $updateQuery = "UPDATE doctors SET Picture = ?, Name = ?, Specialization = ?, Availablity = ?, Workinghours = ?, Description = ? WHERE Id = ?";
        $stmt = $connect->prepare($updateQuery);
        $stmt->bind_param("ssssssi", $img, $rname, $rspec, $ravlblty, $rwh, $description, $edit);
    } else {
        // Update without changing the image
        $updateQuery = "UPDATE doctors SET Name = ?, Specialization = ?, Availablity = ?, Workinghours = ?, Description = ? WHERE Id = ?";
        $stmt = $connect->prepare($updateQuery);
        $stmt->bind_param("sssssi", $rname, $rspec, $ravlblty, $rwh, $description, $edit);
    }

    // Execute the query
    if ($stmt->execute()) {
        header('Location: doctordetails.php');
        exit; // Redirect after successful update
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>



<script>
    function edit() {
    return confirm('Are You Sure You Want To Edit This Doctor?');
}

</script>
