<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 6</title>
  <style>
    .grey, .green{
      float: left;
      color: white;
      width: 200px;
      height: 180px;
    }
    .grey{
      background-color: grey;
    }
    .green{
      background-color: green;
    }
  </style>
</head>
<body>
  <h1>Snack-6</h1>

  <?php
 
    $db = [
      'teachers' => [
        [
          'name' => 'Michele',
          'lastname' => 'Papagni'
        ],
        [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
        ]
      ],
      'pm' => [
        [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
        ],
        [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
        ]
      ]
    ]; 
 
  ?>

  <div class="grey"> 
    <ol>
      <?php foreach($db['teachers'] as $value){ ?>
        <li> <?php echo $value['name']?> <?php echo $value['lastname']?></li>
      <?php } ?>
    </ol>
  </div>

  <div class="green"> 
    <ol>
      <?php foreach($db['pm'] as $value){ ?>
        <li><?php echo $value['name']?> <?php echo $value['lastname']?></li>
      <?php } ?>
    </ol>
  </div>

</body>
</html>