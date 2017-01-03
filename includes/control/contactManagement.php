<?php 
class contactManagement
{


     public static function contactform2()	
	{
     
        $name = input::get("name");
      $lastname = input::get("lastname");
        $email = input::get("email");
        $subject = input::get("subject");
        $comment = input::get("comment");
        $captcha = input::get("g-recaptcha-response");
        
        
        if(!empty(input::get("name"))){
            if(preg_match("/^[a-zA-Z ]*$/",$name)) {
                if(!empty(input::get("lastname"))) {
                    if(preg_match("/^[a-zA-Z ]*$/",$lastname)){
                        if(!empty(input::get("email"))) {
                            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                if(!empty(input::get("subject"))) {
                                   if (preg_match("/^[a-zA-Z ]*$/",$subject)) {
                                       if (!empty(input::get("comment"))) {
                                           if(input::get("comment")) {
                                              if(input::get("g-recaptcha-response")) {
                                                         $message=
                                                      'Naam: '.$_POST['name'].'<br />
                                                      Achternaam:	'.$_POST['lastname'].'<br />
                                                      Email:	'.$_POST['email'].'<br />
                                                      Onderwerp:	'.$_POST['subject'].'<br />
                                                      Bericht:	'.$_POST['comment'].'
                                                      ';
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
                                                           $_POST['name'] = $_POST['lastname'] = $_POST['email'] = $_POST['subject'] = $_POST['comment'] = "";
                                                        }
                                                                     } else {
                                                $_SESSION['alert'] = true; 
                      $_SESSION['message'] = '<div class="alert alert-danger">Captcha is verplicht</div>';   
                                              }
                                           } else {
                                                $_SESSION['alert'] = true; 
                    $_SESSION['message'] = '<div class="alert alert-danger">Bericht mag niet leeg zijn</div>';  
                                           }
                                       } else {
                                         $_SESSION['alert'] = true; 
                    $_SESSION['message'] = '<div class="alert alert-danger">Bericht mag niet leeg zijn</div>'; 
                                       }
                                   } else {
                                      $_SESSION['alert'] = true; 
                      $_SESSION['message'] = '<div class="alert alert-danger">Onderwerp mag niet leeg zijn</div>';  
                                   }
                                } else {
                                   $_SESSION['alert'] = true; 
                      $_SESSION['message'] = '<div class="alert alert-danger">Onderwerp mag niet leeg zijn</div>';  
                                }
                            } else {
                                 $_SESSION['alert'] = true; 
                  $_SESSION['message'] = '<div class="alert alert-danger">Email mag niet leeg zijn</div>'; 
                            }
                        } else {
                           $_SESSION['alert'] = true; 
                  $_SESSION['message'] = '<div class="alert alert-danger">Email mag niet leeg zijn</div>'; 
                        }
                    } else {
                        $_SESSION['alert'] = true; 
                $_SESSION['message'] = '<div class="alert alert-danger">Achternaam mag niet leeg zijn</div>';
                    }
                } else {
                    $_SESSION['alert'] = true; 
                $_SESSION['message'] = '<div class="alert alert-danger">Achternaam mag niet leeg zijn</div>';
                }
            } else {
                 $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Naam mag niet leeg zijn</div>'; 
            }
        } else {
            $_SESSION['alert'] = true; 
            $_SESSION['message'] = '<div class="alert alert-danger">Naam mag niet leeg zijn</div>'; 
        }
 
}
}