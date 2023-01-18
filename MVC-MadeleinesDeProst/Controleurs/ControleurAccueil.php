<?php

    final class ControleurAccueil {
        public function defautAction() {
            $test = new Accueil();
            // A_Vue[$var] c'est le contenu de ça quoi
            Vue::montrer("accueil/voir", array("accueil" => $test->affichageAccueil()));
        }

        public function testFormAction(Array $A_parametres = null, Array $A_postParams = null) {
            Vue::montrer("accueil/testform", array("formData" => $A_postParams));
        }
    }