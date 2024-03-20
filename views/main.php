<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Social NetWork</title>
</head>

<body>
    <h1>
        Social NetWork
    </h1>
    <div>
        <a href="">Inscription</a>
        <a href="">Login</a>
        <form action="" method="POST">
        <button type = "submit" name="logOut">Log out</button>
        </form>
    </div>

    

    <div>
        <form action="/" method="POST">
            <input type="text" name="title" placeholder="Titre">
            <textarea cols="30" rows="10" name="content" placeholder="Entrez votre message"></textarea>
            <button type="submit" name="SubPost">Poster</button>
        </form>
    </div>
  
        <?php
        

        echo "Bienvenue " . $_SESSION['user'] . "<br>";
        
        
        ?>
   
</body>

</html>