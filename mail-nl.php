<?php
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "form_submit") {

    $email = $_POST['email'];
    $name = $_POST['name'];

    $to = 'matteo.cavucci@gmail.com';

    $subject = '[deglieffetti.eu] messaggio da ' .$name;
    $msg = 'Messaggio da deglieffetti.eu/paul-harnden '. $name . ' Per contattarlo, rispondi a: ' .$email. ' || ';
    $msg .=' Testo del messaggio: Hello Degli Effetti, I want to get some informations about Paul Harnden from you. Please, contact me at ' .$email.'. Sincerely, '.$name;


    $headers = "Website <noreply@deglieffetti.eu>";
    $headers .= "\r\nReply-To:" .$email;

    if(mail($to, $subject, $msg, $headers)){
            echo 'mail successful send';
    }
    else{
            echo 'Some errors to send the mail, verify your server options';
        }
}
echo '<h1>Fuori di qua, spammer!</h1>';
?>