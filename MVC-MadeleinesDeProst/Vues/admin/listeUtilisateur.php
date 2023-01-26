<?php
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