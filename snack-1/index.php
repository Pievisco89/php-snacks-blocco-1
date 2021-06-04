<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack-1</title>
</head>
<body>
  
  <?php

    $partite = [
      [
        'casa' => 'Olimpia Milano',
        'ospite' => 'Cantù',
        'puntiCasa' => '55',
        'puntiOspite' => '95',
      ],
      [
        'casa' => 'Fortitudo',
        'ospite' => 'Avellino',
        'puntiCasa' => '77',
        'puntiOspite' => '93',
      ],
      [
        'casa' => 'Bologna',
        'ospite' => 'Trento',
        'puntiCasa' => '84',
        'puntiOspite' => '86',
      ],
      [
        'casa' => 'Sassari',
        'ospite' => 'Varese',
        'puntiCasa' => '55',
        'puntiOspite' => '82',
      ],
    ];

  ?>

  <h1>Snack 1</h1>

  <ul>
    
    <?php foreach($partite as $partita){ ?>

      <li><?php echo $partita['casa'] ?> - <?php echo $partita['ospite'] ?> | <?php echo $partita['puntiCasa'] ?> - <?php echo $partita['puntiOspite'] ?> </li>

    <?php } ?>

  </ul>

</body>
</html>