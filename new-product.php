<?php


$klientoVardas = $_POST['vardasPart'];
$klientoPastas = $_POST['pastasPart'];
$klientoKiekis = $_POST['kiekis'];

$klientoVardas = htmlspecialchars( $klientoVardas, ENT_QUOTES, 'UTF-8');
$klientoPastas = htmlspecialchars( $klientoPastas, ENT_QUOTES, 'UTF-8');
$klientoKiekis = htmlspecialchars( $klientoKiekis, ENT_QUOTES, 'UTF-8');


//Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    // papildomi PhpMailer nustatymia, jeigu neveikia su standartiniais

        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );
        $mail->Host = 'tls://smtp.gmail.com:587';
        $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                      // TCP port to connect to

        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP

        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'uzduotisnfq@gmail.com';                 // SMTP username
        $mail->Password = 'Uzduotele2018';                           // SMTP password


    //Recipients
    $mail->setFrom('uzduotisnfq@gmail.com', 'Mailer');
    $mail->addAddress('uzduotisnfq@gmail.com', 'Testuotoja');     // Add a recipient
    $mail->addReplyTo( $klientoPastas , $klientoVardas );

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kliento klausimas';
    $mail->Body    = $klientoVardas;
    $mail->AltBody = $klientoVardas;


    $mail->send();

} catch (Exception $e) {
    echo 'Nepavyko: ', $mail->ErrorInfo;
}


include_once('functions.php');


$vardP = $_POST['vardasPart'];
$pastP = $_POST['pastasPart'];
$qty = $_POST['kiekis'];
createNewProduct($vardP, $pastP, $qty);

include('thank-you.php');
