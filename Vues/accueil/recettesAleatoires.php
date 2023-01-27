<?php
echo '
<article class="recette">
                                    <div>
                                        <h3>';
    echo                                $A_vue['recettes'][0]["NOM"];
    echo'                       </h3>
                                        <ul>
                                            <li>';
    echo'                                Difficulté : ' . $A_vue['recettes'][0]["DIFFICULTE"];
    echo'                           </li>
                                            <li>';
    echo'                                Coût : ' . $A_vue['recettes'][0]["COUT"];
    echo'                            </li>
                                            <li>';
    echo'                                Particularité : ' ; if ($A_vue['recettes'][0]["PARTICULARITE"] == null) echo 'Aucune'; else echo $A_vue['recettes'][0]["PARTICULARITE"];
    echo'                            </li>
                                        </ul>
                                        <span class="note"></span>
                                    </div>
                                    <div>
                                        <h3>';
    echo                                $A_vue['recettes'][1]["NOM"];
    echo'                        </h3>
                                        <ul>
                                            <li>';
    echo'                                Difficulté : ' . $A_vue['recettes'][1]["DIFFICULTE"];
    echo'                            </li>
                                            <li>';
    echo'                                Coût : ' . $A_vue['recettes'][1]["COUT"];
    echo'                            </li>
                                            <li>';
    echo'                                Particularité : '; if ($A_vue['recettes'][1]["PARTICULARITE"] == null) echo 'Aucune'; else echo $A_vue['recettes'][1]["PARTICULARITE"];
    echo'                            </li>
                                        </ul>
                                        <span class="note"></span>
                                    </div>
                                    <div>
                                        <h3>';
    echo                                $A_vue['recettes'][2]["NOM"];
    echo'                        </h3>
                                        <ul>
                                            <li>';
    echo'                                Difficulté : ' . $A_vue['recettes'][2]["DIFFICULTE"];
    echo'                            </li>
                                            <li>';
    echo'                                Coût : ' . $A_vue['recettes'][2]["COUT"];
    echo'                            </li>
                                            <li>';
    echo'                                Particularité : '; if ($A_vue['recettes'][2]["PARTICULARITE"] == null) echo 'Aucune'; else echo $A_vue['recettes'][2]["PARTICULARITE"];
    echo'                            </li>
                                        </ul>
                                        <span class="note"></span>
                                    </div>
                                </article>
                                
                            </section>
                            <script src="js/js.js"></script>
                        </body>
                   </html>';
