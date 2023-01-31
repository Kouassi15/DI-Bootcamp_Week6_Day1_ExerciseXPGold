<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$titre1 = 'Hello Ali!';
echo strlen($titre1); // longuer du title1 est: 12
echo "<br>";
 
$titre2 = ' Good morning my freind!';
echo strlen($titre2);
echo "<br>"; // longuer du title2 est: 17
echo "la longeur du titre1 et titre2 est :".strlen($titre1.$titre2);
?>
</body>
</html>