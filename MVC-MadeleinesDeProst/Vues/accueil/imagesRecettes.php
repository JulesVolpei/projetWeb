<?php

echo '<article class="img-recette">
                                    <!-- Image à modifier avec image BD -->
                                    <picture> <img src="' . $A_vue["images"][0]["IMAGE"] . '" alt="img recette 1"> </picture>
                                    <picture> <img src="' . $A_vue["images"][1]["IMAGE"] . '" alt="img recette 2"> </picture>
                                    <picture> <img src="' . $A_vue["images"][2]["IMAGE"] . '" alt="img recette 3"> </picture>
                                </article>';