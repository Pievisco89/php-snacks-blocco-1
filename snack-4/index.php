<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>
  <h1>Snack 4</h1>

  <?php

    $arrNumeri = [];
  
    for($i = 0; $i < 15; $i++){
      $numero = rand(1, 100);
      if(!in_array($numero, $arrNumeri)){
        $arrNumeri = $numero . "<br> ";
        echo $arrNumeri;
      }
    }

  ?>

</body>
</html>