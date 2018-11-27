<?php
$temp = [-4,3,9,19,19,9,12,20,24,20,12,14,18,21,20,23,16,16,15,19,19,17,17,15,12,13,13,15,19,21];

$count = count($temp);

          $total = 0;
          foreach($temp as $t) {
              $total += $t;
          }

          $avg = round($total / $count);

          echo "<p>Vidutinė balandžio mėnesio temperatūra yra $avg C.</p>\n";

          rsort($temp);

          $auksciausiaTemp = array_slice($temp, 0, 5);
          echo "<p>Šilčiausios penkios temperatūros: <br />\n";
          foreach($auksciausiaTemp as $tt){
            echo "$tt C <br/> \n";
          }
          echo "</p>";

          $zemiausiaTemp = array_slice($temp, -5, 5);
          echo "<p>Šalčiausios penkios temperatūros: <br/>\n";
          foreach($zemiausiaTemp as $lt){
            echo "$lt C <br/> \n";
          }
          echo "</p>";
 ?>
