<?php
echo '<h2> Recettes </h2>';
foreach ($A_vue['recette'] as $row) {
    echo '<li>' . $row["ID"] . ' ' . $row["NOM"] .
        '<form action="Admin" method="post">' .
        '<a class="icon-recette">' .
        '<input type="submit" name="supprimer" value="&#x2715">' .
        '<input type="hidden" name="id" value="' . $row['ID'] . '">' .
        '</a>' .
        '</form>' .
        '</li>';

}

echo '<a class="icon">' .
    '<input type="submit" onclick="afficherInserer()" value="&#x2b">' .
    '</a>' . PHP_EOL;

echo '<a class="icon-recette">' .
    '<input type="submit" onclick="afficherModifier()" value="&#x270E">' .
    '</a>';

echo '</ul>
</article>
<article class="recette">
<form id="formModifier" action="Admin" method="post">
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


<form id="formInserer" action="Admin" method="post">
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
<input id="validerAjout" type="submit" name="ajouter" value="Insérer">" .
</form>
</article>
</section>
<script src="js/js.js"></script>
</body>
</html>';