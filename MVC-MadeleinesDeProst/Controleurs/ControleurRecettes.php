<?php

final class ControleurRecettes {
    public function defautAction() {
        $barreDeRecherche = new Recherche();
        Vue::montrer("pageRecettes/entete");
        Vue::montrer("pageRecettes/hautDeLaPage", array("barreDeRecherche" => $barreDeRecherche->rechercheRecette()));
        self::afficheToutesLesRecettesAction();
    }

    public function afficheToutesLesRecettesAction() {
        $toutesLesRecettes = array();
        $resultat = mysqli_query(BaseDeDonnes::connexion(), "SELECT * FROM RECETTE");
        while ($row = mysqli_fetch_assoc($resultat)) {
            array_push($toutesLesRecettes, $row);
        }
        Vue::montrer("pageRecettes/afficherLesRecettes", array("recettes" => $toutesLesRecettes));
    }

    public function afficheLaRecetteCherchee() {
        // Récupérer la recette (je sais pas comment ??)
        $test = array();
        $resultat = mysqli_query(BaseDeDonnes::connexion(), "SELECT * FROM RECETTE WHERE NOM = $/*Nom de la recette */");

    }
}