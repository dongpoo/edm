<?php
        
        
        include("PHPMailer/PHPMailerAutoload.php");

        $name   = "Matt";
        // $email  = "matt.t.ford@gmail.com";
        // $email = "astrid.macassey@abbvie.com";

        $mail = new PHPMailer(true);
        
        $mail->IsSMTP();
        $mail->IsHTML(true);
        
try {

    // $mail->AddAddress('matt.t.ford@gmail.com');
    $mail->AddAddress('ht@litmustest.com');
   
    $body = file_get_contents('index.html');

    $mail->SMTPAuth = true;
    $mail->Port     = 587;
    $mail->Host     = 'smtp.mandrillapp.com';
    $mail->Username = 'shlomi@h-t.com.au';
    $mail->Password = '0phzsVf8hOEKpGcVkhWuBw';
    $mail->From     = 'au_donotreply@h-t.com.au';
    $mail->FromName = 'H&T EDM Preview';
    $mail->Subject  = "Tolmar test";
    $mail->Body     = $body;
    // $mail->SMTPDebug = 1;
    var_dump($mail->send());
    echo "Message Sent OK\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
  


    // $mail->AddAddress($email);

    // $mail->AddAddress('poonam.chapke@abbvie.com');
    // $mail->AddAddress('mattf@h-t.com.au');

      // $mail->AddAddress('lordsnot@gmail.com');
    // $mail->AddAddress('danielle.corones@abbvie.com');
    // $mail->AddAddress('vanessa.cowley@abbvie.com');
    // $mail->AddAddress('ally.crystal@abbvie.com');
    // $mail->AddAddress('mike.durban@abbvie.com');
    // $mail->AddAddress('linette.haak@abbvie.com');
    // $mail->AddAddress('amanda.kiersey@abbvie.com');
    // $mail->AddAddress('lucy.lay@abbvie.com');
    // $mail->AddAddress('vicki.mccaugherty@abbvie.com');
    // $mail->AddAddress('marnie.myles@abbvie.com');
    // $mail->AddAddress('claire.sanders@abbvie.com');
    // $mail->AddAddress('joanne.taylor@abbvie.com');
    // $mail->AddAddress('nikki.vaughan@abbvie.com');
    // $mail->AddAddress('poonam.chapke@abbvie.com');