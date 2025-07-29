<?php
class Email {
    public $email;
    public function __construct($email) {
        $this->email = $email;
    }
    public function showemail() {
        echo " the title is : $this->email";
    }

}

$emaill = new email("Kareem@gmail.com");
$emaill->showemail();
?>