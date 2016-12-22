<?php 
class questionManagement {
    public static function questionform() {
        $subject = input::get("subject");
        $content = input::get("content");
        if(!empty(input::get("subject"))) { // kijkt of onderwerp is ingevuld
            if (preg_match("/^[a-zA-Z ]*$/",$subject)) { // kijkt of het onderwerp goed is ingevuld
                if (!empty(input::get("content"))) { // kijkt of conent is ingevuld
                    if(input::get("content")) {
                        $message=
                            'Gebruikersnaam: ' . $_SESSION['user']['username'] . '<br />' .
                            'Onderwerp: ' . $subject . '<br />' .
                            'Bericht: <br/>' . $content
                        ;
                        require "phpmailer/class.phpmailer.php"; //include phpmailer class

                        // Instantiate Class  
                        $mail = new PHPMailer();  

                        // Setup SMTP  
                        $mail->IsSMTP();                //  opzetten van SMTP connectie 
                        $mail->SMTPAuth = true;         //  connectie met SMTP heeft geen authorisatie nodig    
                        $mail->SMTPSecure = "ssl";      //  connectie gebruikt een TLS
                        $mail->Host = "smtp.gmail.com"; //Gmail SMTP server adres
                        $mail->Port = 465;  //Gmail SMTP poort
                        $mail->Encoding = '7bit';

                        // Authentication  
                        $mail->Username   = "hesmantest@gmail.com"; //  Gmail adres
                        $mail->Password   = "DitisheelGeheim!"; //  Gmail Wachtwoord

                        // Samenstellen
                        $mail->Subject = $_SESSION['user']['username'] . " stelt een vraag";      
                        $mail->MsgHTML($message);

                        // Verzenden naar 
                        $mail->AddAddress("rikheesink@hotmail.com", "Recipient Name"); // Where to send it - Recipient
                        $result = $mail->Send();		// zenden!  
                        $message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
                        unset($mail);
                        $_SESSION['alert'] = true; // mail is verstuurd alert word in het form weergegeven
                        $_SESSION['message'] = '<div class="alert alert-success">Bericht is verzonden!</div>';
                    } else { // plaatst een alert als het niet goed is ingevuld
                        $_SESSION['alert'] = true; 
                        $_SESSION['message'] = '<div class="alert alert-danger">Bericht is verplicht</div>';  
                    }
                } else { // plaatst een alert als het leeg is
                    $_SESSION['alert'] = true; 
                    $_SESSION['message'] = '<div class="alert alert-danger">Bericht is verplicht</div>'; 
                }
            } else { // plaatst een alert als het niet goed in is ingevuld
                $_SESSION['alert'] = true; 
                $_SESSION['message'] = '<div class="alert alert-danger">Onderwerp is verplicht</div>';  
            }
        } else { // plaatst een alert als het leeg is
            $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Onderwerp is verplicht</div>';  
        }
    }
}