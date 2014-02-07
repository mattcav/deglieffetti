<?php
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "form_submit") {

    $email = $_POST['email'];
    $name = $_POST['name'];
    $designer = $_POST['designer'];


    $to = 'matteo.cavucci@gmail.com, shop@deglieffetti.eu';

    $subject = '[deglieffetti.eu | '. $designer . '] messaggio da ' .$name;
    $msg = 'Messaggio dalla pagina: <strong>'. $designer .' </strong><br>Scritto da: <strong>'. $name . '</strong><br> Per contattarlo, rispondi a: <strong>' .$email. '</strong><br><br> ';
    $msg .=' Testo del messaggio: Hello Degli Effetti, I want to get some informations about <strong>'. $designer .'</strong> from you. Please, contact me at <strong>' .$email.'</strong>. Sincerely, <strong>'.$name. '</strong>';


    
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: deglieffetti.eu <noreply@deglieffetti.eu>' . "\r\n";

    $headers .= "Reply-To:" .$email. "\r\n";
    $headers .= "X-Mailer: PHP/".phpversion(). "\r\n";

    if(mail($to, $subject, $msg, $headers)){
            echo 'mail successful send';
    }
    else{
            echo 'Some errors to send the mail, verify your server options';
        }
}

echo '<h1>Fuori di qua, spammer!</h1>';
?>