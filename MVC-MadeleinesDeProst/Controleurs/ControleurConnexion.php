<?php

final class ControleurConnexion
{

    public function defautAction()
    {
        if (isset($_POST["connexion"])){
            session_start();

            $_SESSION['nom'] = $_POST["nom"];
            $_SESSION['mdp'] = $_POST["mdp"];
            //echo "<script> alert(\"" . $_SESSION['nom']. false . "\");</script>";
            $_SESSION['connecte'] = false;

            if (!ModeleConnexion::verifieNom($_SESSION['nom'])) {
                echo "<script> alert(\"Le nom entré n'est pas valide\"); </script>";
            } else {
                $mdp = ModeleConnexion::getMotDePasse();
                if (password_verify($_SESSION["mdp"], $mdp)) {
                    echo "<script> alert(\"Vous êtes connecté!\"); </script>";
                    $_SESSION["connecte"] = true;
                } else {
                    echo "<script> alert(\"Mauvais mot de passe\"); </script>";
                }
            }
            Vue::montrer("Inscription/connexion");
        } else {
            Vue::montrer("Inscription/connexion");
        }
    }
}