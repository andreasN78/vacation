<?php
include '../connection.php';
include '../Functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //var_dump($currentDate);
    $aFirstName=mysqli_real_escape_string($conn,$_POST['user_Firstname']);
    $aLastname=mysqli_real_escape_string($conn,$_POST['user_Lastname']);
    $anEmail=stripcslashes($_POST['email']);
    $aPassword=hash('sha512',$_POST['up']);
    $aUserType=mysqli_real_escape_string($conn,$_POST['theUserChoices']);
//var_dump($aFirstName);
//var_dump($aLastname);
//var_dump($anEmail);
//var_dump($aPassword);
//var_dump($aUserType);
    $sql1="SELECT * FROM User WHERE user_Email = '$anEmail'";
    $result = mysqli_query($conn,$sql1);
    $matchFound = mysqli_num_rows($result) > 0 ? 'yes' : 'no';

    if($matchFound=='no') {  //if it's no then create the user
        $sql1 = " INSERT INTO User (user_Password,user_Firstname,user_Lastname,user_Email,user_Type) VALUES ('$aPassword', '$aFirstName', '$aLastname','$anEmail','$aUserType')";
        $result = mysqli_query($conn, $sql1);
    } else if($matchFound == 'yes') {
        echo 'User already found, will update';
        $sql1 = " UPDATE  User SET user_Firstname='$aFirstName',user_Lastname='$aLastname',user_Email='$anEmail',user_Type='$aUserType' WHERE user_Email=$anEmail)";
        $result = mysqli_query($conn, $sql1);
    }

    echo "<script>window.location = 'createUser.php'</script>";
} // Apo dw kai katw einai GET request. An mpei edw DEN mou esteile DATA, aplws fortwse tin selida

$email = $_GET['email'];
$sql1 = "SELECT user_Password,user_Firstname,user_Lastname,user_Email,user_Type FROM User WHERE user_Email='$email'";
$result = mysqli_query($conn, $sql1);
$user = mysqli_fetch_assoc($result);
$newUser = !$user;

include "createUserForm.php";

