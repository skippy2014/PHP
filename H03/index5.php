<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      text-align:center;
    }
    
    .rood {
      border: red solid 5px;
    }
    .groen{
      border: green solid 5px;
    }
    </style>
</head>
<body>
  <?php
  for ($i = 1; $i <=9; $i++){
    if($i == 2||$i==4||$i==6||$i==8) {
      $class = "class='rood'";
    }else{
      $class = "class='groen'";
    }
    
    echo "<img ".$class. "src=aap".$i.".jpg>";
  }

  ?>
</body>
</html>

