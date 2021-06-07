<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>
  <h1>Snack-7</h1>

  <?php
    $students = [
      [
        'name' => 'Aldo',
        'lastname' => 'Baglio',
        'votes' => [6, 8, 7.5, 5.5, 4],
      ],
      [
        'name' => 'Giovanni',
        'lastname' => 'Storti',
        'votes' => [5.5, 6.75, 6, 6.25, 8.25],
      ],
      [
        'name' => 'Giacomo',
        'lastname' => 'Poretti',
        'votes' => [5, 7, 4.5, 6],
      ],
      [
        'name' => 'Marina',
        'lastname' => 'Massironi',
        'votes' => [8, 7.5, 6.75, 7.5, 8.25],
      ],
    ];

  ?>

  <h3>Studenti:</h3>
  <ul>

    <?php foreach($students as $student){ ?>
      
      <li>
         Studente: <strong><?php echo $student['name'] ?> <?php echo $student['lastname'] ?></strong>  <br>
        Media voti: <strong><?php echo array_sum($student['votes'])/count($student['votes']) ?></strong> 
      </li>
      <hr>
      
    <?php } ?>

  </ul>


</body>
</html>