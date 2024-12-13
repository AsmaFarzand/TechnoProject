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
    <title>Dashboard-Patient Queries</title>
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

<body class="bg-light">
    <div class="container-fluid" id=main>
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">PATIENT QUERIES</h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="table-responsive-md" style="height:450px; overflow-y:scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" width="20%">Subject</th>
                                        <th scope="col" width="30%">Messages</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM patientqueries ";
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
                                                <?php echo $row["Email"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["Subject"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $row["Message"]; ?>
                                            </td>
                                           <td><a href="deletequery.php?Id=<?php echo $row["Id"];?>" class = "btn btn-danger" onclick='return checkdelete()'>Delete</a></td>
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
</body>

</html>
<script>
    function checkdelete()
    {
        return confirm('Are You Sure You Want To Delete This Record?');
    }
</script>