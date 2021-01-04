<?php

if (isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {


        // submit the form

        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userMessage = $_POST['message'];

        $to = 'blessmessx1337@gmail.com';

        $body = "";

        $body .= "Od: " . $userName . "\r\n";
        $body .= "Email: " . $userEmail . "\r\n";
        $body .= "Wiadomość: " . $userMessage . "\r\n";

        mail($to, $userMessage, $body);
        header("Location: index.html?wiadomoscWyslana");
    }
}
