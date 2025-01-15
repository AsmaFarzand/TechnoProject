<?php
include "links.php";
include "connect.php";
include "nav.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareWell Hospital- Appointments</title>
    <style>
        :root {
            --teal: #2ec1ac;
            --teal_hover: #279e8c;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        .h-font {
            font-family: 'Merienda', cursive;
        }

        .custom-bg {
            background-color: var(--teal);
            border: 1px solid var(--teal);

        }

        .custom-bg:hover {
            background-color: var(--teal_hover);
            border-color: var(--teal_hover);

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
    </style>
</head>
<body class="bg-light">
<div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">APPOINTMENTS</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
            Odio perspiciatis aspernatur repellendus, nihil explicabo fugit suscipit! Cum aut amet ad.
        </p>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST" action="submitappointment.php">
                        <h5 class="mb-4 text-center">BOOK YOUR APPOINTMENTS</h5>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input name="name" type="text" class="form-control shadow-none" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input name="email" type="email" class="form-control shadow-none" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Age</label>
                            <input name="age" type="number" class="form-control shadow-none" placeholder="Enter your age" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Disease</label>
                            <input name="msg" type="text" class="form-control shadow-none" placeholder="Enter your health concerns" required>
                        </div>
                        <input type="hidden" name="status" value="Pending"> 
                        <button name="submit" type="submit" class="btn text-white custom-bg mt-3">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <img src="images/abc.jpeg" alt="" class="img-fluid" height="600px" width="600px" style="padding-bottom: 20px; display: block; border: none;">
            </div> 
        </div>
    </div>
    
    <?php
    include "footer.php";
    ?>
    </body>
    </html>