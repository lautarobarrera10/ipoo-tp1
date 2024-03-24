<?php

class Login {
    private $username;
    private $password;
    private $phrase;
    private $lastPasswords;

    public function __construct($username, $password, $phrase){
        $this->username = $username;
        $this->password = $password;
        $this->phrase = $phrase;
        $this->lastPasswords = [$password];
    }

    public function __toString(){
        return
        "Nombre de usuario: " . $this->getUsername() . "\n" .
        "Contraseña: " . $this->getPassword() . "\n" .
        "Frase: " . $this->getPhrase() . "\n" .
        "Últimas contraseñas: " . implode(" - " ,$this->getLastPasswords()) . "\n";
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($newUsername){
        $this->username = $newUsername;
    }

    private function getPassword(){
        return $this->password;
    }

    private function setPassword($newPassword){
        $this->password = $newPassword;
    }

    public function getPhrase(){
        return $this->phrase;
    }

    private function setPhrase($newPhrase){
        $this->phrase = $newPhrase;
    }

    private function getLastPasswords(){
        return $this->lastPasswords;
    }

    private function setLastPasswords($newLastPassword){
        $this->lastPasswords = $newLastPassword;
    }

    public function checkPassword($pass){
        return $pass == $this->getPassword();
    }

    public function showPhrase($user){
        $phrase;
        if ($user == $this->getUsername()){
            $phrase = "frase: " . $this->getPhrase() . "\n";
        } else {
            $phrase = "Usuario inválido \n";
        }
        return $phrase;
    }

    public function updatePassword($newPass){
        $rta;
        if (in_array($newPass, $this->getLastPasswords())){
            $rta = false;
        } else {
            $this->setPassword($newPass);
            $oldPasswords = $this->getLastPasswords();
            array_push($oldPasswords, $newPass);
            $this->setLastPasswords($oldPasswords);
            if (count($oldPasswords) > 4){
                array_shift($oldPasswords);
                $this->setLastPasswords($oldPasswords);
            }
            $rta = true;
        }
        return $rta;
    }
}