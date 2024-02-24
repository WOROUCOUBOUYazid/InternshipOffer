<?php
// configuration file
ini_set('display_errors','on');
error_reporting(E_ALL);

class MyAutoload {
    
    public static function start() {

        spl_autoload_register(array(__CLASS__, 'autoload'));

        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];

        define('HOST', 'http://'.$host.'/InternshipOffer/');
        define('ROOT', $root.'/InternshipOffer/');

        define('CONTROLLER', ROOT.'Controllers/');
        define('VIEW', ROOT.'Views/');
        define('MODEL', ROOT.'Models/');
        define('CORE', ROOT.'Core/');
        define('STORAGE', ROOT.'Storage/'); // Curriculum Storage

        define('ASSETS', HOST.'Assets/');
        define('STORAGES', HOST.'Storage/');
        
    }

    public static function autoload($class) {

        if(file_exists(MODEL.$class.'.php')) {
            include_once(MODEL.$class.'.php');
        }
        else if(file_exists(CONTROLLER.$class.'.php')) {
            include_once(CONTROLLER.$class.'.php');
        }
        else if(file_exists(CORE.$class.'.php')) {
            include_once(CORE.$class.'.php');
        }

        include_once('./routes.php');

    }

    // public static function sql_details() {
    //     return array ( 'user' => 'root', 'pass' => '154826', 'db'   => 'pta', 'host' => 'localhost' );
    // }

    // public static function dbconnect() {
    //     return new PDO("mysql:host=localhost;dbname=promeus;charset=utf8", "root", "154826", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    // }
    
}