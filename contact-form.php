<?php

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $mailfrom = $_POST["email"];
  $message = $_POST["message"];

  $mailTo = "felix.ortega@live.com";
  $headers = "From: ".$mailfrom;
  $txt = "You have received an email from ".$name.".\n\n".$message;

  mail($mailTo, $txt, $header);
}

?>
