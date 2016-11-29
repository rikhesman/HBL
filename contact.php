<!DOCTYPE html>
<html lang="en">
<head>
  <title>De Bijlesjuf</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/bootstrap1.css">
     <link rel="shortcut icon" href="./foto/logosonnega.ico">
  <script src="./js/javascript.js"></script>
  <script src="./js/javascript1.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<?php include('build/navbar.php'); ?>

   <div class="row"> 
  <div class="col-md-4"><!--Linker kant--></div>
    <div class="col-md-4">
    <h3>Beschikbaarheid van “De Bijlesjuf“</h3>
    <table class="table">
    <thead>
      <tr>
        <th>Dag</th>
        <th>Tijd</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Maandag</td>
        <td>15.30 - 17.30</td>
      </tr>
        <tr>
  <td>Dinsdag</td>
  <td>15.30 - 17.30</td>
</tr>
        <tr>
  <td>Woensdag</td>
  <td>15.30 - 17.30</td>
</tr>
        <tr>
  <td>Donderdag</td>
  <td>15.30 - 17.30</td>
</tr>
    </tbody>
  </table>
   
        <?php
// define variables and set to empty values
$nameErr = $lastnameErr = $emailErr = $subjectErr = $commentErr = $captchaErr =  "";
$name = $lastname = $email = $subject = $comment  = $secret = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST['submit']) && !empty($_POST['submit'])) {
 
     if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) 
        //your site secret key
        $secret = "6LeUJQ0UAAAAAHkfZ2HWa2ppNkkYXTK1ln-WAAYZ";
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success) {
  if (empty($_POST["name"])) {
    $nameErr = "Naam is verplicht";
  } else {
    $name = input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Alleen letters en witregels toegestaan";
       
     
    } else {
        $name = $name;
    }
  }
    if (empty($_POST["lastname"])) {
    $lastnameErr = "Achternaam is verplicht";
  } else {
    $lastname = input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Alleen letters en witregels toegestaan";
    }
         else {
        $lastname = $lastname;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is verplicht";
  } else {
    $email = input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Ongeldig email formaat"; 
    }
            else {
        $email = $email;
    }
  }
            
   if (empty($_POST["subject"])) {
    $subjectErr = "Onderwerp is verplicht";
  } else {
    $subject = input($_POST["subject"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$subject)) {
      $subjectErr = "Alleen letters en witregels toegestaan";
    }
    else {
        $subject = $subject;
    }
  }         

  if (empty($_POST["comment"])) {
    $commentErr = "Bericht is verplicht";
  } if($_POST["comment"]) {
    $comment = input($_POST["comment"]);
  }  else {
        $comment = $comment;
    }

  $message=
'Naam:	'.$_POST['name'].'<br />
Achternaam:	'.$_POST['lastname'].'<br />
Email:	'.$_POST['email'].'<br />
Onderwerp:	'.$_POST['subject'].'<br />
Bericht:	'.$_POST['comment'].'
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "hesmantest@gmail.com"; // Your full Gmail address
    $mail->Password   = "DitisheelGeheim!"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['email'], $_POST['name']);
    $mail->AddReplyTo($_POST['email'], $_POST['lastname']);
    $mail->Subject = "Contactformulier via de website!";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("h3sm4n@hotmail.nl", "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);
    if($message == 'Successfully Sent!'){
       $message = "Bericht is verzonden!";
        $name = $lastname = $email = $subject = $comment  = "";
    }    
            
} else {

        if (empty($_POST["name"])) {
    $nameErr = "Naam is verplicht";
  } else {
    $name = input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Alleen letters en witregels toegestaan";
       
     
    } else {
        $name = $name;
    }
  }
    if (empty($_POST["lastname"])) {
    $lastnameErr = "Achternaam is verplicht";
  } else {
    $lastname = input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Alleen letters en witregels toegestaan";
    }
    else {
        $lastname = $lastname;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is verplicht";
  } else {
    $email = input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Ongeldig email formaat"; 
    }
    else {
        $email = $email;
    }
  }

   if (empty($_POST["subject"])) {
    $subjectErr = "Onderwerp is verplicht";
  } else {
    $subject = input($_POST["subject"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$subject)) {
      $subjectErr = "Alleen letters en witregels toegestaan";
    }
    else {
        $subject = $subject;
    }
  }

  if (empty($_POST["comment"])) {
    $commentErr = "Bericht is verplicht";
  } if (!empty($_POST["comment"])) {
    $comment = input($_POST["comment"]);
  }  else {
        $comment = $comment;
    }

             
        $captchaErr = "Captcha niet ingevuld";
        
        }
 
}
} else {
    $message = "";
    }
?>

<h3>Contact formulier "De bijlesjuf"</h3>
<p><span class="error">* Verplicht veld.</span></p>
        <h3 class="error"><?php echo $message;?></h3>
<form method="post" action="contact.php">
    <div class="form-group">Naam:  <span class="error">* <?php echo $nameErr;?></span><input type="text" class="form-control" placeholder="Vul hier in" name="name" value="<?php echo $name;?>"></div>
    <div class="form-group">Achternaam:  <span class="error">* <?php echo $lastnameErr;?></span><input type="text" class="form-control" placeholder="Vul hier in" name="lastname" value="<?php echo $lastname;?>"></div>
    <div class="form-group">Email:  <span class="error">* <?php echo $emailErr;?></span><input type="text" class="form-control" placeholder="Vul hier in" name="email" value="<?php echo $email;?>"></div>
    <div class="form-group">Onderwerp:  <span class="error">* <?php echo $subjectErr;?></span><input type="text" class="form-control" placeholder="Vul hier in" name="subject" value="<?php echo $subject;?>"></div>
    <div class="form-group">Bericht:  <span class="error">* <?php echo $commentErr;?></span><textarea rows="5" class="form-control" placeholder="Vul hier in" cols="22" name="comment"><?php print($comment)?></textarea></div>
    <span class="error"><?php echo $captchaErr;?></span>
<div class="g-recaptcha" data-sitekey="6LeUJQ0UAAAAACQBpeqfD9zojgpKWbqV9ToIBRYk"></div>
    <br>
     <div class="form-group"><input type="submit" name="submit" value="Verstuur bericht"></div>

     
</form>

    
</div>
    
    <div class="col-md-4"><!--Rechter kant--></div> 
    </div>


</body>
</html>


