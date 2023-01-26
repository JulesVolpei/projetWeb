<?php
echo '<article>' .
    '<ul>';
foreach ($A_vue['appreciation'] as $row) {
    echo '<li>' . $row["NOM_AUTEUR"] . $row["COMMENTAIRE"] .
        '<form action="Admin" method="post">' .
        '<a class="icon-recette">' .
        '<input type="submit" name="supprimerAppreciation" value="&#x2715">' .
        '<input type="hidden" name="id" value="' . $row["ID"] . '">' .
        '</a>' .
        '<a class="icon-recette">' .
        '<input type="submit" name="desactiverAppreciation" value="&#127985">' .
        '<input type="hidden" name="id" value="' . $row["ID"] . '">' .
        '</a>' .
        '<input type="text" name="appreciationEstActivee" value="' . $row["ACTIVEE"] . '">' .
        '</form>' .
        '</li>';
}

echo '</ul>' .
    '</article>

    </section>
    </section>
        <article>
        <ul>';