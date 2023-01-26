<?php
    echo'<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/accueil.css">
        <link rel="stylesheet" href="css/formulaire.css">
        <link rel="shortcut icon" href="image/bakery.png" type="image/x-icon">
        <!-- <a href="https://www.flaticon.com/free-icons/pastry" title="pastry icons">Pastry icons created by Freepik - Flaticon</a> -->
        <title>Inscription</title>
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
                <a id="onglet" href="connexion.php"> <!-- A changer !!! -->
                    <button>
                        Connexion <br> Inscription
                    </button>
                </a>
                <a class="icon" onclick="myFunction()">&#9776;</a>
            </nav>
    
        </header>
        <section>
            <form action="Controleurs/ControleurInscription.php" method="post" enctype="multipart/form-data">
                <span class="titre"> Inscription </span>
                <input type="text" name="nom" placeholder="Entrez votre nom">
                <input type="file" name="imgAjout" id="imgAjout" placeholder="Choissisez votre photo de profil">
                <input type="text" name="email" placeholder="Entrez votre email">
                <input type="text" name="mdp" placeholder="Entrez votre mot de passe">
                <input type="text" name="mdpconfirm" placeholder="Confirmez votre mot de passe">
                <input type="submit" name="validerInscription" class="connexion" value="S\'inscrire">
                <span class="text">Pas de compte ?
                    <a href="Controleurs/ControleurConnexion.php" class="texte inscription-lien">Connectez-vous</a>
                </span>
                <!--<a href="motDePasseOublie.html" class="texte motDePasseOublie">Mot de passe oublié </a>-->
            <form>';
                //ModeleInscription::inscription($nom);
            echo '
        </section>
        <script src="js/js.js"></script>
    </body>
    </html>';