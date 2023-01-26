<?php

final class ControleurAdmin
{
    public function defautAction()
    {
        // A_Vue[$var] c'est le contenu de ça quoi

        if (isset($_POST["supprimerUtilisateur"])) {
            $nom = $_POST['nom'];
            ModeleAdmin::supprimerUtilisateur($nom);
        }
        if (isset($_POST["desactiverUtilisateur"])) {
            $estActiver = $_POST["utilisateurEstActivee"];
            $nom = $_POST['nom'];
            if ($estActiver == 0) {
                ModeleAdmin::desactiveUtilisateur($nom);
            } else {
                ModeleAdmin::activeUtilisateur($nom);
            }

        }
        if (isset($_POST["supprimerAppreciation"])) {
            $id = $_POST['id'];
            ModeleAdmin::supprimerAppreciation($id);
        }
        if (isset($_POST["desactiverAppreciation"])) {
            $estActiver = $_POST["appreciationEstActivee"];
            $id = $_POST['id'];
            if ($estActiver == 0) {
                ModeleAdmin::desactiveAppreciation($id);
            } else {
                ModeleAdmin::activeAppreciation($id);
            }

        }
        if (isset($_POST["supprimerRecette"])) {
            $id = $_POST['id'];
            ModeleAdmin::supprimerRecette($id);
        }
        if (isset($_POST["ajouterRecette"])) {
            $nomRecette = $_POST['nomRecette'];
            $etapes = $_POST['etapes'];
            $temps = $_POST['temps'];
            $difficulte = $_POST['difficulte'];
            $cout = $_POST['cout'];
            $ingredients = $_POST['ingredients'];
            $ustensile = $_POST['ustensile'];
            $particularite = $_POST['particularite'];
            ModeleAdmin::ajouterRecette($nomRecette, $etapes, $temps, $difficulte, $cout, $ingredients, $ustensile, $particularite);
        }

        $arrayUtilisateur = ModeleAdmin::donneLesUtilisateurs();
        $arrayAppreciation = ModeleAdmin::donneLesAppreciations();
        $arrayRecette = ModeleAdmin::donneLesRecettes();

        Vue::montrer("admin/entete");
        Vue::montrer("admin/admin");
        Vue::montrer("admin/listeUtilisateur", array("utilisateur" => $arrayUtilisateur));
        Vue::montrer("admin/listeAppreciation", array("appreciation" => $arrayAppreciation));
        Vue::montrer("admin/listeRecette", array("recette" => $arrayRecette));

    }
}