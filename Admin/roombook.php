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
    <title>Dashboard - RoomBooking</title>
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
<body class="bg-light">
    <div class="container-fluid" id=main>
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">ROOM BOOKING</h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="table-responsive-lg" style="height:450px; overflow-y:scroll;">
                        <table class="table table-hover border text-center">
                            <thead class="sticky-top">
                                <tr class="bg-dark text-light">
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">TRoom</th>
                                    <th scope="col">Bedding</th>
                                    <th scope="col">No_Rooms</th>
                                    <th scope="col">Meal</th>
                                    <th scope="col">Cin</th>
                                    <th scope="col">Cout</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM room_booking ";
                                $result = mysqli_query($connect, $query);
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $i ?>
                                        </td>
                                        <td>
                                            <?php echo $row["Title"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["Name"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["Email"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["Phone"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["City"]; ?>
                                        </td>
                                        
                                        <td>
                                            <?php echo $row["Country"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["TRoom"]; ?>
                                        </td>
                                        <td>                                           
                                            <?php echo $row["Bedding"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["No_Rooms"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["Meal"]; ?>
                                        </td>
                                         <td>
                                            <?php echo $row["Cin"]; ?>
                                        </td>
                                         <td>
                                            <?php echo $row["Cout"]; ?>
                                        </td>                               
                                        <td><a href="deleteroombooking.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger" onclick='return checkdelete()'>Delete</a></td>
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
</body>
</html>
<script>
    function checkdelete() {
        return confirm('Are You Sure You Want To Delete This Booking Log?');
    }
</script>
