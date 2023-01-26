<?php
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ajoutRecette.css">
    <link rel="shortcut icon" href="image/bakery.png" type="image/x-icon">
    <!-- <a href="https://www.flaticon.com/free-icons/pastry" title="pastry icons">Pastry icons created by Freepik - Flaticon</a> -->
    <title>Administrateur</title>
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

    <section class="vueRecette">
        <article>
            <h2>
                Liste recettes :
            </h2>
            <ul>';
            
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
                require "baseDeDonnee.php";
                $conn = connection();

                $sql = "SELECT ID, NOM FROM RECETTE";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<li>" . $row["ID"] . " " . $row["NOM"] .
                            "<form action=\"index.php\" method=\"post\">" .
                            "<a class=\"icon-recette\">" .
                            "<input type=\"submit\" name=\"supprimer\" value=\"&#x2715\">" .
                            "<input type=\"hidden\" name=\"id\" value=\"" . $row['ID'] . "\">" .
                            "</a>" .
                            "</form>" .
                            "</li>";
                    }
                    echo "<a class=\"icon\">" .
                        "<input type=\"submit\" onclick=\"afficherInserer()\" value=\"&#x2b\">" .
                        "</a>" . PHP_EOL;

                    echo "<a class=\"icon-recette\">" .
                        "<input type=\"submit\" onclick=\"afficherModifier()\" value=\"&#x270E\">" .
                        "</a>";
                }


                if (isset($_POST["supprimer"])) {
                    $idRecette = $_POST['id'];

                    $suppRecette = "DELETE FROM RECETTE WHERE ID = " . $idRecette . ";";
                    $result = $conn->query($suppRecette);
                }

                ?>

            </ul>
        </article>
        <article>

            <form id="formModifier" action="index.php" method="post">
                <div>
                    <h3> Identifiant </h3><input type="text" name="idRecette">
                </div>
                <div>
                    <h3> Nom </h3><input type="text" name="nomRecette">
                </div>
                <div>
                    <h3> Etapes </h3><input type="text" name="etapes">
                </div>
                <div>
                    <h3> Temps </h3><input type="text" name="temps">
                </div>
                <div>
                    <h3> Difficulté </h3><input type="text" name="difficulte">
                </div>
                <div>
                    <h3> Cout </h3><input type="text" name="cout">
                </div>
                <div>
                    <h3> Ingrédient(s) </h3><input type="text" name="ingredients">
                </div>
                <div>
                    <h3> Ustensile(s) </h3><input type="text" name="ustensile">
                </div>
                <div>
                    <h3> Particularite </h3><input type="text" name="particularite">
                </div>
                <input id="validerAjout" type="submit" name="modifier" value="Modifier">
            </form>

            <?php
            if (isset($POST["modifier"])) {
                $identifiant = $_POST["idRecette"];
                $modifNomRecette = $_POST['nomRecette'];
                $modifEtapes = $_POST['etapes'];
                $modifTemps = $_POST['temps'];
                $modifDifficulte = $_POST['difficulte'];
                $modifCout = $_POST['cout'];
                $modifIngredients = $_POST['ingredients'];
                $modifUstensile = $_POST['ustensile'];
                $modifParticularite = $_POST['particularite'];

                //Modifier les données de la table RECETTE
                $modification = "UPDATE `RECETTE` SET `NOM` = '" . $modifNomRecette . "' , `ETAPES` = '" . $modifEtapes . "' , `TEMPS` = '" . $modifTemps .
                    "', `INGREDIENTS` = '" . $modifIngredients . "' , `DIFFICULTE` = '" . $modifDifficulte . "' , `PARTICULARITE` = '" . $modifParticularite .
                    "' , `USTENSILE` = '" . $modifUstensile . "' , `COUT` = '" . $modifCout .
                    "' WHERE `RECETTE`.`ID` = " . $identifiant . ";";
                $result = $conn->query($modification);
            }

            ?>

            <form id="formInserer" action="index.php" method="post">
                <div>
                    <h3> Nom </h3><input type="text" name="nomRecette">
                </div>
                <div>
                    <h3> Etapes </h3><input type="text" name="etapes">
                </div>
                <div>
                    <h3> Temps </h3><input type="text" name="temps">
                </div>
                <div>
                    <h3> Difficulté </h3><input type="text" name="difficulte">
                </div>
                <div>
                    <h3> Cout </h3><input type="text" name="cout">
                </div>
                <div>
                    <h3> Ingrédient(s) </h3><input type="text" name="ingredients">
                </div>
                <div>
                    <h3> Ustensile(s) </h3><input type="text" name="ustensile">
                </div>
                <div>
                    <h3> Particularite </h3><input type="text" name="particularite">
                </div>
                <input id="validerAjout" type="submit" name="ajouter" value="Insérer">
            </form>

            <?php
            if (isset($_POST["ajouter"])) {
                $nomRecette = $_POST['nomRecette'];
                $etapes = $_POST['etapes'];
                $temps = $_POST['temps'];
                $difficulte = $_POST['difficulte'];
                $cout = $_POST['cout'];
                $ingredients = $_POST['ingredients'];
                $ustensile = $_POST['ustensile'];
                $particularite = $_POST['particularite'];

                //Ajouter un ID a la recette qui soit le dernier id de la base de données + 1
                $queryId = mysqli_query($conn, "SELECT max(ID) FROM RECETTE;");
                $idRecette = mysqli_fetch_assoc($queryId);
                $idRecette = $idRecette["max(ID)"] + 1;

                //Insérer les données de la table RECETTE
                $inserer = "INSERT INTO RECETTE (ID, NOM, ETAPES, TEMPS, INGREDIENTS, DIFFICULTE, PARTICULARITE, USTENSILE, COUT)
                    VALUES ('$idRecette', '$nomRecette', '$etapes', '$temps', '$ingredients', '$difficulte', '$particularite', '$ustensile', '$cout')";
                $result = $conn->query($inserer);

            }


            ?>
        </article>

    </section>
    <script src="js/js.js"></script>
</body>

</html>