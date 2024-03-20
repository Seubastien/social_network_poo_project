<?php

class RegisterController extends Controller
{
    public function index()
    {
        
            if (isset ($_POST["submit"])) {
                $user = new User($_POST["name"], $_POST["email"], $_POST["password"]);
                $user->insertIntoDb($user);
                $this->redirect("/");
                
            }

     
        require (__DIR__ . "/../../views/register.php");
    }

}
