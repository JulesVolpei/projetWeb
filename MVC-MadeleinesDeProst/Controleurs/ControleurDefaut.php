<?php

    final class ControleurDefaut {
        public function defautAction() {
            // A_Vue[$var] c'est le contenu de ça quoi
            Vue::montrer("accueil/entete");
            Vue::montrer("accueil/pageaccueil");
            $arrayRecettes = Recettes::donneLesRecettes();
            Vue::montrer("accueil/imagesRecettes", array("images" => $arrayRecettes));
            Vue::montrer("accueil/recettesAleatoires", array("recettes" => $arrayRecettes));
        }

        public function testFormAction(Array $A_parametres = null, Array $A_postParams = null) {
            Vue::montrer("accueil/testform", array("formData" => $A_postParams));
        }
    }