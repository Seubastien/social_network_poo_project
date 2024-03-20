<?php
class User extends UserRepository
{
    private $id;
    private $name;
    private $email;
    private $password;

    //Création de notre Utilisateur
    public function __construct($name, $email, $password, $id = 0, )
    {
        $this->id = $id;
        $this->setName($name);
        $this->setEmail($email);
        $this->setPassword($password);
    }
    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        if (preg_match("/^[A-z]+$/", $name))
            $this->name = htmlspecialchars($name);
        else
            throw new Exception("Mauvais nom");
    }
    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        if (preg_match("/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/", $email))
        $this->email = htmlspecialchars($email);
    else throw new Exception("Mauvais email");
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        if (preg_match("/^[A-z0-9\-\!]{3,}$/", $password))
            $this->password = htmlspecialchars($password);
        else
            throw new Exception("Mauvais mot de passe");
    }
    public function getPassword()
    {
        return $this->password;
    }
}
