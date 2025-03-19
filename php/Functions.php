<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
Functions <br>
<form method="post">
        <label for="number">Enter a number (X):</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Start Game</button>
    </form>

    <?php
function fizzbuzz(int $number) {
        
    echo "<h2>Results fizzbuzz from 0 to $number (max 100)</h2>";
    echo "<ul>";

    for ($i = 0; $i <= $number; $i++) {
        echo '<li>'.$i;
        if ($i % 3 === 0) {
            echo " <a style='color: red'>fizz</a>";
        }
        if ($i % 5 === 0) {
            echo " <a style='color: blue'>buzz</a>";
        }
        echo '</li>';
    }
    echo "</ul>";}
function factorial(int $number) {
    echo "";
    $total = $number;
    for ($i = $number-1;  $i > 0; $i--){
        $total = $total * $i;
    }
    echo "<p>factorial(".$number.")=".$total."</p>";}
function fibo(int $number) {
    if ($number <= 1) {
        return 1;}
    else {
        return fibo($number-1)+fibo($number-2);
}}
function fibo2(int $number) {
    $total = fibo($number);
    echo "<p>fibo(".$number.")=".$total."</p>";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $X = intval($_POST["number"])%100; // Convert input to integer
    fizzbuzz($X);
    //factorial($X);
    //fibo2($X);
}
    
    ?>
</body>

</html>