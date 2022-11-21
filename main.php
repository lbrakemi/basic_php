<?php

function familyName(string $fname, string $lname = "Brad"){
    echo "$fname $lname";
}

function sum(int $num1, int $num2){
    return $num1 + $num2;

}

$genderString = "I am a";

function female($str){
    $str .= "female";

}

function male($str){
    $str.= "male";
}

male($genderString);
echo $genderString . "<br>";



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>FAMILY</h1>

<ul>
    <li><?php familyName("Bolton") ?></li>
    <li><?php familyName("Peter") ?></li>
    <li><?php familyName("Brak") ?></li>
    <li><?php familyName("Power") ?></li>
    <li><?php familyName("Brakemi", "Ebi") ?></li>
</ul>

<p>The sum of 5 and 10 is <?php echo sum(5, 10) ?></p>
<p>The sum of 20 and 100 is <?php echo sum(20, 100) ?></p>
<p>The sum of 50 and 70 is <?php echo sum(50, 70) ?></p>
    
</body>
</html>