<?php
class Usuario
{
    public $username;
    public $email;
    public $password;
    public $user_level;

    //Declaración de constructor
    public function __construct($inputUsername,$inputEmail,$inputPassword,$inputUser_level) {
        $this->username = $inputUsername;
        $this->email = $inputEmail;
        $this->password = $inputPassword;
        $this->user_level = $inputUser_level;
    }
}
?>
