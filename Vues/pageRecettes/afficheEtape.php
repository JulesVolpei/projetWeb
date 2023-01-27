<?php
$cmpt = 0;
echo '<h3>' . 'Préparation' . '</h3>';
echo '<p>';
foreach ($A_vue["preparation"] as $etape) {
    if ($cmpt == 0) {
        $cmpt += 1;
    } else {
        echo 'Etape ' . $etape . '<br>';
    }
}

echo ' </p>
        </div>
    </section>
</body>
</html>';