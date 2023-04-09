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

function CnF($celsius){
  $fahrenheit = $celsius * 1.8 + 30;
  echo $celsius." graden celsius staat gelijk aan ".$fahrenheit."   Fahrenheit.";
}

CnF(10);

echo "<br>";

# als je de true & false naar een boolean veranderd krijg je niks of het getal 1 op de pagina. 
# Daarom heb ik het veranderd naar een string.
function  DeelbaarD3 ($getal){
  $antwoord;
  if($getal % 3 == 0){
    
    $getal = 'true';
  } else {$getal = 'false';}
  return $getal;
}

echo DeelbaarD3(11);

echo "<br>";

function OmgekeerdeV($string){
  return strrev($string);
}
echo OmgekeerdeV("een woord");



?>




</body>
</html>