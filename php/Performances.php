<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Performances<br>
<?php
$bigArray = [];
$max = 100000;
for ($i = 0; $i < $max; $i++) {
    $bigArray[] = rand(0, 100); // Ajout direct
}
foreach ($bigArray as $key => $value) {
    echo $value.' ';}

for ($i = 0; $i < 10; $i++) {
    echo '<br>';}
$max=1000000;
for ($i = 0; $i < $max; $i++) {
        $bigArray[] = rand(0, 100); // Ajout direct
    }
    foreach ($bigArray as $key => $value) {
        echo $value.' ';}


?>


</body>
</html>