<?php
echo '<h2> Utilisateurs </h2>';
foreach ($A_vue['utilisateur'] as $row) {
    echo '<li>' . $row["NOM"] .
        '<form action="Admin" method="post">' .
        '<a class="icon-recette">' .
        '<input type="submit" name="supprimerUtilisateur" value="&#x2715">' .
        '<input type="hidden" name="nom" value="' . $row["NOM"] . '">' .
        '</a>' .
        '<a class="icon-recette">' .
        '<input type="submit" name="desactiverUtilisateur" value="&#127985">' .
        '<input type="hidden" name="nom" value="' . $row["NOM"] . '">' .
        '</a>' .
        '<input type="text" name="utilisateurEstActivee" value="' . $row["ACTIVEE"] . '">' .
        '</form>' .
        '</li>';

}

echo '</ul>' .
    '</article>';