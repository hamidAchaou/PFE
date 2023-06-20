<?php

include "contact-message.classes.php";

class MessageContr extends Message 
{
  private $name;
  private $email;
  private $subject;
  private $message;


  public function __construct($name, $email, $subject, $message)
  {
    $this->name = $name;
    $this->email = $email;
    $this->subject = $email;
    $this->message = $message;
  }

  public function sendMessage() {


    $this->saveMessage($this->name, $this->email, $this->subject, $this->message);
  }

}

?>