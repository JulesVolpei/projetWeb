<?php
    echo
            '<body>
                      <header>
                                <a href="Accueil">
                                    <h1>Les Madeleines de Prost</h1>
                                </a>
                                <div id="barreRecherche">
                                    <form method="post">
                                        <input type="text" placeholder="Rechercher ..." name="recherche" id="champRecherche">
                                    </form>
                                    <form method="post" action="Recettes">
                                    ';
                                    foreach($A_vue['barreDeRecherche'] as $row){
                                        $row[0] = strtoupper($row[0]);
                                        echo "<input type=\"submit\" class=\"recettePossible\" value=\"".$row."\" name=\"".$row."\"><br> ";
                                    }
                                echo '
                                    </form>
                                </div>
                                <nav id="navbar" class="nav">
                                    <form action="Recettes" method="post">
                                            <button type="submit">
                                                Recettes
                                            </button>
                                        </form>  
                                    <a id="onglet"> <!-- A changer !!! -->
                                        <form action="Inscription" method="post">
                                            <button type="submit">
                                                Connexion <br> Inscription
                                            </button>
                                        </form>
                                    </a>
                                    <a class="icon">&#9776;</a>
                                </nav>
                        
                            </header>
                            
                            <section class="recettes">';
