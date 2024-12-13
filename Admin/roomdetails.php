<?php
include("links.php");
include("connect.php");
include("header.php");
session_start();
// echo "WLCM" . $_SESSION['adminpage'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - RoomDetails</title>
    <link rel="stylesheet" href="style.css">
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
if (isset($_POST['ok'])) {
    $img = $_FILES['picture']['name'];
    $tempname = $_FILES['picture']['tmp_name'];
    $location = "assets/" . $img;
    move_uploaded_file($tempname, $location);
    $rname = $_POST["name"];
    $rarea = $_POST["Area"];
    $radult = $_POST["adult"];
    $rchild = $_POST["child"];
    $rprice = $_POST["price"];
    $rquantity = $_POST["quantity"];
    $description = $_POST["desc"];
    $insertquery = "insert into room_details values('','" . $img . "','" . $rname . "','" . $rarea . "','" . $radult . "','" . $rchild . "','" . $rprice . "','" . $rquantity . "','" . $description . "')";
    $ins = mysqli_query($connect, $insertquery);
}
?>

<body class="bg-light">
    <div class="container-fluid" id=main>
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">ROOM BOOKING</h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="text-end mb-4">
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#addrooms">
                                <i class="bi bi-plus-square"></i>
                                ADD
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive-lg" style="height:450px; overflow-y:scroll;">
                        <table class="table table-hover border text-center">
                            <thead class="sticky-top">
                                <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Picture</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Guests</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM room_details ";
                                $result = mysqli_query($connect, $query);
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $i ?>
                                        </td>
                                         <td>
                                                <img src="assets/<?php echo $row["Picture"]; ?>" width:="100px" height="100">
                                            </td>
                                        <td>
                                            <?php echo $row["RoomName"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["RoomArea"]; ?>
                                            sq.ft
                                        </td>
                                        <td>
                                            <span class="badge rounded-pill bg-light text-dark">
                                                Adult:
                                                <?php echo $row["Adult"]; ?>
                                            </span><br>
                                            <span class="badge rounded-pill bg-light text-dark">
                                                Child:
                                                <?php echo $row["Child"]; ?>
                                            </span><br>
                                        </td>
                                        <td>
                                            $
                                            <?php echo $row["Price"]; ?>
                                            Per Night
                                        </td>
                                        <td>
                                            <?php echo $row["Quantity"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["Description"]; ?>
                                        </td>
                                        <td><a href="roomedit.php?Room_Id=<?php echo $row["Room_Id"]; ?>" class="btn btn-primary shadow-none btn-sm"> <i class="bi bi-pencil-square"></i>EDIT</a></td> 
                                    </td>
                                        <td><a href="deleterooms.php?Room_Id=<?php echo $row["Room_Id"]; ?>" class="btn btn-danger" onclick='return checkdelete()'>Delete</a></td>
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
    <!--ADD ROOM MODEL--->
    <div class="modal fade" id="addrooms" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form method="post"  enctype="multipart/form-data" autocomplete="off">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Rooms</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class=" col-md-6 mb-3">
                                <label class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control shadow-none" required>
                            </div>
                              <div class=" col-md-6 mb-3">
                                 <label class="form-label fw-bold">Picture</label>
                            <input type="file" name="picture" class="form-control shadow-none" required>
                              </div>
                            <div class=" col-md-6 mb-3">
                                <label class="form-label fw-bold">Area</label>
                                <input type="number" min="1" name="Area" class="form-control shadow-none" required>
                            </div>
                            <div class=" col-md-6 mb-3">
                                <label class="form-label fw-bold">Price</label>
                                <input type="number" min="1" name="price" class="form-control shadow-none" required>
                            </div>
                            <div class=" col-md-6 mb-3">
                                <label class="form-label fw-bold">Quantity</label>
                                <input type="number" min="1" name="quantity" class="form-control shadow-none" required>
                            </div>
                            <div class=" col-md-6 mb-3">
                                <label class="form-label fw-bold">Adult (Max.)</label>
                                <input type="number" min="1" name="adult" class="form-control shadow-none" required>
                            </div>
                            <div class=" col-md-6 mb-3">
                                <label class="form-label fw-bold">Children (Max.) </label>
                                <input type="number" min="1" name="child" class="form-control shadow-none" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label class="form-label fw-bold">Description </label>
                                <textarea name="desc" rows="4" class="form-control shadow-none required"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                        <button type="submit" name="ok" onclick='return add()' class="btn custom-bg text-white shadow-none">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

   

</body>
</html>
<script>
    function add() {
        return confirm('Are You Sure You Want To Add This Room?');
       
    }

    function checkdelete() {
        return confirm('Are You Sure You Want To Delete This Room?');
    }
</script>
