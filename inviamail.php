<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './script/PHPMailer/src/Exception.php';
require './script/PHPMailer/src/PHPMailer.php';
require './script/PHPMailer/src/SMTP.php';

// Controlla se il form è stato inviato:  
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
  // Costruire il POST request:      
  $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
  $recaptcha_secret = '6LdYPDAaAAAAAPd1gSjbj3BRryi-4BR8bswwbSV9';
  $recaptcha_response = $_POST['recaptcha_response'];
  // Istanziare e decidoficare la richiesta POST:      
  $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
  $recaptcha_json = json_decode($recaptcha);
  // Azioni da compiere basate sul punteggio ottenuto:      
  if ($recaptcha_json->score >= 0.5) {
    $nome = filter_input(INPUT_POST, 'name');
    $cognome = filter_input(INPUT_POST, 'surname');
    $userEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefono = filter_input(INPUT_POST, 'phone');
    $userMessage = filter_input(INPUT_POST, 'message');

    $adminMessage = "<html>
      <head>
        <title>Contatto dal tuo sito web</title>
      </head>
      <body>
        <h1>Contatto dal tuo sito web</h1>
        <ul>
          <li>Nome: {$nome} {$cognome}</li>
          <li>Email: {$userEmail}</li>
          <li>Telefono: {$telefono}</li>
          <li>Messaggio: {$userMessage}</li>
        </ul>
      </body>
    </html>";

    $mail = new PHPMailer(true);                            // Passing `true` enables exceptions
    try {
      //Server settings
      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->SMTPSecure = "ssl";                            // sets the prefix to the servier
      $mail->Host = "smtp.gmail.com";                       // sets GMAIL as the SMTP server
      $mail->Port = 465;                                    // set the SMTP port for the GMAIL server
      $mail->Username = "umbertozollo@gmail.com";           // GMAIL username
      $mail->Password = "###1975###Shimano###";             // GMAIL password
      //Recipients
      $mail->setFrom($userEmail, 'Mailer');
      $mail->addAddress('umbertozollophoto@gmail.com', 'Umberto Zollo Web Site');     // Add a recipient
      $mail->Subject = 'Here is the subject';
      //Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Body = $adminMessage;

      $mail->send();
      echo 'Message has been sent';
    } catch (Exception $e) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
  }
}



