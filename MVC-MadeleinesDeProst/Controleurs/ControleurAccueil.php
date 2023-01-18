<?php

    final class ControleurAccueil {
        public function defautAction() {
            // A_Vue[$var] c'est le contenu de ça quoi
            Vue::montrer("accueil/pageaccueil");
        }

        public function redirectionAction() {
            // faire le truc de redirection
        }

        public function testFormAction(Array $A_parametres = null, Array $A_postParams = null) {
            Vue::montrer("accueil/testform", array("formData" => $A_postParams));
        }
    }