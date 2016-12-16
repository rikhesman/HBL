<?php 
class contactManagement
{

//registreren Review
	public static function contactform()	
	{
// Alle variables worden hier leeg gemaakt
$nameErr = $lastnameErr = $emailErr = $subjectErr = $commentErr = $captchaErr =  "";
$name = $lastname = $email = $subject = $comment  = $recaptcha_secret = "";
$Errname = $Errlastname =  $Erremail = $Errsubject = $Errsubject = "";
$checkname = $checklastname = $checkemail = $checksubject = $checkcomment = "";
// checkt of de methode wel "POST" is
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
    }
// Als je op de knop drukt kijkt of captcha is ingevuld
    if(isset($_POST['submit']) && !empty($_POST['submit'])) {
         $message = "";
         $Ename = "";
         $Elastname = "";
         $Eemail = "";
         $Esubject = "";
            if (empty($_POST["name"])) {
            $nameErr = "Naam is verplicht";
            } else {
            $name = input($_POST["name"]);
              //check of de naam letters en witteregels bevat
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameErr = "Alleen letters en witregels toegestaan";
                $Errname = $name;
            } else {
            $checkname = $name;
            }
            }
        
             if (empty($_POST["lastname"])) {
             $lastnameErr = "Achternaam is verplicht";
             } else {
            $lastname = input($_POST["lastname"]);
            // check of de naam letters en witteregels bevat
            if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
            $lastnameErr = "Alleen letters en witregels toegestaan";
             $Errlastname = $lastname;
            }
            else {
            $checklastname = $lastname;
            }
            }
        
             if (empty($_POST["email"])) {
            $emailErr = "Email is verplicht";
            } else {
            $email = input($_POST["email"]);
            // checkt of e-mail adres wel goed is geformuleerd
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Ongeldig email formaat"; 
            $Erremail = $email;
            }
            else {
            $checkemail = $email;
            }
            }
        
            if (empty($_POST["subject"])) {
            $subjectErr = "Onderwerp is verplicht";
            } else {
            $subject = input($_POST["subject"]);
            // check of de naam letters en witteregels bevat
            if (!preg_match("/^[a-zA-Z ]*$/",$subject)) {
            $subjectErr = "Alleen letters en witregels toegestaan";
            $Errsubject = $subject;
            }
            else {
            $checksubject = $subject;
            }
            }         
            
            if (empty($_POST["comment"])) {
            $commentErr = "Bericht is verplicht";
            } if($_POST["comment"]) {
            $checkcomment = input($_POST["comment"]);
            } 
            isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']); 
            //De site secret sleutel
            $recaptcha_secret = "6LeUJQ0UAAAAAHkfZ2HWa2ppNkkYXTK1ln-WAAYZ";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
        $response = json_decode($response, true);
        if($response["success"] === true && $name = $checkname && $lastname = $checklastname && $email = $checkemail && $subject = $checksubject && $checkcomment){
            // als de response success is volgt die dit pad
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
                    if($message == 'Successfully Sent!'){
                       $message = "Bericht is verzonden!";
                        $name = $lastname = $email = $subject = $checkcomment = "";
                    
                    }
            }
        
            if($response["success"] === true && $name = $Errname || $lastname = $Errlastname || $email = $Erremail || $subject = $Errsubject) {
            $Ename = "";
            $Ename = $Errname;
            $name = $checkname;
            $Elastname = "";
            $Elastname = $Errlastname;
            $lastname = $checklastname;
            $Eemail = "";
            $Eemail = $Erremail;
            $email = $checkemail;
            $Esubject = "";
            $Esubject = $Errsubject;
            $subject = $checksubject;
            $checkcomment = $checkcomment;
            }
            }
} else {
    $message = $Ename = $Elastname = $Eemail = $Esubject = "";
}
		

}
}