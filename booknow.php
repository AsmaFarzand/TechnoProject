<?php
include("connect.php");
include("links.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Room</title>
    <style>
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

        .h-line {
            width: 150px;
            margin: 0 auto;
            height: 1.7px;
        }

        @media screen and (max-width: 575px) {
            .form-available {
                margin-top: 25px;
                padding: 0 35px;
            }
        }

        .home-page-link:hover {
            background-color: #343a40;
        }


        @media screen and(max-width:991px) {
            #menu {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<body class="bg-light">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-2 bg-dark border-top border-3 border-secondary h-100" id="menu">
                <nav class="navbar navbar-expand-lg navbar-dark flex-column h-100">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="admin">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item">
                                    <a class="nav-link text-white home-page-link" href="index.php">Home Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-10 p-4 overflow-hidden">
                <h2 class=" mt-3 pt-2 mb-2 text-center fw-bold h-font"> RESERVATIONS</h2>
                <div class="h-line bg-dark"></div>
                <br>
                <div class="row ">
                    <div class="col-lg-6 col-md-6 px-5 rounded bg-white overflow-hidden ">
                        <form method="POST">
                            <h2 class="fw-bold h-font text-center mt-4" style="font-size: 20px;"> PERSONAL INFORMATON
                            </h2>
                            <div class="h-line bg-dark"></div>
                            <br>
                            <div class="mb-3">
                                <label>Title*</label>
                                <select class="form-control" name="Title">
                                    <option value="Not Selected">Select</option>
                                    <option value="Miss.">Miss.</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input name="Name" type="text" class="form-control shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input name="Email" type="email" class="form-control shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input name="Phone" type="text" class="form-control shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input name="City" type="text" class="form-control shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <input name="Country" type="text" class="form-control shadow-none">
                            </div>
                    </div>
                    
                    <div class="col-lg-5 col-md-6 rounded bg-white overflow-hidden mx-5">
                        <h2 class="fw-bold h-font text-center mt-4" style="font-size: 20px;">RESERVATION INFORMATION
                        </h2>
                        <div class="h-line bg-dark"></div>
                        <br>
                        <div class="mb-3">
                            <label>Type Of Rooms*</label>
                            <select class="form-control" name="TRoom">
                                <option value="Not Selected">Type Of Rooms</option>
                                <option value="Superior Room">Super Deluxe Room</option>
                                <option value="Deluxe Room">Deluxe Room</option>
                                <option value="Guest House">Super Luxury Room</option>
                                <option value="Single Room">Single Room</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Bedding Type</label>
                            <select class="form-control" name="Bedding" >
                                <option value="Not Selected">Select</option>
                                <option value="Single">Single</option>
                                <option value="Double">Double</option>
                                <option value="Triple">Triple</option>
                                <option value="Quad">Quad</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Number Of Rooms</label>
                            <select class="form-control" name="No_Room" >
                                <option value="Not Selected">Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <!-- <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option> -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Meal Plan</label>
                            <select  class="form-control" name="Meal">
                                <option value="Not Selected">Select</option>
                                <option value="Breakfast">Breakfast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Snacks">Snacks</option>
                                <option value="Dinner">Dinner</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Check-In</label>
                            <input name="Cin" type="date" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Check-Out</label>
                            <input name="Cout" type="date" class="form-control">
                        </div>
                        </div>
                        <center><button name="submit" type="submit" class="btn btn-lg  text-white custom-bg mt-3">Submit</button></center>
                        </form>
                </div>
            </div>
        </div> 
    </div>
</body>
<?php
if (isset($_POST['submit'])) {
    $Title = $_POST['Title'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $City = $_POST['City'];
    $Country = $_POST['Country'];
    $TRoom = $_POST['TRoom'];
    $Bedding = $_POST['Bedding'];
    $No_Rooms = $_POST['No_Room'];
    $Meal = $_POST['Meal'];
    $Cin = $_POST['Cin'];
    $Cout = $_POST['Cout'];

    $query = "INSERT INTO room_booking (Title, Name, Email, Phone, City, Country, TRoom, Bedding, No_Rooms, Meal, Cin, Cout) 
          VALUES ('$Title', '$Name', '$Email', '$Phone', '$City', '$Country', '$TRoom', '$Bedding', '$No_Rooms', '$Meal', '$Cin', '$Cout')";
    $res = mysqli_query($connect, $query);
    if ($res) {
        echo '<script>alert("Your Booking Has Been Confirmed!") </script>';
    } else {
        echo '<script>alert("Server Down! Try Again Later.") </script>';
    }

    // if ($res) {
    //     echo 'Data inserted successfully';
    // } else {
    //     echo 'Failed to insert data';
    // }

}
?>

</html>