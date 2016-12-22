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
                                                     require "phpmailer/class.phpmailer.php"; //include phpmailer class

                                                    // Instantiate Class  
                                                    $mail = new PHPMailer();  

                                                    // Setup SMTP  
                                                    $mail->IsSMTP();                //  opzetten van SMTP connectie 
                                                    $mail->SMTPAuth = true;         //  connectie met SMTP heeft geen authorisatie nodig    
                                                    $mail->SMTPSecure = "ssl";      //  connectie gebruikt een TLS
                                                    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server adres
                                                    $mail->Port = 465;  //Gmail SMTP poort
                                                    $mail->Encoding = '7bit';

                                                    // Authentication  
                                                    $mail->Username   = "hesmantest@gmail.com"; //  Gmail adres
                                                    $mail->Password   = "DitisheelGeheim!"; //  Gmail Wachtwoord

                                                    // Samenstellen
                                                    $mail->SetFrom($_POST['email'], $_POST['name']);
                                                    $mail->AddReplyTo($_POST['email'], $_POST['lastname']);
                                                    $mail->Subject = "Contactformulier via de website!";      
                                                    $mail->MsgHTML($message);

                                                    // Verzenden naar 
                                                    $mail->AddAddress("rikheesink@hotmail.com", "Recipient Name"); // Where to send it - Recipient
                                                    $result = $mail->Send();		// zenden!  
                                                    $message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
                                                    unset($mail);
                                                         $_SESSION['alert'] = true;
                                                          $_SESSION['message'] = '<div class="alert alert-success">Bericht is verzonden!</div>';
                                                         $_POST['name'] = $_POST['lastname'] = $_POST['email'] = $_POST['subject'] = $_POST['comment'] = "";   
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