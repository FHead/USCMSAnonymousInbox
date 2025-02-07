<?php
if(isset($_POST['comments']))
{
   // Sanitize input for safety
   $title    = filter_var($_POST['title'],    FILTER_SANITIZE_SPECIAL_CHARS);
   $comments = filter_var($_POST['comments'], FILTER_SANITIZE_SPECIAL_CHARS);

   // if both fields are set, go ahead and send the mail
   if(!empty($comments) && !empty($title))
   {
      $message    = "$comments";
      $to         = "john.doe@jane.com";
      $from       = "jane.doe@john.com";
      $subject    = "[Anonymous Box] $title";
      $headers    = "From: {$from}" . "\r\n" . 'Reply-To:' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
      $mailresult = mail($to, $subject, $message, $headers);

      if($mailresult)
      {
         header("Location:thankyoupage.php");
      }
      else
      {
         header("Location:errorpage.php");
      }
   }
   else
   {
      header("Location:errorpage.php");
   }
}
?>

