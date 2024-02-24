<?php
session_start();
include_once('./Core/autoload.php');
MyAutoload::start();

if(isset($_GET['r'])) {
    $request = $_GET['r'];
    $router = new Router($request);
}
else {
    $request = 'accueil';
    $router = new Router($request);
    $router->redirect($request);
}

// User::create([
//     "name" => "owner",
//     "email" => "owner@promeus.com",
//     "password" => "154826",
//     "profile" => "SUPER_SAYAN"
// ]);

// $user = User::where("email", "=", "owner@promeus.com")[0];

// $user->update([
//     "name" => "owner"
// ]);

// User::create([
//     "name" => "student",
//     "email" => "student@promeus.com",
//     "password" => "154826",
//     "profile" => "HOKAGE"
// ]);
// $user = User::where("name", "=", "student")[0];
// $user->delete();

// echo "<pre>"; print_r($user); exit;

// $user = User::create([
//     "name" => "admin",
//     "email" => "admin@promeus.com",
//     "password" => "154826",
//     "profile" => "HOKAGE"
// ]);

// $user = User::create([
//     "name" => "boss",
//     "email" => "boss@promeus.com",
//     "password" => "154826",
//     "profile" => "KAIZO_KUN"
// ]);

// $user = User::where("name", "=", "admin")[0];
// $user->update([
//     "email" => "admin_mailer@gmail.com"
// ]);

// $user->delete();

// $users = User::all();

// echo "<pre>"; print_r($users); exit;

$router->renderController();