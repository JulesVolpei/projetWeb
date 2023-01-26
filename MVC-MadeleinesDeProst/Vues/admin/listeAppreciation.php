<?php

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<li id="utilisateur">' . $row["NOM_AUTEUR"] . '<br>' . $row["COMMENTAIRE"] .
            '<form action=\"admin.php\" method=\"post\">' .
            '<a class=\"icon-recette\">' .
            '<input type=\"submit\" name=\"supprimerAppreciation\" value=\"&#x2715\">' .
            '<input type=\"hidden\" name=\"idAppreciation\" value="' . $row['ID'] . '\">' .
            '</a>' .
            '<a class="icon-recette">' .
            '<input type=\"submit\" name=\"desactiverAppreciation\" value=\"&#127985\">' .
            '<input type=\"hidden\" name=\"idAppreciation\" value=\"' . $row['ID'] . '\">' .
            '</a>' .
            '<input type=\"text\" name=\"appreciationActivee\" value=\"' . $row['ACTIVEE'] . '\">' .
            '</form>"' .
            '</li>';
    }
}