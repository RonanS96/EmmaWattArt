<!-- Take input from email form and send it to the registered
   - email address for Emma Watt Art.
  -->

<?php
  session_start();

  $name     = $_POST['Name'];
  $sender   = $_POST['Email'];
  $message  = $_POST['Message'];

  $_SESSION['sent'] = true;

  $email_from     = 'Emma Watt Art';
  $email_subject  = "New message from Emma Watt Art";
  $email_body     = "You have recieved a new message from " . $name . ":\n" . $message . ".\n";

  $name = str_replace(array('\n', '\r', '\t'), '', $name);
  $sender = str_replace(array('\n', '\r', '\t'), '', $sender);
  $message = str_replace(array('\n', '\r', '\t'), '', $message);

  $to = "ronan1874@aol.co.uk";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $sender \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: ../about.php?sent=true"); /* Redirect browser to 'About' screen */
?>
