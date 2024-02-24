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

    public function addUser($params) {
        $user = User::create([
            'firstname' => $params['firstname'],
            'lastname' => $params['lastname'],
            'phone' => $params['phone'],
            'email' => $params['email'],
            'profile' => 'STUDENT',
            'password' => $params['password']
        ]);
        if($user){
            $message = "Incription reussie!";
            $_SESSION['email'] = $user->getEmail();
            $view = new StudentView("home");
            $view->render(["message" => $message]);
        } else {
            $message = "Echec de l'inscription!";
            Router::redirect("student_register");
        }
    }

    public function connectUser($params) {
        $email = htmlspecialchars($params['email']);
        $password = sha1($params['password']);

        $connexion = new DBConn('users');

        $req = $connexion->whereAll([
                ['email', '=', $email],
                ['password', '=', $password]
            ]);
        if($req){
            $_SESSION['email']=$req[0]['email'];
            $message = "Bienvenue ".$req[0]['firstname']." ".$req[0]['lastname'].".";
            // echo "<pre>"; print_r(); exit;
            $view = new StudentView("home");
            $view->render([
                'message' => $message
            ]);
        } else {
            $message = "Votre mot de passe ou votre email est incorrect!";
            $view = new AuthView("login");
            $view->render([
                'err_connexion_message' => $message
            ]);
        }
    }

    public function deconnectUser($params) {
        unset($_SESSION['email']);
        session_destroy();
        Router::redirect("accueil");
    }
}