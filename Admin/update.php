
<?php
include "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['Id'];
    $status = $_POST['status'];

    $query = "UPDATE appointment SET status='$status' WHERE id='$id'";

    if (mysqli_query($connect, $query)) {
        echo "Status updated successfully!";
        // // Redirect to confirmation page to show status
        // header("Location: confirmappoint.php?status=$status");
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }
}
?>
