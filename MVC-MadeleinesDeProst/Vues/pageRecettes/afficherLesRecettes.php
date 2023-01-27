<?php
foreach ($A_vue["recettes"] as $recette) {
  // Echo les divs pour les recettes
  echo '<div>
          <img src="' . $recette["IMAGE"] . '>
          <p>' . $recette["NOM"] . '</p>
        </div>';
}