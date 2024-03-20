<?php
require_once(__DIR__ . "/../src/models/Db.php"); //require permet une fatale erreur et once permet d'eviter les mauvaise interactions entre require ici ce n'est pas la peine car tous sont fait dans ce fichier.
require_once(__DIR__ . "/../src/models/repositories/UserRepository.php");
require_once(__DIR__ . "/../src/models/repositories/PostRepository.php");
require_once(__DIR__ . "/../src/models/User.php");
require_once(__DIR__ . "/../src/models/Post.php");
require_once(__DIR__ . "/../src/controllers/Controller.php");
require_once(__DIR__ . "/../src/controllers/RegisterController.php");
require_once(__DIR__ . "/../src/controllers/LoginController.php");
require_once(__DIR__ . "/../src/controllers/MainController.php");
require_once(__DIR__ . "/../core/Router.php");

try{
    //Je crée un objet de mon routeur
   $app = new Router();
   //J'appelle la fonction qui gère les routes (donc qui renvoie l'utilisateur vers le bon controller)
   $app->start();
}
catch(PDOException | Exception $e){
    die($e->getMessage());
}
 