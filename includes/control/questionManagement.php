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
                        
                        
                          require 'PHPMailer/PHPMailerAutoload.php';

                                                        $mail = new PHPMailer;

                                                        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                                                        $mail->isSMTP();                                      // Set mailer to use SMTP
                                                        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                                                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                                        $mail->Username = 'hesmantest@gmail.com';                 // SMTP username
                                                        $mail->Password = 'DitisheelGeheim!';                           // SMTP password
                                                        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                                                        $mail->Port = 465;                                    // TCP port to connect to

                                                        $mail->setFrom('hesmantest@gmail.com', 'De Bijlesjuf');
                                                        $mail->addAddress('rikheesink@hotmail.com', 'Recipient Name');     // Add a recipient
                                                        $mail->isHTML(true);                                  // Set email format to HTML
                                                        $mail->Subject = 'Contactformulier via de website';
                                                        $mail->Body    = $message;

                                                        if(!$mail->send()) {
                                                            $_SESSION['alert'] = true;
                                                          $_SESSION['message'] = '<div class="alert alert-danger">Bericht kon niet verzonden worden!</div>';
                                                            echo 'Mailer Error: ' . $mail->ErrorInfo;
                                                        } else {
                                                           $_SESSION['alert'] = true;
                                                          $_SESSION['message'] = '<div class="alert alert-success">Bericht is verzonden!</div>';
                                                           $_POST['subject'] = $_POST['content'] = "";
                                                        }
            
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