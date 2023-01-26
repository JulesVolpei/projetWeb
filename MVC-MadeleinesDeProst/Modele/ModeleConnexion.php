<?php
class ModeleConnexion
{
    public static function verifieNom($nom) {
        $query = " SELECT * FROM `UTILISATEUR` WHERE NOM = '".$nom."'";
        $user = BaseDeDonnes::connexion() -> query($query);
        if ($user -> num_rows > 0){
            return true;
        }
        return false;
    }
    public static function getMotDePasse(){
        $queryMDP = mysqli_prepare(BaseDeDonnes::connexion(), "SELECT MOT_DE_PASSE FROM `UTILISATEUR` WHERE NOM = ?;");
        mysqli_stmt_bind_param($queryMDP, "s", $_SESSION["nom"]);
        mysqli_execute($queryMDP);
        mysqli_stmt_bind_result($queryMDP, $mdp);
        mysqli_stmt_fetch($queryMDP);
        mysqli_stmt_close($queryMDP);
        return $mdp;
    }
}