<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even/Odd Game</title>
</head>
<body>

    <h1>Even/Odd Game</h1>

    <form method="post">
        <label for="number">Enter a number (X):</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Start Game</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $X = intval($_POST["number"]); // Convert input to integer
        echo "<h2>Results from 0 to $X</h2>";
        echo "<ul>";
        for ($i = 0; $i <= $X; $i++) {
            if ($i % 2 == 0) {
                echo "<li>$i is <strong>Even</strong></li>";
            } else {
                echo "<li>$i is <strong>Odd</strong></li>";
            }
        }
        echo "</ul>";
    }
    ?>

</body>
</html>
