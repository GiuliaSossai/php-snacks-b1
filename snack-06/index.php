<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

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

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack 06</title>
</head>
<body>
   <div style="background-color: grey;">
      <?php
         // for($i = 0; $i < count($db["teachers"]); $i++){
         //    echo $db["teachers"][$i]["name"];
         //    echo $db["teachers"][$i]["lastname"]. "<br>";
         // };

      ?>

      <h2>teachers</h2>
      <ul>
         <?php foreach ($db['teachers'] as $teacher){ ?>
         <li>
         <?php echo $teacher['name'] ?>
         <?php echo $teacher['lastname'] ?>
         </li>
         <?php } ?>
      </ul>
   </div>
   
   <br>

   <div style="background-color: green;">
      <?php
         // for($i = 0; $i < count($db["pm"]); $i++){
         //    echo $db["pm"][$i]["name"];
         //    echo $db["pm"][$i]["lastname"]. "<br>";
         // };
      ?>

      <h2>pm</h2>
      <ul>
         <?php foreach ($db['pm'] as $single){ ?>
         <li>
         <?php echo $single['name'] ?>
         <?php echo $single['lastname'] ?>
         </li>
         <?php } ?>
      </ul>
   </div>



</body>
</html>