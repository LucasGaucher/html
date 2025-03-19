<h2>Conversions de types</h2>
    <?php
    $intToBool = (bool) -25;
    $floatToInt = (int) 12.25;
    $stringToInt = (int) "hello 123";
    $intToString = (string) 123;

    echo "<p>Casting -25 en booléen: " . ($intToBool ? 'true' : 'false') . "</p>";
    echo "<p>Casting 12.25 en entier: $floatToInt</p>";
    echo "<p>Casting 'hello 123' en entier: $stringToInt</p>";
    echo "<p>Casting 123 en chaîne de caractères: $intToString</p>";
    ?>

    <h2>Opérations mathématiques</h2>
    <?php
    $a = 10;
    $b = 5;

    echo "<p>Addition: " . ($a + $b) . "</p>";
    echo "<p>Soustraction: " . ($a - $b) . "</p>";
    echo "<p>Multiplication: " . ($a * $b) . "</p>";
    echo "<p>Division: " . ($a / $b) . "</p>";

    echo "<p>Division par zéro: " . @($a / 0) . " (erreur PHP évitée)</p>";
    echo "<p>Multiplication de grands nombres: " . (PHP_INT_MAX * 2) . "</p>";

    echo "<p>Valeur exacte de PI: " . pi() . "</p>";
    echo "<p>PI formaté à 2 décimales: " . number_format(pi(), 2) . "</p>";
    ?>
