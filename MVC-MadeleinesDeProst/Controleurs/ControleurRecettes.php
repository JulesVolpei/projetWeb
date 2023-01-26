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
}