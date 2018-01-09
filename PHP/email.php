<!-- Take input from email form and send it to the registered
   - email address for Emma Watt Art.
  -->

<?php
  $name     = $_POST['Name'];
  $sender   = $_POST['Email'];
  $message  = $_POST['Message'];
?>

<?php
  $email_from     = 'Emma Watt Art';
  $email_subject  = "New message from Emma Watt art";
  $email_body     = "You have recieved a new message from " . $name . ":\n" . $message . ".\n"
?>

<?php
  $to = "ronan1874@aol.co.uk";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $sender \r\n";

  mail($to,$email_subject,$email_body,$headers);
?>
