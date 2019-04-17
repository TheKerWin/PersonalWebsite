<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['email'];
  //$message = $_POST['message'];

  $mailTo = "mdp77live@outlook.com";
  $headers = "From: " .$mailFrom;
  $txt = "Your website have recieved an email from ".$name.".\n\n".$subject;
  $txt2 = "From your website";

  //mail($mailTo, $subject, $txt, $headers);
  mail($mailTo, $txt2, $txt, $headers);
  header("Location: index.php?mailsend");
}
?>
