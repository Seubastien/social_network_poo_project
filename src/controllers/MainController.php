<?php

class MainController extends Controller
{
    public function index()
    {
        if (isset ($_POST["logOut"])) {
            session_destroy();
            $this->redirect("/login");
        }


        // $users = User::getUsers();

        if (isset ($_SESSION["user"])) {

            if (isset ($_POST["SubPost"])) {
                echo "Votre post à bien été enregistré";
                if (!empty ($_POST["title"]) && !empty ($_POST["content"])) {

                    $post = new Post($_POST["title"], $_POST["content"], $_SESSION['user']);
                    $post->insertIntoDb($post);
                    $this->redirect("/");


                } else {
                    echo "Vueillez remplir les champs obligatoirement";
                }

            }
        } else {
            $this->redirect("/login");
        }
        require (__DIR__ . "/../../views/main.php");
    }


}
