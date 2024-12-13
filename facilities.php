<?php
include "links.php";
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard- Facilities</title>
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
            background-color: #2ec1ac;

        }

        .custom-bg:hover {
            background-color: var(--teal_hover);
            border-color: var(--teal_hover);

        }

        .custom-bg {
            background-color: var(--teal);
            border: 1px solid var(--teal);

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
    <?php
    include "nav.php"
    ?>
     <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
            Odio perspiciatis aspernatur repellendus, nihil explicabo fugit suscipit! Cum aut amet ad.
        </p>
    </div>
    <div class="container">
        <div class="row">
        <?php
            $query = "SELECT * FROM facilities ";
            $res = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow-4 border-top border-4 border-dark">
                        <div class="d-flex align-items-center mb-2">
                            <img src="facilities/<?php echo $row["Icon"]; ?>" width="40px;">
                            <h5 class="m-0 ms-3"><?php echo $row["Name"]; ?></h5>
                        </div>
                        <P><?php echo $row['Description']; ?></P>
                    </div>
                </div>
            <?php
            }
            ?>
           
            
                
            
            
          
            
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>