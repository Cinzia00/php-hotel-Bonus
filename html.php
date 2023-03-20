<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hotel</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </head>
    <body>
        <form action="" method='GET'>
            <input type="text" name="parking" placeholder='Cerca hotel con parcheggio'>
            <input type="submit" value='Cerca'>
        </form>
        

<table class="table">
  <thead>
    <tr>
      <th scope="col">Hotel</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza dal centro</th>
      <th scope="col">Parcheggio</th>
    </tr>
  </thead>
  <tbody>
      <?php
        foreach ($hotels as $value) {
      ?>
            <tr>
                <td><?php echo $value['name']?></td>
                <td><?php echo $value['description']?></td>
                <td><?php echo $value['vote']?></td>
                <td><?php echo $value['distance_to_center']?> Km</td>
                <?php
                $parking = $_GET['parking'];
                if ($parking == 'parcheggio' && $parking === true) {
                ?>   
                <td><?php echo $value['parking']?></td>
                <?php
                } else $parking = 'Nessun parcheggio';
                ?>
            </tr>            

        <?php
        }
        ?>
  
</tbody>
</table>


    
</body>
</html>