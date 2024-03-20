<?php
//On crée une classe Db afin de pouvoir effectuer des requêtes à l'intérieur d'autres classes (qui devront donc hériter de Db)
//Sinon, nous devrions créer une variable globale $db qui effectuerait la connexion
class Db
{
    private static $instance;

    protected static function getInstance()
    {
        if (self::$instance === null) {
            try {
                self::$instance = new PDO("mysql:host=localhost;dbname=project_social_network", "root", "");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                die($e->getMessage());
            }

        }
        return self::$instance;
    }
    protected static function discconnect()
    {
        self::$instance = null;
    }
}