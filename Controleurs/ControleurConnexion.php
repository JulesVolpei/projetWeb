<?php

final class ControleurConnexion
{

    public function defautAction()
    {
        if (isset($_POST["connexion"])){
            session_start();

            $nom = $_POST["nom"];
            $_SESSION['mdp'] = $_POST["mdp"];
            $_SESSION['connecte'] = false;

            if (!ModeleConnexion::verifieNom($nom)) {
                echo "<script> alert(\"Le nom entré n'est pas valide\"); </script>";
            } else {
                $_SESSION['nom'] = $nom;
                $mdp = ModeleConnexion::getMotDePasse();
                if (password_verify($_SESSION["mdp"], $mdp)) {
                    echo "<script> alert(\"Vous êtes connecté!\"); </script>";
                    $_SESSION["connecte"] = true;
                    if (ModeleConnexion::getAdmin() == 1) {
                        $_SESSION["Admin"] = true;
                    } else {
                        $_SESSION["Admin"] = false;
                    }
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