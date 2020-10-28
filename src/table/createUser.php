<?php
include '../connection.php';
include '../Functions.php';

//var_dump($currentDate);
$aFirstName=mysqli_real_escape_string($conn,$_POST['user_Firstname']);
$aLastname=mysqli_real_escape_string($conn,$_POST['user_Lastname']);
$anEmail=stripcslashes($_POST['email']);
$aPassword=hash('sha512',$_POST['up']);
$aUserType=mysqli_real_escape_string($conn,$_POST['theUserChoices']);
var_dump($aFirstName);
var_dump($aLastname);
var_dump($anEmail);
var_dump($aPassword);
var_dump($aUserType);
$sql1="SELECT * FROM User WHERE user_Email = '$anEmail'";
$result = mysqli_query($conn,$sql1);
$matchFound = mysqli_num_rows($result) > 0 ? 'yes' : 'no';
//echo $matchFound;

if($matchFound=='no') {  //if it's no then create the user
    $sql1 = " INSERT INTO User (user_Password,user_Firstname,user_Lastname,user_Email,user_Type) VALUES ('$aPassword', '$aFirstName', '$aLastname','$anEmail','$aUserType')";
    $result = mysqli_query($conn, $sql1);
    var_dump($result);
echo "<script>window.location = 'createUser.html'</script>";
}
else {
    echo("User already exists,user must be unique");
    echo "<script>window.location = 'createUser.html'</script>";

}
