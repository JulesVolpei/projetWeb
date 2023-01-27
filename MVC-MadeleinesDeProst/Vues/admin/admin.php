<?php
echo '
<body>

    <header>

        <a href="Accueil">
            <h1>Les Madeleines de Prost</h1>
        </a>
        <nav id="navbar" class="nav">
            <a id="onglet" href="Recette"> <!-- A changer !!! -->
                <form action="Recettes" method="post">
                    <button type="submit">
                        Recettes
                    </button>
                </form>
            </a>
            <a id="onglet" href="Inscription"> <!-- A changer !!! -->
                <form action="Inscription" method="post">
                    <button type="submit">
                        Connexion <br> Inscription
                    </button>
                </form>
            </a>
            <a class="icon" onclick="myFunction()">&#9776;</a>
        </nav>

    </header>

    <section>

        <article class="utilisateurs">
            <ul>';