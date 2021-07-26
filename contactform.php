<?php

$name = (isset($_POST['name1']) && $_POST['name1'] != '') ? ($_POST['name1']) : ($_POST['name2']);
$mailFrom = (isset($_POST['mail1']) && $_POST['mail1'] != '') ? $_POST['mail1'] : $_POST['mail2'];
$message = (isset($_POST['message1']) && $_POST['message1'] != '') ? $_POST['message1'] : $_POST['message2'];

$mailTo = "socomorales@atlasfamiliar.com";
$headers = "From: " . $mailFrom;
if(isset($_POST['name1'])){
  $txt = "Mensaje de " . $name . " desde Contacto atlasfamiliar.com";  
}
else{
  $txt = "Mensaje de " . $name . " desde Cita Online atlasfamiliar.com";
}

$mail = mail($mailTo, $txt, $message, $headers);
if($mail){
  header("Location: emailsuccess.html");  
}
else{
  header("Location: emailerror.html");   
}

/*
//CONTACTO
if (isset($_POST['submit1']) || (isset($_POST['name1']) && isset($_POST['mail1']) && isset($_POST['message1']))){
  $name = $_POST['name1'];
  $mailFrom = $_POST['mail1'];
  $message = $_POST['message1'];

  $mailTo = "socomorales@atlasfamiliar.com";
  $headers = "From: " . $mailFrom;
  $txt = "Mensaje de " . $name . " desde Contacto en atlasfamiliar.com";

  $mail = mail($mailTo, $txt, $message, $headers);
  if($mail){
    header("Location: emailsuccess.html");  
  }
  else{
    header("Location: emailerror.html");   
  }
}

//CITA ONLINE
if (isset($_POST['submit2']) || (isset($_POST['name2']) && isset($_POST['mail2']) && isset($_POST['message2']))){
  $name = $_POST['name2'];
  $mailFrom = $_POST['mail2'];
  $message = $_POST['message2'];

  $mailTo = "socomorales@atlasfamiliar.com";
  $headers = "From: " . $mailFrom;
  $txt = "Mensaje de " . $name . " desde Cita Online en atlasfamiliar.com";

  $mail = mail($mailTo, $txt, $message, $headers);
  if($mail){
    header("Location: emailsuccess.html");  
  }
  else{
    header("Location: emailerror.html");   
  }
}
*/

?>