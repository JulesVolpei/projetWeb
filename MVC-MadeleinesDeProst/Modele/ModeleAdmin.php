<?php
class ModeleAdmin{
    private static $listeUtilisateur = array();
    private static $listeAppreciation = array();


    public static function donneLesUtilisateurs(){
        if (self::$listeUtilisateur == null) {
            $query = "SELECT NOM, IDENTIFIANT, ACTIVEE FROM UTILISATEUR";
            $resultat = mysqli_query(BaseDeDonnes::connexion(), $query);
            // On parcourt le résultat de notre requête
            while ($row = mysqli_fetch_assoc($resultat)) {
                // On ajoute un utilisateur à notre tableau
                array_push(self::$listeUtilisateur, $row);
            }
        }
        return self::$troisRecettes;
    }

    public static function supprimerUtilisateur($nom){
        $query = mysqli_prepare(BaseDeDonnes::connexion(), "DELETE FROM `UTILISATEUR` WHERE `UTILISATEUR`.`NOM` = (?)';");
        mysqli_stmt_bind_param($query, "s", $nom);
        mysqli_execute($query);
        mysqli_stmt_close($query);

    }
}