<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 require '/home/mailer/vendor/autoload.php';
 
function send_mail($email, $oggetto, $messaggio, $path_allegato = null){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host = "smtp.nomehostesempio.com"; //indirizzo del server di posta in uscita
        $mail->SMTPDebug = 0;
        $mail->Port = 465; //porta del server di posta in uscita
 	    $mail->SMTPAuth = true;
        $mail->SMTPAutoTLS = false;
	    $mail->SMTPSecure = 'tls'; //tls o ssl informarsi presso il provider del vostro server di posta
        $mail->Username = "noreply@miodominio.com"; //la vostra mail
        $mail->Password = "passwordmiamail"; //password per accedere alla vostra mail
        $mail->Priority    = 1; //(1 = High, 3 = Normal, 5 = low)
        $mail->setFrom('noreply@miodominio.com', 'Nome Sito'); //impostazione del mittente
        $mail->AddAddress($email);
        $mail->IsHTML(true); 
        $mail->Subject  =  $oggetto;
        $mail->Body     =  $messaggio;
        $mail->AltBody  =  "";
        $mail->AddAttachment($path_allegato);  
        if(!$mail->Send()){
                echo "errore nell'invio della mail: ".$mail->ErrorInfo;
                return false;
        }else{
                return true;
        }
        //echo !extension_loaded('openssl')?"Not Available":"Available";
}
?>
