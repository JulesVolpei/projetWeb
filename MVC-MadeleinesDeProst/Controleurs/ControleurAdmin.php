<?php

    final class ControleurAdmin {
        public function defautAction() {
            // A_Vue[$var] c'est le contenu de ça quoi

            if (isset($_POST["supprimerUtilisateur"])) {
                $nom = $_POST['nom'];
                ModeleAdmin::supprimerUtilisateur($nom);
            }

            $arrayUtilisateur = ModeleAdmin::donneLesUtilisateurs();

            Vue::montrer("admin/entete");
            Vue::montrer("admin/admin.php");
            Vue::montrer("accueil/listeUtilisateur", array("utilisateur" => $arrayUtilisateur));
            //Vue::montrer("accueil/recettesAleatoires");
        }
    }