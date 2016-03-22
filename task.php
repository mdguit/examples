<?php

 // $n is a decimal number<br /<br /><br /
  // $n is a decimal number
  $n = 1100100;
    $binary = decbin($n);
    $arr = str_split($binary);  

    $complement = "";
    foreach($arr as $i)
      $complement .= ($i == 0) ? (1) : (0);
      echo ~$n;
?>