<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php'; // tambahkan ini untuk SMTP

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'andrinugroho0600@gmail.com';
    $mail->Password = 'epllkfrnztiutisx';
    $mail->SMTPSecure = 'ssl'; // ganti baris ini menjadi 'ssl'
    $mail->Port = 465;

    $mail->setFrom('andrinugroho0600@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"]; // perbaiki typo "meessage" menjadi "message"

    try {
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
    echo '<script>
    alert("sent successfully");
    window.location.href = "index.html";
    </script>';
}
?>
