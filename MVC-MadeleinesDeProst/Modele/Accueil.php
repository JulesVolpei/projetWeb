<?php
    class Accueil {
        private static $troisRecettes = array();

        // Fonction pour récupérer les trois recettes aléatoirement
        public static function donneLesRecettes() {
            if (self::$troisRecettes == null) {
                // Connexion base de données
                $bdLien = BaseDeDonnes::connexion();
                // Requête
                $query = "SELECT DISTINCT * FROM RECETTE ORDER BY RAND() LIMIT 3";
                $resultat = mysqli_query($bdLien, $query);
                // On parcourt le résultat de notre requête
                while ($row = mysqli_fetch_assoc($resultat)) {
                    // On ajoute une recette à notre tableau
                    array_push(self::$troisRecettes, $row);
                }
            }
        
            return self::$troisRecettes;
        }

        public function affichageAccueil() {
            $test = array();
            foreach (self::donneLesRecettes() as $recette) {
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
                                        echo $test[0]["NOM"];
            echo'                       </h3>
                                    <ul>
                                        <li>
                                            <!-- Difficulté à modifier avec diffilculté BD -->
                                            Difficulté :
                                        </li>
                                        <li>
                                            <!-- Coût à modifier avec coût BD -->
                                            Coût
                                        </li>
                                        <li>
                                            <!-- Particularité à modifier avec particularité BD -->
                                            Particularité :
                                        </li>
                                    </ul>
                                    <span class="note"></span>
                                </div>
                                <div>
                                    <h3>';
                                        echo $test[1]["NOM"];
            echo'                        </h3>
                                    <ul>
                                        <li>
                                            <!-- Difficulté à modifier avec diffilculté BD -->
                                            Difficulté : 
                                        </li>
                                        <li>
                                            <!-- Coût à modifier avec coût BD -->
                                            Coût : 
                                        </li>
                                        <li>
                                            <!-- Particularité à modifier avec particularité BD -->
                                            Particularité : 
                                        </li>
                                    </ul>
                                    <span class="note"></span>
                                </div>
                                <div>
                                    <h3>';
                                        echo $test[1]["NOM"];
            echo'                        </h3>
                                    <ul>
                                        <li>
                                            <!-- Difficulté à modifier avec diffilculté BD -->
                                            Difficulté :
                                        </li>
                                        <li>
                                            <!-- Coût à modifier avec coût BD -->
                                            Coût :
                                        </li>
                                        <li>
                                            <!-- Particularité à modifier avec particularité BD -->
                                            Particularité :
                                        </li>
                                    </ul>
                                    <span class="note"></span>
                                </div>
                            </article>
                            
                        </section>
                    
                        <script src="js/js.js"></script>
                    </body>
                    </html>';
        }

        public function affichageRecettes() {
            $this->donneLesRecettes();
            $compteur = 1;
            foreach(self::$troisRecettes as $recette) {
                echo "Recette numéro " . $compteur;
                echo "<br>";
                echo $recette["NOM"];
                echo "<br>"; 
                sleep(3);
                $compteur += 1;
            }
        }

        public function afficheEnModeTableau() {
            echo '<table>';
            echo '  <tr>';
            echo '      <th>' . self::$troisRecettes[0]["NOM"] . '</th>';
            echo '      <th>' . self::$troisRecettes[1]["NOM"] . '</th>';
            echo '      <th>' . self::$troisRecettes[2]["NOM"] . '</th>';
            echo '  </tr>';
            echo '  <tr>';
            echo '      <td>' . self::$troisRecettes[0]["DIFFICULTE"] . '</td>';
            echo '      <td>' . self::$troisRecettes[1]["DIFFICULTE"] . '</td>';
            echo '      <td>' . self::$troisRecettes[2]["DIFFICULTE"] . '</td>';
            echo'   </tr>';
            echo '</table>';
        }
        
    }