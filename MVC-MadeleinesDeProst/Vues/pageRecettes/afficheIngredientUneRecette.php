<?php
echo ' <div class="liste"> 
                <ul>
                    <h4>Ingrédients : </h4>';
foreach ($A_vue["ingredient"] as $ingredient) {
    echo '<li>'. ' - ' . $ingredient .'</li>';
}
echo '</ul>';

