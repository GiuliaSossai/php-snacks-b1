<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php 
function getRandom($min, $max, $nItems){
   $myArr = [];

   //check se min>max
   if($min > $max){
      $temporayMin = $min;
      $min = $max;
      $max = $temporayMin;
   };

   //verifico di poter avere tanti nItems quanti ne voglio
   if(($max - $min) < $nItems){
      $nItems = $max - $min;
   };

   while(count($myArr) < $nItems){
      //estraggo numero random
      $myNumber = rand($min, $max);
      //lo pusho nel mio array se non è già presente
      if(!in_array($myNumber, $myArr)){
         $myArr[] = $myNumber;
      };
   };

   return $myArr;
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack 04</title>
</head>
<body>
   <?php var_dump(getRandom(10, 50, 15)); ?>
</body>
</html>