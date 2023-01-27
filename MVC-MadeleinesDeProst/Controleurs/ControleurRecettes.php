<?php

final class ControleurRecettes {
    public function defautAction() {
        /*
         * if ($_POST['blabla'] != null) { self::afficheRecetteBarreDeRechercheAction() }; else { Ce qu'il y a marqué pour l'instant
         */
        Vue::montrer("pageRecettes/entete");
        Vue::montrer("pageRecettes/hautDeLaPage");
        self::afficheToutesLesRecettesAction();
    }

    public function afficheToutesLesRecettesAction() {
        $instanceRecettes = new Recettes();
        Vue::montrer("pageRecettes/afficherLesRecettes", array("recettes" => $instanceRecettes->donneToutesLesRecettes()));
    }

    public function afficheUneRecetteAction() {
//        if (isset($_POST['nomDeNotrePost'])) {
//            $nomRecette = $_POST['NomDeNotrePost'];
//
//        }
        $test = new Recettes();
        Vue::montrer("pageRecettes/hautDeLaPage");
        Vue::montrer("pageRecettes/entetePourUneRecette");
        Vue::montrer("pageRecettes/afficheUneRecette", array("recette" => Recettes::donneLesRecettes()));
        Vue::montrer("pageRecettes/afficheIngredientUneRecette", array("ingredient" => $test->donneIngrédientRecette(Recettes::donneLesRecettes()[0]["ID"])));
        Vue::montrer("pageRecettes/afficheEtape", array("preparation" => $test->donnePreparationRecette(Recettes::donneLesRecettes()[0]["ID"])));
    }
}