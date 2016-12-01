<?php
        
        
        include("PHPMailer/PHPMailerAutoload.php");

        $name   = "Matt";
        // $email  = "matt.t.ford@gmail.com";
        
        $email = "elizabeth.cooke@abbvie.com";

        $mail = new PHPMailer(true);
        
        $mail->IsSMTP();
        $mail->IsHTML(true);

        $mail->AddAddress($email);
                
        $body = file_get_contents('index.html');

        $mail->SMTPAuth = true;
        $mail->Port     = 587;
        $mail->Host     = 'smtp.mandrillapp.com';
        $mail->Username = 'shlomi@h-t.com.au';
        $mail->Password = '0phzsVf8hOEKpGcVkhWuBw';
        $mail->From     = 'au_donotreply@h-t.com.au';
        $mail->FromName = 'Test sender';
        $mail->Subject  = "Email test";
        $mail->Body     = $body;
        
        $mail->send();