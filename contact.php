<?php
  define("TITLE", "CONTACT | Hello company");
  include('includes/header.php');



 ?>


 <div id="contact">
   <hr>
   <h1>Get in touch with us!</h1>

   <?php

     // ヘッダー・インジェクションの確認
     function has_header_injection($str) {
       return preg_match( "/[\r\n]", $str );
     }

     if (isset ($_POST['contact_submit'])) {

       $name = trim($_POST['name']);
       $email = trim($_POST['email']);
       $msg = $_POST['message'];

       //

       if (has_header_injection($name) || has_header_injection($email)) {
         die();
       }

       if ( !$name || !$email || !$msg ) {

         echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back to and try again</a>';
         exit;

       }

       // Add the recipient email
       $to = "youremail";

       // create a subject
       $subject = "$name sent you a message via your contact form";

       // construct the message
       $message = "Name: $name\r\n";
       $message .= "Email: $email\r\n";
       $message .= "Message:\r\n$msg";

       // subscribe ボックスがチェックさたら送信
       if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {

         //
         $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
       }

       //
       $message = wordwrap($message, 80);

       //
       $headers = "MIME-Version: 1.0\r\n";
       $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
       $headers .= "From: $name <$email> \r\n";
       $headers .= "X-Priority: 1\r\n";
       $headers .= "X-MSMail-Priority: High\r\n\r\n";

       // send the email
       mail( $to, $subject, $message, $headers);

   ?>

   <!-- メッセージが送られているかを確認 -->
   <h5>Hello companyにメッセージをして頂きありがとうございます。</h5>
   <p>返信が遅れることもございますので、ご了承くださいませ。</p>
   <p><a href="/final" class="button block">&laquo; Go to Home Page</a></p>

   <?php } else { ?>

   <form method="post" action="" id="contact-form">

     <label for="name">Your name</label>
     <input type="text" id="name" name="name">
     <br>

     <label for="email">Your email</label>
     <input type="email" id="email" name="email">
     <br>

     <label for="message">Your message or booking</label>
     <textarea id="message" name="message"></textarea>
     <br>

     <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
     <label for="subscribe">Subscribe to newsletter</label>

     <input type="submit" class="button next" name="contact_submit" value="Send Message">

   </form>

   <?php } ?>
   <hr>

 </div><!-- contact -->


<?php include('includes/footer.php'); ?>
