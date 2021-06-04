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
    
    function getArrayNumberRandom($min, $max, $nItems){

      $arrNumber = [];

      while (count($arrNumber) < $nItems){
        $number = rand($min, $max);

        if(!in_array($number, $arrNumber)){
          $arrNumber[] = $number;
        }

      }

      return $arrNumber;
    }

    var_dump(getArrayNumberRandom(1, 100, 15));

  ?>

</body>
</html>