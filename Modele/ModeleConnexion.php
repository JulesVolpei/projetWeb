<?php
class ModeleConnexion
{
    public static function verifieNom($nom) {
        $queryNom = "SELECT * FROM `UTILISATEUR` WHERE NOM = '".$nom."'";
        $user = BaseDeDonnes::connexion() -> query($queryNom);
        if ($user -> num_rows > 0){
            return true;
        }
        return false;
    }
    public static function getMotDePasse(){
        $queryMDP = "SELECT MOT_DE_PASSE FROM `UTILISATEUR` WHERE NOM = '".$_SESSION['nom']."'";
        $mdp = BaseDeDonnes::connexion() -> query($queryMDP) ->fetch_assoc();    
        return current($mdp);
    }
    public static function getAdmin(){
        $queryAdmin = "SELECT ADMIN FROM `UTILISATEUR` WHERE NOM = '".$_SESSION['nom']."'";
        $admin = BaseDeDonnes::connexion() -> query($queryAdmin) ->fetch_assoc();    
        return current($admin);
    }
}