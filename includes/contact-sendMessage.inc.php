<?php

include_once "../classes/contact-message.contr.classes.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $messageController = new MessageContr($name, $email, $subject, $message);

    $messageController->sendMessage();

    header("location: ../pages/user/contact.php?message=success");

}
