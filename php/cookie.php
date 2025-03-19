<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Clicker</title>
</head>
<body>
    <pre>
        Comme l'addiction n'attend pas, voici un truc pour m'aider
    </pre>
    
    <form method="post">
        <label for="number">Nombre de Cps:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Start Calculate</button>
    </form>

    <?php
    // Function to format numbers with commas for better readability
    function pretty_number($number) {
        if ($number == 0) {
            return "0";
        } else {
            return number_format($number, 0, '.', ',');
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $cps = intval($_POST["number"]);
        $gain = $cps * 1800; // 30 min calculation
        $bakery = $gain * 34;
        $god = $gain * 7;

        echo "<p><strong>CPS:</strong> " . pretty_number($cps) . "</p>";
        echo "<p><strong>Bakebarry:</strong> " . pretty_number($bakery) . " to gain " . pretty_number($gain) . "(61200 min)</p>";
        echo "<p><strong>Conjure Baked God:</strong> " . pretty_number($god) . " to gain " . pretty_number($gain) . "(12600 min)</p><br><br>";
        $cps *=7;
        $gain = $cps * 1800; // 30 min calculation
        $bakery = $gain * 34;
        $god = $gain * 7;
        echo "<p><strong>Si Frenzy(X7):</strong> " . pretty_number($cps) . " (gain en 1min 17 :" . pretty_number($cps*77). ")</p>";
        echo "<p><strong>Bakebarry:</strong> " . pretty_number($bakery) . " to gain " . pretty_number($gain) . "(61200 min)</p>";
        echo "<p><strong>Conjure Baked God:</strong> " . pretty_number($god) . " to gain " . pretty_number($gain) . "(12600 min)</p>";
    
    }   

    ?>
</body>
</html>
