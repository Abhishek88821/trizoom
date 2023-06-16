<?php




    $name1=$_POST['name'];
$email1=$_POST['email'];
$phone1=$_POST['phone'];




$headers = "From: smtp@pankajkaushik.com";
$content = 'Enquiry details';
require_once('mailer/class.phpmailer.php');
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.googlemail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "smtp@pankajkaushik.com";
$mail->Password = "<ngd97Dq@";
$mail->SetFrom('smtp@pankajkaushik.com', "Aspire India");
$mail->AddReplyTo("info@trizoom.co.in", "TRIZOOM"); 
$mail->AddAddress('info@trizoom.co.in',"TRIZOOM");


$mail->Subject    = "Enquiry details ";
$mail->AltBody    = "Message here..."; // optional, comment out and test
$message ="<div><center><br><br><b>-------------------Enquiry @ TRIZOOM-----------------------</b><br><br></center>
<left>Enquiry details listed below :<br><br>Name : $name1<br>Email : $email1<br>Phone : $phone1<br><br>-------------------------------------------------------------------------------------------------------------<br></div>";

$mail->MsgHTML($message);
if($mail->send() == true){
 echo "<script>window.location.href = 'assets/broucher.pdf'</script>";
//   header('Location:corporate-broucher.html');

}else{
  echo 'Error in sending details';
}




?>





