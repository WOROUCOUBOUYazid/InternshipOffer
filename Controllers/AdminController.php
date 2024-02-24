<?php

// Auth controller class
class AuthController {

    public function login($params) {
        $view = new AuthView("login");
        $view->render();
    }

    public function studentRegister($params) {
        $view = new AuthView("student_register");
        $view->render();
    }

    public function companyRegister($params) {
        $view = new AuthView("company_register");
        $view->render();
    }
}