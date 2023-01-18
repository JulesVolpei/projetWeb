<?php
function connection(){
            $nomDuServeur = "mysql-madeleinedeprost.alwaysdata.net";
            $nomUtilisateur = "295287";
            $motDePasse = "Madeleine!13Prost";
            $baseDeDonnee = "madeleinedeprost_BD";

            $connexion = new mysqli($nomDuServeur, $nomUtilisateur, $motDePasse, $baseDeDonnee);

            if ($connexion -> error){
                die("erreur de connection" . $connexion -> error);
            }
            else{
                return $connexion;
            }
     }

?>