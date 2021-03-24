<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';
require './PHPMailer/Exception.php';

// Controlla se il form è stato inviato:  
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
//  // Costruire il POST request:      
//  $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
//  $recaptcha_secret = '6LdYPDAaAAAAAPd1gSjbj3BRryi-4BR8bswwbSV9';
//  $recaptcha_response = $_POST['recaptcha_response'];
//  // Istanziare e decidoficare la richiesta POST:      
//  $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
//  $recaptcha_json = json_decode($recaptcha);
//  // Azioni da compiere basate sul punteggio ottenuto:      
//  if ($recaptcha_json->score >= 0.5) {
    
    $json_response = array();
  
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
          <li>Nome: <strong>{$nome} {$cognome}</strong></li>
          <li>Email: <strong>{$userEmail}</strong></li>
          <li>Telefono: <strong>{$telefono}</strong></li>
          <li>Messaggio: <strong>{$userMessage}</strong></li>
        </ul>
      </body>
    </html>";

    $mail = new PHPMailer(true);                            // Passing `true` enables exceptions
    try {
      $mail->SMTPDebug = 0;                                 // Enable verbose debug output
      //Server settings
      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->isHTML(true);                                  // Set email format to HTML
      
      $mail->Host = "mail.ingumbertozollo.it";              // sets the SMTP server
      $mail->Port = 465;                                    // set the SMTP port
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->SMTPSecure = "ssl";                            // sets the prefix to the servier
                                      
      $mail->Username = "info@ingumbertozollo.it";           // username
      $mail->Password = "Shimano#1975#";                     // password
      
      //Recipients
      $mail->setFrom($userEmail, 'Mailer');
      $mail->addAddress('photo@ingumbertozollo.it', 'Umberto Zollo Web Site');     // Add a recipient
      $mail->Subject = 'Contatto da sito web';
      //Content
      
      $mail->Body = $adminMessage;

      $mail->send();
      
      $json_response["codErrore"] = "0";
      $json_response["desErrore"] = "";
    } catch (Exception $e) {
      $json_response["codErrore"] = "1";
      $json_response["desErrore"] = $mail->ErrorInfo;
    }
    
    echo json_encode($json_response);
//  } else {
//    echo 'Punteggio non sufficiente';
//  } 
}



