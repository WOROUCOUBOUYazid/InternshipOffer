<?php

// PUBLIC
Router::set("accueil", "HomeController", "accueil");
Router::set("accueil2", "HomeController", "accueil2");
Router::set("offres", "HomeController", "offres");
Router::set("offre-([0-9]*)", "HomeController", "offre", 'id');
Router::set("entreprises", "HomeController", "entreprises");

// AUTH Pages
Router::set("login", "AuthController", "login");
Router::set("studentRegister", "AuthController", "studentRegister");
Router::set("companyRegister", "AuthController", "companyRegister");

// Auth feature
Router::set("register", "AuthController", "addUser");
Router::set("connexion", "AuthController", "connectUser");
Router::set("deconnexion", "AuthController", "deconnectUser");

// Student Pages
Router::set("home", "StudentController", "home");

//ADMIN
Router::set("dashboard", "HomeController", "dashboard");
Router::set("users", "HomeController", "users");

//Test
Router::set("add-user", "HomeController", "addUser");

// LES ROUTES CONCERNANT LE CRUD ET LE SPP
// Recuperation de donnees
Router::set("/data/(.+)", "Controller", "dataSPP", 'entity');
// Récupérer une données
Router::set("/find/(.+)/([0-9]+)", "Controller", "find", 'entity,id');
// Ajout de données
Router::set("/add/(.+)", "Controller", "add", 'entity');
// Modification de donnees
Router::set("/edit/(.+)/([0-9]+)", "Controller", "edit", 'entity,id');
// Suppression de donnees
Router::set("/del/(.+)/([0-9]+)", "Controller", "del", 'entity,id');
// Filtre de donnees
Router::set("/filter/(.+)/(.+)/([0-9]*)", "Controller", "filter", 'entity,foreign_key,filter_id');
