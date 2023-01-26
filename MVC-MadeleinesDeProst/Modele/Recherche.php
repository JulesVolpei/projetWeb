<?php
class Recherche
{
    public static function rechercheRecette(){
        require 'BaseDeDonnes.php';
        $pdo = BaseDeDonnes::connexion();
        $listeNomRecette = $pdo->query("SELECT NOM FROM RECETTE");
        $texteRecherche = $_POST['recherche'];
        $resultat = [];
        foreach($listeNomRecette as $row) {
            $nomRecettePossible = strtolower($row["NOM"]);
            $pourcentage = 0;
            similar_text($texteRecherche,$nomRecettePossible,$pourcentage);
            if ($pourcentage == 100){
                $resultat = [$texteRecherche];
                break;
            }elseif($pourcentage>65){
                array_unshift($resultat,$nomRecettePossible);
            }elseif($pourcentage>35){
                array_push($resultat,$nomRecettePossible);
            }
        }
        foreach($resultat as $row){
            echo "<p class='recettePossible'> ".$row." </p><br>";
        }   
    }
}          
?> 