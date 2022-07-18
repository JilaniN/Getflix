<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['forget-btn'])){

    //print_r($_POST);
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    //url of your website
    $url = "/create-new-password.php?selector=".$selector."&validator=" .bin2hex($token);
    $expire = date("U") + 1800;
    require 'dbconfi.php';
    $userEmail = $_POST['email_forget'];

    
    $getUser = "SELECT pwdResetEmail from pwdReset WHERE pwdResetEmail ='$userEmail'";
    //echo $getUser;

    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail ='$userEmail'";
    $stmt = mysqli_stmt_init($conn);
    // mysqli_stmt_bind_param($stmt, "s",$userEmail);
    
    if ($result = mysqli_query($conn, $getUser)) {
        echo "New user identified";
        $resultCnt = 0;
        while ($row = mysqli_fetch_row($result)) {
            $resultCnt = $resultCnt+ 1;
            printf ("%s (%s)\n", $row[0], $row[0]);
          }
          mysqli_free_result($result);
          if($resultCnt < 0){
            echo 'there was an error';
            exit(2);
          }
          if ($result = mysqli_query($conn, $sql)) {
            echo "User has delete";
          }
    }
    
    if (!mysqli_stmt_prepare($stmt,$sql)){
        echo 'there was an error';
        exit();
    }

$sql = "INSERT INTO pwdReset (pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpire) VALUES(?,?,?,?);";
$stmt =mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$sql)){
    echo 'there was an error';
    exit();
}
else{
    $hashedToken = password_hash($token,PASSWORD_DEFAULT);
mysqli_stmt_bind_param($stmt, "ssss",$userEmail,$selector,$hashedToken,$expire);
mysqli_stmt_execute($stmt);
}

mysqli_stmt_close($stmt);
}
//mysqli_close($stmt);
$to =$userEmail;
$subject = "Reset your password for website/sign In";
$message = '<p> we recieved a password reset request . the link to reset your password make this request, you can ignore this email </p>';
$message .= '<p> Here is your password reset link : </br>';
$message .= '<a href = "' .$url .'">' .$url . ' </a></p>';


$headers = "From: website name <bhamaguruswami@gmail.com>\r\n";
$headers .= "Reply-To: bhamaguruswami@gmail.com>\r\n";
$headers .= "Content-type:text/html\r\n";

//$res = mail($to,$subject,$message,$headers);
 
//header ("Location:forget.php?reset =success");

// if ($res == true) {
//   echo "Message sent successfully...";
// }else {
//   echo "Message could not be sent...";
// }

//require 'PHPMailerAutoload.php';
//Uncomment the below code
// require_once '../vendor/autoload.php';

// $developmentMode = true;
// $mail = PHPMailer($developmentMode);

// $mail->isSMTP();                    
// $mail->SMTPAuth   = true;   
// $mail->SMTPSecure = 'ssl'; 
// $mail->Host = 'smtp.gmail.com';
// $mail->Port = '465';
// $mail->Username = 'bhamaguruswami@gmail.com';             
// $mail->Password = '<password>';                      //enter our team email password
// $mail->setFrom('bhamaguruswami@gmail.com', 'Bhama');
// $mail->Subject = 'Here is the subject';
// $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
// $mail->AltBody = 'Body in plain text for non-HTML mail clients';
// $mail->addAddress('karuppasamy.qa@gmail.com');

// if(!$mail->send()) {
//   echo 'Message could not be sent.';
//   echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//   echo 'Message has been sent';
// }

header ("Location:forget.php?reset =success");
?>