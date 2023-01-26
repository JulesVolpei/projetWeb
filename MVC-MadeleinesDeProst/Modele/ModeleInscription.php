<?php
class ModeleInscription
{

    public static function inscription($nom, $email, $mdp, $cheminFichier)
    {
        $dateInscription = date("Y-m-d");

        $query = mysqli_prepare(BaseDeDonnes::connexion(), "INSERT INTO UTILISATEUR(MOT_DE_PASSE, IMAGE, NOM, DATE_PREM_CO, DATE_DER_CO, EMAIL) VALUES (?, ?, ?, ?, ?, ?);");
        mysqli_stmt_bind_param($query, "ssssss", $mdp, $cheminFichier, $nom, $dateInscription, $dateInscription, $email);
        mysqli_execute($query);
        mysqli_stmt_close($query);
    }

    public static function verifyName($nom){
        $result = null;
        $queryNom = mysqli_prepare(BaseDeDonnes::connexion(), "Select NOM FROM UTILISATEUR Where NOM = ?");
        mysqli_stmt_bind_param($queryNom, "s", $nom);
        mysqli_execute($queryNom);
        mysqli_stmt_bind_result($queryNom, $result);
        mysqli_stmt_fetch($queryNom);
        mysqli_stmt_close($queryNom);

        return $result;
    }

}