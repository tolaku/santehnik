<?php
// Define some constants
define( "RECIPIENT_NAME", "santehnikpro.by" );
define( "RECIPIENT_EMAIL", "tola_ku@mail.ru" );

// Read the form values
$success = false;
$senderName = isset( $_POST['name'] ) ? preg_replace( "/^[а-яА-ЯёЁa-zA-Z0-9]+$/", "", $_POST['name'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$tema = isset( $_POST['subject'] ) ? preg_replace( "/^[а-яА-ЯёЁa-zA-Z0-9]+$/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

// If all values exist, send the email
if ( $senderName && $senderEmail && $message ) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $subject = "Вопрос с сайта: SANTEHNIKPRO.BY. Тема: {$tema}";
  $headers .= "Content-type: text/plain; charset=utf-8\r\n";
  $headers .= "From: " . $senderName . " <" . $senderEmail . ">";
  $success = mail( $recipient, $subject, $message, $headers );
  echo "<p class='success'>Спасибо за обращение. В ближайшее время мы вам ответим!</p>";
}

?>