<?php
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "form_submit") {

    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $item = $_POST['item'];

    $to = 'matteo.cavucci@gmail.com';
    //$subject = '[deglieffetti.eu] messaggio da ' .$name;
    $subject = '[deglieffetti.eu] ' .$item;
    $msg = 'Messaggio da deglieffetti.eu. || Contatto: ' .$name . ' || Email: ' .$email. ' || Interessato a: ' .$item. ' || ';
    $msg .=' Testo del messaggio: '.$message;

    $headers = "DegliEffetti.eu <noreply@deglieffetti.eu>";
    $headers .= "\r\nReply-To:" .$email;
    $headers .= "\r\nX-Mailer: PHP/".phpversion();

    if(mail($to, $subject, $msg, $headers)){
            echo 'mail successful send';
    }
    else{
            echo 'Some errors to send the mail, verify your server options';
        }
}
echo '<h1>Fuori di qua, spammer!</h1>';
?>