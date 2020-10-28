<?php


//gia na orisw se poio email diaxeiristei tha pigainei to email mporw na epilexw apo tin vasi dedomenwn to pedio pou exei

include '../connection.php';
include '../Functions.php';
$currentDate= date("Y-m-d");
//var_dump($currentDate);
$dateStart=$_POST['startDate'];
$dateEnd=$_POST['endDate'];
$emailUser=$_POST['email'];
$areason=mysqli_real_escape_string($conn,$_POST['reason']);
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
//include PHPMailerAutoload.php
//create an instance of PHPMailer
/*
require  'phpmailer/PHPMailerAutoload.php';

//Create an instance of PHPMailer
$mail=new PHPMailer();

//
$mail->Host="smtp.gmail.com";
//enable SMTP
//$mail->isSMTP();
$mail->Port=587;// or 587 TLS
$mail->SMTPAuth=true;
$mail->SMTPSecure ="tls"; //or TLS
$mail->Username="andrew78984@gmail.com";
$mail->Password = "apass!4321";

$mail->setFrom('biolaris3@gmail.com', 'Antreas');//who we want to send the email
//set a port
$mail->addAddress('biolaris3@gmail.com');
$mail->addReplyTo('biolaris3@gmail.com', 'Antreas');
$mail->isHTML(true);
//$sql1=" SELECT user_Firstname FROM  User  WHERE  	user_Email='$emailUser  ";
//$result3 = mysqli_query($conn, $sql1);



$mail->Subject="Application for Vacation";
$mail->Body="​Dear supervisor, employee"  . $emailUser . "requested for some time off, starting on" . $dateStart . "and ending on" .  $dateEnd .  "stating the reason:" . $areason .
"Click on one of the below links to approve or reject the application: {approve_link} - {reject_link}​”";




if($mail->send())
    echo "mail is sent";
else
    echo "email not send";
*/
