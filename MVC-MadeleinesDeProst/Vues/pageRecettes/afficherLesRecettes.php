<?php
foreach ($A_vue["recettes"] as $recette) {
    // Echo les divs pour les recettes
    echo '<div style="width: 200px; height: 200px; background-color: red;">
          <img src="'. $recette["IMAGE"] .'" style="width: 100%;">
          <p style="text-align: center;">' . $recette["NOM"] . '</p>
        </div>';
}