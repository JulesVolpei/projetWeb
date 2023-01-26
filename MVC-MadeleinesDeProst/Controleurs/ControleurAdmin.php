<?php

    final class ControleurAdmin {
        public function defautAction() {
            // A_Vue[$var] c'est le contenu de ça quoi

            if (isset($_POST["supprimerUtilisateur"])) {
                $nom = $_POST['nom'];
                ModeleAdmin::supprimerUtilisateur($nom);
            }
            if(isset($_POST["desactiverUtilisateur"])){
                $estActiver = $_POST["utilisateurEstActivee"];
                $nom = $_POST['nom'];
                if ($estActiver == 0){
                    ModeleAdmin::desactiveUtilisateur($nom);
                } else {
                    ModeleAdmin::activeUtilisateur($nom);
                }
                
            }

            $arrayUtilisateur = ModeleAdmin::donneLesUtilisateurs();
            $arrayAppreciation = ModeleAdmin::donneLesAppreciations();

            Vue::montrer("admin/entete");
            Vue::montrer("admin/admin");
            Vue::montrer("admin/listeUtilisateur", array("utilisateur" => $arrayUtilisateur));
            Vue::montrer("admin/listeAppreciation", array("appreciation" => $arrayAppreciation));
        }
    }