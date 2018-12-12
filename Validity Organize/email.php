<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  $from = 'Validity Organize';
  $to = 'chrisorochi_133@hotmail.com';
  $subject = "Produto preste a vencer";
  $message = "O seu produto está preste a vencer, edetue a troca do mesmo.";
  $headers = "De:". $from;
  mail($to, $subject, $message, $headers);
  echo " A mensagem de e-mail foi enviada.";

?>