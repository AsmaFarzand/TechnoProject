<?php
session_start();
include "script.php";
include "links.php";
include "essentials.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
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

    .custom-alert {
        position: fixed;
        top: 10px;
        right: 25px; 
    }
    div.LoginForm {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
    }
</style>

    
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    
</head>
<body class="bg-light">
    <div class="LoginForm text-center rounded bg-white shadow overflow-hidden ">
        <form method="POST" autocomplete="off">
            <h4 class="bg-dark text-white py-3">Admin Panel</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="name" type="text" required class="form-control shadow-none text-center" placeholder="Admin">
                </div>
                <div class="mb-3">
                    <input name="pass" type="password" required class="form-control shadow-none text-center" placeholder="Password">
                </div>
                <div>
                    <button name="login" type="submit" required class="btn text-white custom-bg shadow-none">Login</button>
                </div>
            </div>
        </form>
    </div>
    <?php
include "connect.php";
if (isset($_POST['login'])) {
    
    
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $query = "select* from admin where User = '" . $name . "' and Password = '" . $pass . "'";    
    $select = mysqli_query($connect, $query);
    $num = mysqli_num_rows($select);
    if ($num ==1)
     {
        $_SESSION['adminpage'] = $name;
        header('location:userquery.php');
    } 
    else
     {
        alert('error','Login Failed -Invalid Credentials!');
     }
}
?>

</body>
</html>
