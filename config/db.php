<?php

class Db {
    private static $_instance;

    private function __construct() {
    }

    public static function getInstance(){
        $host = 'localhost';
        $dbname = 'todo_app';
        $user = 'root';
        $pass = '';

        if (self::$_instance === null){
            try {
                self::$_instance = new PDO("mysql:dbname=$dbname;host=$host", $user, $pass);
                self::$_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erreur connexion à la DB' . $e->getMessage());
            }
        }
        return self::$_instance;
    }
}