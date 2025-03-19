<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab HTTP 2</title>
</head>
<body>
    <pre>
    Create a small form that allows you to compute some numbers. You need to handle

    add, subtract, multiply and divide
    more than two numbers
    handle the case the user is not sending a valide number
        empty value
        or a letter
        divizion par 0
    </pre>
    <form method="post">
        <label for="number">Enter two number and an operation:<br></label>
        <label for="number">number 1:</label>
        <input type="number" name="number1" id="number1" required>
        <label for="number"><br>number 2:</label>
        <input type="number" name="number2" id="number2" required>
        <label for="pet-select"><br>Choose an operation:<br></label>

        <select name="operation">
            <option value="">--Please choose an operation--</option>
            <option value="add">add</option>
            <option value="subtract">subtract</option>
            <option value="multiply">multiply </option>
            <option value="divide">divide</option>
        </select>
            
        <button type="submit">Start calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nb1 = intval($_POST["number1"]);
        $nb2 = intval($_POST["number2"]);
        $operation = $_POST["operation"];
        switch ($operation) {
            case "":
                echo "veuyez indiquer une opeertation";
                break;
            case "add":
                echo $nb1 .' + '. $nb2.'='.$nb1 + $nb2;
                break;
            case "subtract":
                echo $nb1 .' - '. $nb2.'='.$nb1 - $nb2;
                break;
            case "multiply":
                echo $nb1 .' X '. $nb2.'='.$nb1 * $nb2;
                break;
            case "divide":
                if ($nb2 === 0){
                    echo "Divizion par 0";
                }
                else {
                echo $nb1 .' / '. $nb2.'='.$nb1 / $nb2;}
                break;


}}
    ?>


</body>
</html>