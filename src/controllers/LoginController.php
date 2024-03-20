<?php
session_start();
class LoginController extends Controller
{

    public function index()
    {
        if (isset ($_POST["log"])) {
            if (!empty ($_POST["email"]) && !empty ($_POST["password"])) {
                $user = User::getUserByMail($_POST["email"]);
                if (count($user) > 0) {
                    if ($user['Password'] === $_POST["password"]) {
                        $_SESSION['user'] = $user["ID"];
                        $this->redirect("/");
                        

                    } else {
                        echo "mot de passe incorret";
                    }
                }else {echo "Mauvais identifiant";}//soulever plutot des exception throw new exception pour pouvoir rentrer dans le catch

            } else {
                echo "Veuillez remplir les deux champs";
            }

        }
        require (__DIR__ . "/../../views/login.php");
    }
}