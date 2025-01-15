<?php
include("links.php");
include("connect.php");
include("header.php");
session_start();

$user = $_SESSION['adminpage'];
if (!$user) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-Appointments</title>
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
    </style>
</head>

<body class="bg-light">
    <div class="container-fluid" id="main">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">APPOINTMENTS</h3>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="table-responsive-md" style="height:450px; overflow-y:scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Disease</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM appointment";
                                    $result = mysqli_query($connect, $query);
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row["Name"]; ?></td>
                                            <td><?php echo $row["Email"]; ?></td>
                                            <td><?php echo $row["Age"]; ?></td>
                                            <td><?php echo $row["Disease"]; ?></td>
                                            <td>
                                                <form method="POST" action="update.php">
                                                    <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
                                                    <select name="status" class="form-select" onchange="this.form.submit()">
                                                        <option value="Pending" <?php if ($row['Status'] == 'Pending') echo 'selected'; ?>>Pending</option>
                                                        <option value="Confirmed" <?php if ($row['Status'] == 'Confirmed') echo 'selected'; ?>>Confirmed</option>
                                                        <option value="Rejected" <?php if ($row['Status'] == 'Rejected') echo 'selected'; ?>>Rejected</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                <a href="deleteappointment.php?Id=<?php echo $row['Id']; ?>" class="btn btn-danger" onclick="return checkdelete()">Delete</a>
                                            </td>
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
    </div>
</body>

</html>
<script>
    function checkdelete() {
        return confirm('Are you sure you want to delete this record?');
    }
</script>
