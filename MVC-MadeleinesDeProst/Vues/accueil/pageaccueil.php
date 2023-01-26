<?php
    echo
            '<body>
                      <header>
                                <a href="index.html">
                                    <h1>Les Madeleines de Prost</h1>
                                </a>
                                <div id="barreRecherche">
                                    <form method="post">
                                        <input type="text" placeholder="Rechercher ..." name="recherche" id="champRecherche">
                                    </form>
                                ';
                                $A_vue['barreDeRecherche'];
                                echo '
                                </div>
                                <nav id="navbar" class="nav">
                                    <a id="onglet"> <!-- A changer !!! -->
                                        <button>
                                            Recettes
                                        </button>
                                    </a>
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
