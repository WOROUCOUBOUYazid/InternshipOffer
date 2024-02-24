<?php

// Home controller class
class HomeController {

    public function accueil($params) {
        $users = User::all();
        $view = new View("accueil");
        $view->render([
            "users" => $users
        ]);
    }

    public function accueil2($params) {
        $view = new View("accueil2");
        $view->render();
    }

    public function addUser($params) {
        User::create($params);
        Router::redirect("accueil");
    }

    public function dashboard($params) {
        $view = new AdminView("dashboard");
        $view->render();
    }

    public function users($params) {
        $view = new AdminView("users");
        $view->render();
    }

    public function offres($params) {
        $view = new View("offres");
        $view->render();
    }

    public function offre($params) {
        // on fera la récupération de l'offre en question à ce niveau

        
        $view = new View("offre");
        $view->render([
            "id" => $params["id"],
        ]);
    }

    public function entreprises($params) {
        $view = new View("entreprises");
        $view->render();
    }

}