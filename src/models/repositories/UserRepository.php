<?php
abstract class UserRepository extends Db
{
    private static function request($request)
    {
        //Je me connecte à la db et j'exécute la requête
        $result = self::getInstance()->query($request);
        //Je me déconnecte de la db
        self::discconnect();
        //Je retourne le résultat de la requête
        return $result;
    }

    public static function getUsers()
    {
        return self::request("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function insertIntoDb(User $user)
    {
        return self::request("INSERT INTO `user` (`Nom`, `Email`, `Password`) VALUES ('" . $user->getName() . "', '" . $user->getEmail() . "', '" . $user->getPassword() . "')");
    }

    public static function getUserById($id)
    {
        return self::request("SELECT * FROM user WHERE ID=$id")->fetch(PDO::FETCH_ASSOC);
    }
    public static function getUserByMail($mail)
    {
        return self::request("SELECT * FROM user WHERE Email='$mail'")->fetch(PDO::FETCH_ASSOC);
    }


}