<?php
ob_start();
include("links.php");
include("connect.php");
include("header.php");
$edit = $_GET['Room_Id'];
$query = "SELECT * FROM room_details where Room_Id = '" . $edit . "'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room-Edit</title>
    <style>
        .container {
            border: 2px solid black;
            width: 600px;
            margin: 10px auto;
            padding: 20px;
         
        }
        .container .heading {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container rounded bg-white shadow">
        <form method="POST" enctype="multipart/form-data">
            <div class="heading">
                <h4 class=" fw-bold h-font text-center text-dark">UPDATE ROOMS</h4>
            </div>

            <div class="row">
                <div class=" col-md-6 mb-3">
                    <label class="form-label fw-bold">Name</label>
                    <input type="text" name="name" value="<?php echo $row["RoomName"]; ?>" class="form-control shadow-none" required>
                </div>
                <div class=" col-md-6 mb-3">
                    <label class="form-label fw-bold">Area</label>
                    <input type="number" min="1" name="Area" value="<?php echo $row["RoomArea"]; ?>"class="form-control shadow-none" required>
                </div>
                <div class=" col-md-6 mb-3">
                    <label class="form-label fw-bold">Price</label>
                    <input type="number" min="1" name="price" value="<?php echo $row["Price"]; ?>"class="form-control shadow-none" required>
                </div>
                <div class=" col-md-6 mb-3">
                    <label class="form-label fw-bold">Quantity</label>
                    <input type="number" min="1" name="quantity" value="<?php echo $row["Quantity"]; ?>"class="form-control shadow-none" required>
                </div>
                <div class=" col-md-6 mb-3">
                    <label class="form-label fw-bold">Adult (Max.)</label>
                    <input type="number" min="1" name="adult"value="<?php echo $row["Adult"]; ?>" class="form-control shadow-none" required>
                </div>
                <div class=" col-md-6 mb-3">
                    <label class="form-label fw-bold">Children (Max.) </label>
                    <input type="number" min="1" name="child" value="<?php echo $row["Child"]; ?>" class="form-control shadow-none" required>
                </div>
                  <div class=" col-md-6 mb-3">
                    <label class="form-label fw-bold">Picture</label>
                    <input type="file" name="picture" class="form-control shadow-none" ><br>
                    <img src="assets/<?php echo $row["Picture"]; ?>" width="100"/>
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label fw-bold">Description </label>
                    <textarea name="desc" rows="4" class="form-control shadow-none required">
                      <?php echo $row["Description"]; ?>
                    </textarea>
                </div>
            </div>
            <center>
                <button type="submit" name="ok" onclick='return edit()' class="btn custom-bg text-white shadow-none">UPDATE</button>
            </center>
        </form>
    </div>
</body>

</html>
<?php

if (isset($_POST['ok'])) {
    
    $img = $_FILES['picture']['name'];
    $rname = $_POST["name"];
      $rarea = $_POST["Area"];
      $radult = $_POST["adult"];
      $rchild = $_POST["child"]; 
      $rprice = $_POST["price"];
      $rquantity = $_POST["quantity"];
      $description = $_POST["desc"];
    // $tempname = $_FILES['picture']['tmp_name'];
    // $location = "assets/" . $img;
    // move_uploaded_file($tempname, $location);
  if ($img) {
    $tempname = $_FILES['picture']['tmp_name'];
    $location = "assets/" . $img;
    move_uploaded_file($tempname, $location);
     
     $insertquery = "UPDATE room_details SET Picture = '$img', RoomName = '$rname',
    RoomArea = '$rarea', Price = '$rprice', Quantity = '$rquantity',
    Adult = '$radult', Child = '$rchild', Description = '$description' WHERE Room_Id = '$edit'";
    
  }
  else{
      
      $insertquery = "UPDATE room_details SET  RoomName = '$rname',
    RoomArea = '$rarea', Price = '$rprice', Quantity = '$rquantity',
    Adult = '$radult', Child = '$rchild', Description = '$description' WHERE Room_Id = '$edit'";
    }
  
    $ins = mysqli_query($connect, $insertquery);
    
   
   
    
    if ($ins) {
         header('Location: roombook.php');
        echo "Record Updated!";
    } else {
        echo "Failed to Update";
    }
}
?>
<script>
    function edit() {
        return confirm('Are You Sure You Want To Edit The Room?');
        if(true)
        {
          alert()
          {
            return confirm ('Edited!')
          }
        }
    }
    </script>

 