
<?php
include "connect.php";

if (isset($_GET['email'])) {
    $email = $_GET['email'];

    // Fetch appointment details for this email
    $query = "SELECT * FROM appointment WHERE email='$email' ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<h2>Appointment Status</h2>";
        echo "Name: " . $row['Name'] . "<br>";
        echo "Email: " . $row['Email'] . "<br>";
        echo "Age: " . $row['Age'] . "<br>";
        echo "Health Concern: " . $row['Disease'] . "<br>";
        echo "Status:  . APPOINTMENT CONFIRMED". "<br>";
    } else {
        echo "No appointment found.";
    }
} else {
    echo "Invalid access.";
}
?>