<?php
echo '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link rel="stylesheet" href="css/accueil.css">
                            <link rel="shortcut icon" href="image/bakery.png" type="image/x-icon">
                            <!-- <a href="https://www.flaticon.com/free-icons/pastry" title="pastry icons">Pastry icons created by Freepik - Flaticon</a> -->
                            <title>Accueil</title>
                        </head>
                        <body>
                            
                            <header>
                        
                                <a href="index.html">
                                    <h1>Les Madeleines de Prost</h1>
                                </a>
                                <div id="barreRecherche">
                                    <form method="post">
                                        <input type="text" placeholder="Rechercher" name="recherche">
                                    </form>
                                ';
                                Recherche::rechercheRecette();
                                echo '
                                </div>
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
                                    <a class="icon">&#9776;</a>
                                </nav>
                        
                            </header>
                            
                            <section class="recettes">
                        
                                <article class="img-recette">
                                    <!-- Image à modifier avec image BD -->
                                    <img src="image/madeleines_de_mamie-970x1024.jpg" alt="img recette 1">
                                    <img src="image/madeleines_de_mamie-970x1024.jpg" alt="img recette 2">
                                    <img src="image/madeleines_de_mamie-970x1024.jpg" alt="img recette 3">
                                </article>
                        
                                <article class="recette">
                                    <div>
                                        <h3>';
    echo                                Recettes::troisNomsRecettes()[0];
    echo'                       </h3>
                                        <ul>
                                            <li>';
    echo'                                Difficulté : ' . Recettes::troisDifficultesRecettes()[0];
    echo'                           </li>
                                            <li>';
    echo'                                Coût : ' . Recettes::troisCoutsRecettes()[0];
    echo'                            </li>
                                            <li>';
    echo'                                Particularité : ' . Recettes::troisParticularitesRecettes()[0];
    echo'                            </li>
                                        </ul>
                                        <span class="note"></span>
                                    </div>
                                    <div>
                                        <h3>';
    echo                                Recettes::troisNomsRecettes()[1];
    echo'                        </h3>
                                        <ul>
                                            <li>';
    echo'                                Difficulté : ' . Recettes::troisDifficultesRecettes()[1];
    echo'                            </li>
                                            <li>';
    echo'                                Coût : ' . Recettes::troisCoutsRecettes()[1];
    echo'                            </li>
                                            <li>';
    echo'                                Particularité : ' . Recettes::troisParticularitesRecettes()[1];
    echo'                            </li>
                                        </ul>
                                        <span class="note"></span>
                                    </div>
                                    <div>
                                        <h3>';
    echo                                Recettes::troisNomsRecettes()[2];
    echo'                        </h3>
                                        <ul>
                                            <li>';
    echo'                                Difficulté : ' . Recettes::troisDifficultesRecettes()[2];
    echo'                            </li>
                                            <li>';
    echo'                                Coût : ' . Recettes::troisCoutsRecettes()[2];
    echo'                            </li>
                                            <li>';
    echo'                                Particularité : ' . Recettes::troisParticularitesRecettes()[2];
    echo'                            </li>
                                        </ul>
                                        <span class="note"></span>
                                    </div>
                                </article>
                                
                            </section>
                        
                            <script src="js/js.js"></script>
                        </body>
                   </html>';
