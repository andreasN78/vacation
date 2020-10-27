<?php
include '../connection.php';
include '../Functions.php';

//var_dump($currentDate);
$aFirstName=$_POST['user_Firstname'];
$aLastname=$_POST['user_Lastname'];
$anEmail=$_POST['email'];
$aPassword=md5($_POST['user_Password']);
$aUserType=$_POST['theUserChoices'];
//var_dump($aFirstName);
//var_dump($aLastname);
//var_dump($anEmail);
//var_dump($aPassword);
//var_dump($aUserType);

$sql1 = " INSERT INTO User (user_Password,user_Firstname,user_Lastname,user_Email,user_Type) VALUES ('$aPassword', '$aFirstName', '$aLastname','$anEmail','$aUserType')";
$result = mysqli_query($conn, $sql1);
echo "<script>window.location = 'createUser.html'</script>";

