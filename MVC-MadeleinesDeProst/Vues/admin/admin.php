<?php
echo '
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

        <article class="utilisateurs">
            <ul>';

                require "BaseDeDonnee.php";
                $conn = connection();

                $sql = "SELECT NOM, IDENTIFIANT, ACTIVEE FROM UTILISATEUR";
                $result = $conn->query($sql);

                
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>" . $row["IDENTIFIANT"] .
                            "<form action=\"admin.php\" method=\"post\">" .
                            "<a class=\"icon-recette\">" .
                            "<input type=\"submit\" name=\"supprimerUtilisateur\" value=\"&#x2715\">" .
                            "<input type=\"hidden\" name=\"nom\" value=\"" . $row['NOM'] . "\">" .
                            "</a>" .
                            "<a class=\"icon-recette\">" .
                            "<input type=\"submit\" name=\"desactiverUtilisateur\" value=\"&#127985\">" .
                            "<input type=\"hidden\" name=\"nom\" value=\"" . $row['NOM'] . "\">" .
                            "</a>" .
                            "<input type=\"text\" name=\"utilisateurEstActivee\" value=\"" . $row['ACTIVEE'] . "\">" .
                            "</form>" .
                            "</li>";
                    }
                

                if (isset($_POST["supprimerUtilisateur"])) {
                    $nom = $_POST['nom'];
                    $suppUtilisateur = "DELETE FROM `UTILISATEUR` WHERE `UTILISATEUR`.`NOM` = '" . $nom . "';";

                    $result = $conn->query($suppUtilisateur);
                }
                if (isset($_POST["desactiverUtilisateur"])) {
                    $estActivee = $_POST['utilisateurEstActivee'];
                    $nom = $_POST['nom'];

                    if ($estActivee == 1) {
                        $desactiveUtilisateur = "UPDATE `UTILISATEUR` SET `ACTIVEE` = '0' WHERE `UTILISATEUR`.`NOM` = '" . $nom . "';";
                        $result = $conn->query($desactiveUtilisateur);
                    } else {
                        $activeUtilisateur = "UPDATE `UTILISATEUR` SET `ACTIVEE` = '1' WHERE `UTILISATEUR`.`NOM` = '" . $nom . "';";
                        $result = $conn->query($activeUtilisateur);
                    }
                }

            echo '</ul>
        </article>
        <article class="appreciations">
            <ul>';

                $sql = "SELECT ID, NOM_AUTEUR, COMMENTAIRE, ACTIVEE FROM APPRECIATION";
                $result = $conn->query($sql);

                
                if (isset($_POST["supprimerAppreciation"])) {
                    $idAppreciation = $_POST['idAppreciation'];
                    $suppAppreciation = "DELETE FROM `APPRECIATION` WHERE `APPRECIATION`.`ID` = '" . $idAppreciation . "';";

                    $result = $conn->query($suppAppreciation);
                }
                if (isset($_POST["desactiverAppreciation"])) {
                    $appreciationEstActivee = $_POST['appreciationActivee'];
                    $idAppreciation = $_POST['idAppreciation'];

                    if ($appreciationEstActivee == 1) {
                        $desactiveeAppreciation = "UPDATE `APPRECIATION` SET `ACTIVEE` = '0' WHERE `APPRECIATION`.`ID` = '" . $idAppreciation . "';";
                        $result = $conn->query($desactiveeAppreciation);
                    } else {
                        $activeAppreciation = "UPDATE `APPRECIATION` SET `ACTIVEE` = '1' WHERE `APPRECIATION`.`ID` = '" . $idAppreciation . "';";
                        $result = $conn->query($activeAppreciation);
                    }
                }

                
            echo '</ul>
        </article>

    </section>
    <script src="js/js.js"></script>
</body>

</html>';