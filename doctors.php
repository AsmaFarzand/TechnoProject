<?php
include "links.php";
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareWell Hospital</title>
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

        .card img {
            height: 250px;
            width: 100%;
            object-fit: cover;
        }

        .doctor-details {
            padding-left: 20px;
        }

        .doctor-details h5 {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .doctor-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .doctor-row div {
            flex: 1;
            text-align: left;
        }

        .doctor-row span {
            font-size: 14px;
            color: #555;
            background-color: #f8f9fa;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
        }

        .description {
            margin-top: 10px;
        }

        @media screen and (max-width: 575px) {
            .form-available {
                margin-top: 25px;
                padding: 0 35px;
            }

            .doctor-row {
                flex-direction: column;
                align-items: flex-start;
            }

            .doctor-row div {
                margin-bottom: 5px;
            }
        }

        .search-form {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-form input {
            width: 300px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .search-form button {
            padding: 8px 15px;
            border: none;
            background-color: #2ec1ac;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-form button:hover {
            background-color: #279ebc;
        }
    </style>
</head>

<body class="bg-light">
    <?php include "nav.php"; ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR DOCTORS</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="search-form">
            <form method="POST" action="">
                <input type="text" name="doctor_name" placeholder="Search doctor by name" required>
                <button type="submit">Search</button>
            </form>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 px-4">
                <?php
                $doctor_name = isset($_POST['doctor_name']) ? $_POST['doctor_name'] : '';
                $query = $doctor_name != '' ? "SELECT * FROM doctors WHERE Name LIKE '%$doctor_name%'" : "SELECT * FROM doctors";
                $res = mysqli_query($connect, $query);

                while ($row = mysqli_fetch_assoc($res)) {
                ?>
                    <div class="card mb-3 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-3 mb-lg-0 mb-md-0 mb-3">
                                <img src="Admin/assets/<?php echo $row["Picture"]; ?>" class="img-fluid rounded">
                            </div>
                            <div class="col-md-7 doctor-details">
                                <h5><?php echo $row["Name"]; ?></h5>
                                <div class="doctor-row">
                                    <div>
                                        <h6>Specialization:</h6>
                                        <span><?php echo $row["Specialization"]; ?></span>
                                    </div>
                                    <div>
                                        <h6>Availability:</h6>
                                        <span><?php echo $row["Availablity"]; ?></span>
                                    </div>
                                </div>
                                <div class="doctor-row">
                                    <div>
                                        <h6>Working Hours:</h6>
                                        <span><?php echo $row["Workinghours"]; ?></span>
                                    </div>
                                    <div>
                                        <h6>Website was last Updated:</h6>
                                        <!-- This is where we will display the formatted timestamp -->
                                        <span class="last-updated" data-time="<?php echo $row["Lastupdated"]; ?>"></span>
                                    </div>
                                </div>
                                <div class="description">
                                    <h6>Description:</h6>
                                    <span><?php echo $row["Description"]; ?></span>
                                </div>
                            </div>
                            <div class="col-md-2 text-center">
                                <a href="appointment.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Appointment</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>

    <script>
        // Function to convert timestamp to "time ago" format
        function timeAgo(time) {
            const now = new Date();
            const then = new Date(time);
            const seconds = Math.floor((now - then) / 1000);
            const intervals = [
                { label: 'second', seconds: 1 },
                { label: 'minute', seconds: 60 },
                { label: 'hour', seconds: 3600 },
                { label: 'day', seconds: 86400 },
                { label: 'week', seconds: 604800 },
                { label: 'month', seconds: 2592000 },
                { label: 'year', seconds: 31536000 }
            ];

            for (let i = intervals.length - 1; i >= 0; i--) {
                const interval = intervals[i];
                const intervalValue = Math.floor(seconds / interval.seconds);
                if (intervalValue >= 1) {
                    return intervalValue + ' ' + interval.label + (intervalValue > 1 ? 's' : '') + ' ago';
                }
            }
            return 'just now'; // For very recent timestamps
        }

        // Apply time ago formatting to each Lastupdated field
        document.querySelectorAll('.last-updated').forEach(function (element) {
            const time = element.getAttribute('data-time');
            element.textContent = timeAgo(time);
        });
    </script>
</body>

</html>
