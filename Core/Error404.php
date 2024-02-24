<?php

// Error404 View class

class Error404 {

    private $error;

    public function __construct($error = null) {
        $this->error = $error;
    }

    public function render($params = array()) {

        extract($params); //faire une extraction de params
        $error = $this->error;
        
        include_once(VIEW.'404.php');

    }

    public function redirect($route) {
        header("Location: ".HOST.$route);
        exit;
    }

}