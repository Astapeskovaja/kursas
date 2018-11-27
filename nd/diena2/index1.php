<?php
$cities = ['Berlynas','Roma','Londonas'];
$cities[] = 'Tokijas';
$cities2 = [
  'Tokijas'=>'13.6',
  'Vašingtonas'=>'0.6',
  'Maskva'=>'11.5'
];
$cities2['Londonas']='8.6';

print_r($cities);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <ul>
     <?php
      echo "<li>$cities[1]</li>";
      ?>
     </ul>

     <ul>
       <?php
       foreach ($cities2 as $miestas => $skaicius) {
         echo "Gyventojų skaičius:$skaicius mln.<br>";
       }
        ?>
     </ul>
   </body>
 </html>
