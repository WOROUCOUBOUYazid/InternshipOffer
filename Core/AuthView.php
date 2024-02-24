<?php

// Views management 

class AuthView {

    private $page;

    public function __construct($page = null) {
        $this->page = $page;
    }

    public function render($params = array()) {

        extract($params); // extract page parameters
        $page = $this->page;
        
        ob_start();
        include(VIEW.'Auth/'.$page.'.php');
        $contentPage = ob_get_clean();

        include_once(VIEW.'Layouts/auth.php');

    }

    public function redirect($route) {
        header("Location: ".HOST.$route);
        exit;
    }

}