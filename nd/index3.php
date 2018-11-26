<?php
$x = 10;
$y = 7;
$result="";

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php $result=$x+$y; echo "$x+$y=$result";?><br>
     <?php $result=$x-$y; echo "$x-$y=$result";?><br>
     <?php $result=$x*$y; echo "$x*$y=$result";?><br>
     <?php $result=$x/$y; echo "$x/$y=$result";?><br>
     <?php $result=$x%$y; echo "$x%$y=$result";?><br>
   </body>
 </html>
