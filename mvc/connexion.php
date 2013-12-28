<?php

class MVC_Connexion {

    private static $_pdo;

    private function __construct() {
        //$dsn = "pgsql:host=".BDD_HOST.";port=".BDD_PORT.";dbname=".BDD_NAME;
        $dsn = 'mysql:dbname='
                . BDD_NAME
                . ';host='
                . BDD_HOST;     
        
        self::$_pdo = new PDO($dsn, BDD_USER, BDD_PWD);
        self::$_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    static public function get() {
        if (!isset(self::$_pdo)) {
            new MVC_Connexion();
        }
        return self::$_pdo;
    }

    static public function query($statement){     
        return self::get()->query($statement);
    }
    static function prepare($statement, $driver_options = array()) {
        return self::get()->prepare($statement, $driver_options);
    }
    
}