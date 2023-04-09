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

$spartelkuikens = 25;
$Waterbuffels = 32;
$Plonsmderin = 11;
$Bommetje = 23;

$clubs = array($spartelkuikens, $Waterbuffels, $Plonsmderin, $Bommetje);
foreach($clubs as $club ){   echo '<br>';

  while($club >= 5){
    echo "<img src='zwemfoto.png'>";
    $club -= 5;
  }
}
?>
</body>
</html>



