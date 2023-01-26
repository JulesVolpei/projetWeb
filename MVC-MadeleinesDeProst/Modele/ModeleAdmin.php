<?php
class ModeleAdmin{
    private static $listeUtilisateur = array();
    private static $listeAppreciation = array();


    public static function donneLesUtilisateurs(){
        if (self::$listeUtilisateur == null) {
            $query = "SELECT NOM, ACTIVEE FROM UTILISATEUR";
            $resultat = mysqli_query(BaseDeDonnes::connexion(), $query);
            // On parcourt le résultat de notre requête
            while ($row = mysqli_fetch_assoc($resultat)) {
                // On ajoute un utilisateur à notre tableau
                array_push(self::$listeUtilisateur, $row);
            }
        }
        return self::$listeUtilisateur;
    }

    public static function donneLesAppreciations(){
        if (self::$listeAppreciation == null) {
            $query = "SELECT NOM_AUTEUR, COMMENTAIRE, ACTIVEE FROM APPRECIATION";
            $resultat = mysqli_query(BaseDeDonnes::connexion(), $query);
            // On parcourt le résultat de notre requête
            while ($row = mysqli_fetch_assoc($resultat)) {
                // On ajoute un utilisateur à notre tableau
                array_push(self::$listeAppreciation, $row);
            }
        }
        return self::$listeAppreciation;
    }

    public static function supprimerUtilisateur($nom){
        $query = mysqli_prepare(BaseDeDonnes::connexion(), "DELETE FROM `UTILISATEUR` WHERE `UTILISATEUR`.`NOM` = (?);");
        mysqli_stmt_bind_param($query, "s", $nom);
        mysqli_execute($query);
        mysqli_stmt_close($query);
    }

    public static function desactiveUtilisateur($nom){
        $query = "Update UTILISATEUR SET ACTIVEE = 1 Where NOM = \"" . $nom . "\";";
        mysqli_query(BaseDeDonnes::connexion(), $query);
    }
    
    public static function activeUtilisateur($nom){
        $query = "Update UTILISATEUR SET ACTIVEE = 0 Where NOM = \"" . $nom . "\";";
        mysqli_query(BaseDeDonnes::connexion(), $query);
    }
}