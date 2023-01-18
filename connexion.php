<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/accueil.css">
    <link rel="stylesheet" href="css/formulaire.css">
    <link rel="shortcut icon" href="image/bakery.png" type="image/x-icon">
    <!-- <a href="https://www.flaticon.com/free-icons/pastry" title="pastry icons">Pastry icons created by Freepik - Flaticon</a> -->
    <title>Connexion</title>
</head>
<body>
    
    <header>

        <a href="index.html">
            <h1>Les Madeleines de Prost</h1>
        </a>
        <nav id="navbar" class="nav">
            <a id="onglet" href="recette.html"> <!-- A changer !!! -->
                <button>
                    Recettes
                </button>
            </a>
            <a id="onglet" href="connexion.html"> <!-- A changer !!! -->
                <button>
                    Connexion <br> Inscription
                </button>
            </a>
            <a class="icon" onclick="myFunction()">&#9776;</a>
        </nav>

    </header>
    <section>
        <form action="connexion.php" method="post">
            <span class="titre"> Connexion </span>
            <input type="text" name="nom" placeholder="Entrez votre nom">
            <input type="text" name="mdp" placeholder="Entrez votre mot de passe">
            <input type="submit" name="connexion" class="connexion" value="Se connecter">
            <span class="text">Pas de compte ?
                <a href="inscription.html" class="texte inscription-lien">Inscrivez-vous</a>
            </span>
            <a href="motDePasseOublie.html" class="texte motDePasseOublie">Mot de passe oublié </a>
        <form>
    </section>
    <?php 



        include "baseDeDonnee.php";
        $connexion = connection();

        if (isset($_POST["connexion"])){

            $nom = $_POST["nom"];
            $mdp = $_POST["mdp"];

            $sql = "SELECT * FROM 'UTILISATEUR' WHERE IDENTIFIANT = '" . $nom . "' ";
            $utilisateur = $connexion -> query($sql);

            if($utilisateur -> num_rows > 0){
                while($ligne = $utilisateur -> fetch_assoc()){
                    if ($utilisateur["MOT_DE_PASSE"] === $mdp){
                        echo "<script> alert('Vous etes connectes'); </script>";
                    }
                    
                }
            }else{
                echo "<script> alert('ca marche pas'); </script>";
            }

        }
    ?>

    <script src="js/js.js"></script>
</body>
</html>