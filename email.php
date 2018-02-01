<?php
$sub="U-tube";
$to='arianos5534@gmail.com';
$bdy="hello <h1>hi</h1>";
        
require 'PHPMailer/PHPMailerAutoload.php';  // ur library location

$mail= new PHPMailer();

$mail->Host='smtp.gmail.com';     //for gmail as ur host

$mail->SMTPAuth='true';

$mail->Username='natasahotel@gmail.com'; // any mail id belongs to the host (my case it accept any gmail)
 
$mail->Password='natasahotel123';    

$mail->SMTPSecure='tls';

$mail->Port=587;


$mail->SetFrom('Developertest@cserockers.ga','Developer');  // from -- u can use dummy ids 
$mail->addAddress($to);                                // to id
$mail->addReplyTo('Noreply@cserockers.ga','Info');
$mail->isHTML(true);
$mail->addAttachment('1.jpeg','new.jpeg');
$mail->Subject=$sub;
$mail->Body=$bdy;

echo " <pre>";print_r($mail); echo "</pre>";   // for understanding PHPMailer  
if($mail->send())
{
    echo'Mail Sent';
}
else
{
    echo "Mail sending failed";
}
?>