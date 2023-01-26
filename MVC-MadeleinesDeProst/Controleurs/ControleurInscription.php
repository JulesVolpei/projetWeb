<?php

final class ControleurInscription
{

    public function defautAction()
    {
        if(isset($_POST["validerInscription"])){

            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
            $mdpConfirm = $_POST['mdpconfirm'];

            //recuperation d'infos sur l'image de profile
            $nomFichier = basename($_FILES["imgAjout"]["name"]);                   //on recupere le nom de l'image (exemple.png)
            $typeImage = strtolower(pathinfo($nomFichier, PATHINFO_EXTENSION));    //on recupere son type (png, jpg, gif, ...)
            $nomTmpImage = $_FILES["imgAjout"]["tmp_name"];                        //on recupere le chemin temporaire ou se trouve l'image revoyé par la method post

            $cheminFichier = $this->traitementImage($nomFichier, $typeImage, $nomTmpImage);

            $this->verificationMotDePasse($mdp, $mdpConfirm);

            ModeleInscription::inscription($nom, $email, $mdp, $cheminFichier);

            Vue::montrer("inscription/inscription"); //amelioration possible : lancer ControleurConnexion
        } 
        else {
            Vue::montrer("inscription/inscription");
        }
    }



    public function verificationMotDePasse($mdp, $mdpConfirm){
        $maj = false;
        $chiffre = false;
        $carac_spécial =false;

        for ($i = 0; $i<strlen($mdp);$i++){
            $carac = $mdp[$i];
            if(ctype_upper($carac)){
                $maj = true;
            }
            if(!ctype_alnum($carac)){
                $carac_spécial = true;
            }
            if(ctype_digit($carac)){
                $chiffre = true;
            }
        }

        if($mdp != $mdpConfirm){
            echo "<script> alert('Les mots de passe sont differents'); </script>";
        }

        if(strlen($mdp)< 8){
            echo "<script> alert('Le mot de passe est trop petit'); </script>";
        }

        if (!$maj) {
            echo "<script> alert('Le mot de passe doit avoir au moins une majuscule'); </script>";
        }
    
        if (!$chiffre) {
            echo "<script> alert('Le mot de passe doit avoir au moins un chiffre'); </script>";
        }
    
        if (!$carac_spécial) {
            echo "<script> alert('Le mot de passe doit avoir au moins un caractère spécial'); </script>";
        }
        
        if (strlen($mdp) > 8 && $maj && $chiffre && $carac_spécial && ($mdp === $mdpConfirm)) {
            $hash = password_hash($mdp, PASSWORD_BCRYPT);
            
            //modele inscription
        }

        //relancer le formulaire si la validation n'est pas passer
    }
    

    public function traitementImage($nomFichier, $typeImage, $nomTmpImage){
        
        if ($typeImage != "png" && $typeImage != "jpeg" && $typeImage != "jpg") { //on verifie que le type de l'image soit valide
            echo "Le fichier doit etre un JPG, JPEG ou PNG.";
        } 
        else {
            if (is_uploaded_file($nomTmpImage)) {                              //on verifie que l'image ait bien été uploadé
    
                move_uploaded_file($nomTmpImage, "image/$nomFichier");         //deplace l'image dans le dossier dedié sur le serveur
    
                $cheminFichier = "image/" . $nomFichier;                       //chemin de l'image dans le serveur   
                $nouvCheminFichier = "image/" . pathinfo($nomFichier, PATHINFO_FILENAME) . ".webp";     //nouveau chemin de l'image en webp
                $this->transformationEnWebp($cheminFichier, $nouvCheminFichier);
            } else {
                echo "Une erreur est survenue pendant l'upload de l'image";
            }
            return $nouvCheminFichier;
        }
        return "erreur";
    }
    
    public function transformationEnWebp($cheminFichier, $nouvCheminFichier){
    
        $image = imagecreatefromstring(file_get_contents($cheminFichier));
        imagewebp($image, $nouvCheminFichier, 75);
        imagedestroy($image);
    
    }

}