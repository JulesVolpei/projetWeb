<?php
class ModeleAdmin
{
    private static $listeUtilisateur = array();
    private static $listeAppreciation = array();
    private static $listeRecette = array();


    public static function donneLesUtilisateurs()
    {
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

    public static function donneLesAppreciations()
    {
        if (self::$listeAppreciation == null) {
            $query = "SELECT * FROM APPRECIATION";
            $resultat = mysqli_query(BaseDeDonnes::connexion(), $query);
            // On parcourt le résultat de notre requête
            while ($row = mysqli_fetch_assoc($resultat)) {
                // On ajoute un utilisateur à notre tableau
                array_push(self::$listeAppreciation, $row);
            }
        }
        return self::$listeAppreciation;
    }

    public static function donneLesRecettes()
    {
        if (self::$listeRecette == null) {
            $query = "SELECT * FROM RECETTE";
            $resultat = mysqli_query(BaseDeDonnes::connexion(), $query);
            // On parcourt le résultat de notre requête
            while ($row = mysqli_fetch_assoc($resultat)) {
                // On ajoute un utilisateur à notre tableau
                array_push(self::$listeRecette, $row);
            }
        }
        return self::$listeRecette;
    }

    public static function supprimerUtilisateur($nom)
    {
        $query = mysqli_prepare(BaseDeDonnes::connexion(), "DELETE FROM `UTILISATEUR` WHERE `UTILISATEUR`.`NOM` = (?);");
        mysqli_stmt_bind_param($query, "s", $nom);
        mysqli_execute($query);
        mysqli_stmt_close($query);
    }

    public static function desactiveUtilisateur($nom)
    {
        $query = "Update UTILISATEUR SET ACTIVEE = 1 Where NOM = \"" . $nom . "\";";
        mysqli_query(BaseDeDonnes::connexion(), $query);
    }

    public static function activeUtilisateur($nom)
    {
        $query = "Update UTILISATEUR SET ACTIVEE = 0 Where NOM = \"" . $nom . "\";";
        mysqli_query(BaseDeDonnes::connexion(), $query);
    }

    public static function supprimerAppreciation($id)
    {
        $query = mysqli_prepare(BaseDeDonnes::connexion(), "DELETE FROM `APPRECIATION` WHERE `ID` = (?);");
        mysqli_stmt_bind_param($query, "s", $id);
        mysqli_execute($query);
        mysqli_stmt_close($query);
    }

    public static function desactiveAppreciation($id)
    {
        $query = "Update APPRECIATION SET ACTIVEE = 1 Where ID = \"" . $id . "\";";
        mysqli_query(BaseDeDonnes::connexion(), $query);
    }

    public static function activeAppreciation($id)
    {
        $query = "Update APPRECIATION SET ACTIVEE = 0 Where ID = \"" . $id . "\";";
        mysqli_query(BaseDeDonnes::connexion(), $query);
    }

    public static function supprimerRecette($id)
    {
        $query = mysqli_prepare(BaseDeDonnes::connexion(), "DELETE FROM `RECETTE` WHERE `RECETTE`.`ID` = (?);");
        mysqli_stmt_bind_param($query, "s", $id);
        mysqli_execute($query);
        mysqli_stmt_close($query);
    }

    public static function ajouterRecette($nomRecette, $etapes, $temps, $difficulte, $cout, $ingredients, $ustensile, $particularite)
    {
        //Ajouter un ID a la recette qui soit le dernier id de la base de données + 1
        $queryId = mysqli_query(BaseDeDonnes::connexion(), "SELECT max(ID) FROM RECETTE;");
        $idRecette = mysqli_fetch_assoc($queryId);
        $idRecette = $idRecette["max(ID)"] + 1;

        //Insérer les données de la table RECETTE
        $inserer = "INSERT INTO RECETTE (ID, NOM, ETAPES, TEMPS, INGREDIENTS, DIFFICULTE, PARTICULARITE, USTENSILE, COUT)
            VALUES ('$idRecette', '$nomRecette', '$etapes', '$temps', '$ingredients', '$difficulte', '$particularite', '$ustensile', '$cout')";
        mysqli_query(BaseDeDonnes::connexion(), $inserer);
    }

    public static function modifierRecette($idRecette, $nomRecette, $etapes, $temps, $difficulte, $cout, $ingredients, $ustensile, $particularite)
    {
        $modification = "UPDATE `RECETTE` SET `NOM` = '" . $nomRecette . "' , `ETAPES` = '" . $etapes . "' , `TEMPS` = '" . $temps .
            "', `INGREDIENTS` = '" . $ingredients . "' , `DIFFICULTE` = '" . $difficulte . "' , `PARTICULARITE` = '" . $particularite .
            "' , `USTENSILE` = '" . $ustensile . "' , `COUT` = '" . $cout .
            "' WHERE `RECETTE`.`ID` = " . $idRecette . ";";
        mysqli_query(BaseDeDonnes::connexion(), $modification);
    }
}