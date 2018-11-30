&copy; <?php
  $fromYear = 2015;
  $thisYear = (int)date('Y');
  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');
  ?> 
