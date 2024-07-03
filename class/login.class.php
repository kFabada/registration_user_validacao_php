<?php

class Login {
    private $vch_login;
    private $vch_senha;

    function setVch_login($vch_login) {
        $this->vch_login = $vch_login;
    }

    function getVch_login() {
        return $this->vch_login;
    }
    
    function setVch_senha( $vch_senha) {
        $this->vch_senha = $vch_senha;
    }

    function getVch_senha() {
        return $this->vch_senha;
    }
}



?>