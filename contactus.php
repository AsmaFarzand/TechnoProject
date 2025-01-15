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
    <?php
    include "nav.php"
        ?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
            Odio perspiciatis aspernatur repellendus, nihil explicabo fugit suscipit! Cum aut amet ad.
        </p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <iframe class="w-100 rounded mb-4" height="320px"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13604.457362339004!2d74.340241!3d31.5210194!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190579f583877d%3A0x7f913dc892bba07!2sRoyal%20Luxury%20Hotel!5e0!3m2!1sen!2s!4v1691488595028!5m2!1sen!2s"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/zsJR52AkvKuK9srB8" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt"></i>"ROYAL LUXURY RESORT, KARACHI PAKISTAN
                    </a>
                    <h5 class="mt-4">Contact</h5>
                    <a href="tel: 090078601" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-inbound"></i>
                        090078601
                    </a>
                    <br>
                    <a href="tel: 090078601" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-inbound"></i>
                        03897515696
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: asmafarzand75@gmail.com"
                        class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope"></i>asmafarzand75@gmail.com<br>
                        <i class="bi bi-envelope"></i>javeriazubair26@gmail.com
                    </a>
                    <h5 class="mt-4">Follow Us </h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST">
                        <h5>Send Your Message</h5>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input name="name" type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input name="email" type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input name="subj" type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500;">Your Message</label>
                            <input name="msg" type="text" class="form-control shadow-none">
                        </div>
                        <button name="submit" type="submit" class="btn text-white custom-bg mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $Name = $_POST['name'];
        $Email = $_POST['email'];
        $Subject = $_POST['subj'];
        $Message = $_POST['msg'];
        $query = "INSERT into patientqueries values ('','" . $Name . "','" . $Email . "','" . $Subject . "','" . $Message . "')";
        $res = mysqli_query($connect, $query);
        if ($res) {
           echo '<script>alert("Your Message Has Been Sent Succesfully!") </script>' ;							
        } else {
           echo '<script>alert("Server Down! Try Again Later.") </script>' ;
        }
    }
    ?>
    <?php
    include "footer.php";
    ?>
</body>

</html>