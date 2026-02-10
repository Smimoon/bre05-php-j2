<?php
    if($_POST["password"] === $_POST["password-confirm"]) {
        echo "Vérification des mots de passe : OK <br>";
    }
    else {
        echo "Vérification des mots de passe : NOK <br>";
    }
    $email = $_POST["email"];
    $password = $_POST["password"];
    if(isset($_POST["newsletter"])){
        echo "Email : $email | Mot de passe : $password | Newsletter : Oui";
    }
    else{
        echo "Email : $email | Mot de passe : $password | Newsletter : Non";
    }

?>