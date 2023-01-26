<?php
while ($row = $result->fetch_assoc()) {
    echo '<li>' . $A_vue['utilisateur'][0]["IDENTIFIANT"] . 
        '<form action=\"admin.php\" method=\"post\">' .
        '<a class=\"icon-recette\">' .
        '<input type=\"submit\" name=\"supprimerUtilisateur\" value=\"&#x2715\">' .
        '<input type=\"hidden\" name=\"nom\" value=\"' . $A_vue['utilisateur'][0]["NOM"] . '\">' .
        '</a>' .
        '<a class=\"icon-recette\">' .
        '<input type=\"submit\" name=\"desactiverUtilisateur\" value=\"&#127985\">' .
        '<input type=\"hidden\" name=\"nom\" value=\"' . $A_vue['utilisateur'][0]["NOM"] . '\">' .
        '</a>' .
        '<input type=\"text\" name=\"utilisateurEstActivee\" value=\"' . $A_vue['utilisateur'][0]["ACTIVEE"] . '\">' .
        '</form>' .
        '</li>';
}

echo '</article>

    </section>
    <script src="js/js.js"></script>
</body>

</html>';