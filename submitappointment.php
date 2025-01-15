
<?php
// submitappointment.php
include "connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $msg = $_POST['msg'];
    $status = "Pending"; // Default status for new appointments

    // Insert appointment into the database
    $query = "INSERT INTO appointment (name, email, age, disease, status) 
              VALUES ('$name', '$email', '$age', '$msg', '$status')";

    if (mysqli_query($connect, $query)) {
        echo "Appointment booked successfully. Your status is: Pending.";
        // Redirect to the confirm page with email parameter
        header("Location: confirmappoint.php?email=$email");
        exit;
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}

?>
