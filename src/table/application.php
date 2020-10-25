<?php
include '../connection.php';
include '../Functions.php';
$currentDate= date("Y-m-d");
//var_dump($currentDate);
$dateStart=$_POST['startDate'];
$dateEnd=$_POST['endDate'];
$emailUser=$_POST['email'];
$areason=$_POST['reason'];
/*var_dump($dateFrom);
var_dump($dateEnd);
var_dump($emailUser);
var_dump($reason);
*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql1 = " INSERT INTO Application (date_Submitted,vacation_Start,vacation_End,reason) VALUES ('$currentDate', '$dateStart', '$dateEnd','$areason')";
$result = mysqli_query($conn, $sql1);
$sql2 = " UPDATE Application SET days_Requested =DATEDIFF(vacation_End,vacation_Start)+1 ";
$result2 = mysqli_query($conn, $sql2);
echo "<script>window.location = 'index2.php'</script>";
?>