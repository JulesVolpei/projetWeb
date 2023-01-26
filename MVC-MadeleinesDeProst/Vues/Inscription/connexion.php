<?php 
    echo '<!DOCTYPE html>
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
    
            <a href="Accueil">
                <h1>Les Madeleines de Prost</h1>
            </a>
            <nav id="navbar" class="nav">
                <a id="onglet" href="Recettes"> <!-- A changer !!! -->
                    <button>
                        Recettes
                    </button>
                </a>
                <a id="onglet" href="Inscription"> <!-- A changer !!! -->
                    <button>
                        Connexion <br> Inscription
                    </button>
                </a>
                <a class="icon" onclick="myFunction()">&#9776;</a>
            </nav>
    
        </header>
        <section>
            <form action="Connexion" method="post">
                <span class="titre"> Connexion </span>
                <input type="text" name="nom" placeholder="Entrez votre nom">
                <input type="password" name="mdp" placeholder="Entrez votre mot de passe">
                <input type="submit" name="connexion" class="connexion" value="Se connecter">
                <span class="text">Pas de compte ? 
                    <a href="Inscription" class="texte inscription-lien">Inscrivez-vous</a>
                </span>
                <a href="MotDePasseOublie" class="texte motDePasseOublie">Mot de passe oublié </a>
            <form>
        </section>    
        <script src="js/js.js"></script>
    </body>
    </html>';