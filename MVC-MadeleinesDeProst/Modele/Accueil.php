<?php
    class Accueil {

        public function affichageAccueil() {
            $test = array();
            foreach (BaseDeDonnes::donneLesRecettes() as $recette) {
                array_push($test, $recette);
            }
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
                                        // Titre
                                        echo BaseDeDonnes::troisNomsRecettes($test)[0];
            echo'                       </h3>
                                    <ul>
                                        <li>';
            echo'                                Difficulté : ' . BaseDeDonnes::troisDifficultesRecettes($test)[0];
            echo'                           </li>
                                        <li>';
            echo'                                Coût : ' . BaseDeDonnes::troisCoutsRecettes($test)[0];
            echo'                            </li>
                                        <li>';
            echo'                                Particularité : ' . BaseDeDonnes::troisParticularitesRecettes($test)[0];
            echo'                            </li>
                                    </ul>
                                    <span class="note"></span>
                                </div>
                                <div>
                                    <h3>';
                                        echo BaseDeDonnes::troisNomsRecettes($test)[1];
            echo'                        </h3>
                                    <ul>
                                        <li>';
            echo'                                Difficulté : ' . BaseDeDonnes::troisDifficultesRecettes($test)[1];
            echo'                            </li>
                                        <li>';
            echo'                                Coût : ' . BaseDeDonnes::troisCoutsRecettes($test)[1];
            echo'                            </li>
                                        <li>';
            echo'                                Particularité : ' . BaseDeDonnes::troisParticularitesRecettes($test)[1];
            echo'                            </li>
                                    </ul>
                                    <span class="note"></span>
                                </div>
                                <div>
                                    <h3>';
                                        echo BaseDeDonnes::troisNomsRecettes($test)[2];
            echo'                        </h3>
                                    <ul>
                                        <li>';
            echo'                                Difficulté : ' . BaseDeDonnes::troisDifficultesRecettes($test)[2];
            echo'                            </li>
                                        <li>';
            echo'                                Coût : ' . BaseDeDonnes::troisCoutsRecettes($test)[2];
            echo'                            </li>
                                        <li>';
            echo'                                Particularité : ' . BaseDeDonnes::troisParticularitesRecettes($test)[2];
            echo'                            </li>
                                    </ul>
                                    <span class="note"></span>
                                </div>
                            </article>
                            
                        </section>
                    
                        <script src="js/js.js"></script>
                    </body>
                    </html>';
        }

    }