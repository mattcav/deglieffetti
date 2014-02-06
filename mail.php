<?php
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "form_submit") {

    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    $item = $_POST['item'];

    $to = 'matteo.cavucci@gmail.com, shop@deglieffetti.eu';
    //$subject = '[deglieffetti.eu] messaggio da ' .$name;
    $subject = '[deglieffetti.eu] ' .$item;
    $msg = '<h2>Messaggio da deglieffetti.eu</h2> <br><strong>Contatto:</strong> ' .$name . '<br><strong>Email:</strong> ' .$email. ' <br><strong>Interessato a:</strong> ' .$item. ' <br> ';
    $msg .=' <br><strong>Testo del messaggio:</strong> '.$message;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: deglieffetti.eu <noreply@deglieffetti.eu>' . "\r\n";

    $headers .= "Reply-To:" .$email. "\r\n";
    $headers .= "\r\nX-Mailer: PHP/".phpversion(). "\r\n";

    if(mail($to, $subject, $msg, $headers)){
            echo 'mail successful send';
    }
    else{
            echo 'Some errors to send the mail, verify your server options';
        }
}
echo '<h1>Fuori di qua, spammer!</h1>';
?>