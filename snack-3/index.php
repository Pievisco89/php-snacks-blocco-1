<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
</head>
<body>

  <?php

    $posts = [

      '10/01/2019' => [
        [
          'title' => 'Post 1',
          'author' => 'Aldo Baglio',
          'text' => 'Ciao come stai?'
        ],
        [
          'title' => 'Post 2',
          'author' => 'Giacomo Poretti',
          'text' => 'Tutto bene...tu?'
        ],
      ],
      '10/02/2019' => [
        [
          'title' => 'Post 3',
          'author' => 'Giovanni Storti',
          'text' => 'Andiamo al cinema?'
        ]
      ],
      '15/05/2019' => [
        [
          'title' => 'Post 4',
          'author' => 'Vittorio Sgarbi',
          'text' => 'Dove andiamo in vacanza?'
        ],
        [
          'title' => 'Post 5',
          'author' => 'Tito Livio',
          'text' => 'Mare o montagna?'
        ],
        [
          'title' => 'Post 6',
          'author' => 'Vittorio Sgarbi',
          'text' => 'Sia mare che montagna!'
        ]
      ],
    ];

  ?>

  <h1>Snack 3</h1>

  <ol>
    <?php foreach($posts as $key => $value){ ?>
        
      <li>
        <?php echo "$key:" ?>
        <ul>
          <?php foreach($value as $message){ ?>
            <li> <?php echo $message['title'] ?> </li>
            <li> <?php echo $message['author'] ?> </li>
            <li> <?php echo $message['text'] ?> </li>
            <hr>
          <?php } ?>
        </ul>      
      </li>


    <?php } ?>
      
  
  </ol>

</body>
</html>