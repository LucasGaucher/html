<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <?php
    $firstName = 'Lucas';
    $lastName = 'Gaucher';
    $age = '18';
    $size = '2m';
    $zipcode = '37600';

    echo "<p>Je m'appelle ".$firstName. ' ' .$lastName. ".</br>J'ai <strong>" .$age. '</strong> ans .</br>Je mesure aproximatiment '.$size.'</br>Et mon code postale est '.$zipcode.'</p>';
    ?>

</body>
<script>
console.log('Prénom : <?=$firstName?>');
console.log('Nom : <?=$lastName?>');
console.log('Age : <?=$age?>');
console.log('Taille : <?=$size?>');
console.log('Code postale : <?=$zipcode?>');
</script>

</html>