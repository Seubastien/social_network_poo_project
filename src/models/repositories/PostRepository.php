<?php

abstract class PostRepository extends Db
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

    public static function insertIntoDb(Post $post)
    {
        return self::request("INSERT INTO `post` (`Title`, `Content`, `Author`) VALUES ('" . $post->getTitle() . "', '" . $post->getContent() . "', '" . $post->getAuthor() . "')");
    }
}