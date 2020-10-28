<?php

include 'Functions.php';
include 'connection.php';
$username=stripcslashes($_POST['username']);
//var_dump($username);
$sql1="SELECT * FROM User WHERE user_Email = '$username' AND user_Type='Employee'";
$result = mysqli_query($conn,$sql1);
//var_dump($result);
$matchFound = mysqli_num_rows($result) > 0 ? 'yes' : 'no';
//var_dump($matchFound);
//echo $matchFound;
if ((isset($_POST['username'])) && ($matchFound == 'no') )  {
    //καλουμε την συναρτηση login me ta post username kai password
    $message = login($_POST['username'], $_POST['password'], $conn);
    echo $message;
    if ($message == "Success") {
        header("Location:/table/adminShowForm.php");
        session_start();
        $_SESSION["usernameStored"] = $_POST['username'];
    }
}
elseif ($matchFound=='yes') { //then the user is employee so i force him to Employee login
    echo "<script>window.location = 'index.php'</script>";

}
$conn->close()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .adminstrator{
            max-width:25%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        .

    </style>
    <img src="administrator.jpg" class="adminstrator" alt="a photo of admin">





    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="images/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="Admin.php" method="post">
					<span class="login100-form-title">
						Administrator Login
					</span>


                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <input type="button" class="btn btn-info" value="Employee Login" onclick=" relocate_home()">

                <script>
                    function relocate_home() {
                        location.href = "index.php";
                    }
                </script>


                <!--
               <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User Type
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#"><h6> Employee</h6></a>
                        <a class="dropdown-item" href="#"><h6>Administrator</h6></a>

                    </div>
                </div>
                -->
                <!-- Input for employee + Admin
                <div class="wrap-input100 validate-input" data-validate = "Valid User type is required: ex@Employee/Admin">
                    <input class="input100" type="text" name="user_type" placeholder=" type Employee/Admin">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>
                    -->


                <div class="container-login100-form-btn">
                    <input type="submit" class="login100-form-btn">
                </div>


                <!--<div class="text-center p-t-136">
                    <a class="txt2" href="#">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>-->
            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>


