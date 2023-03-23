<?php 
$arr = ['1.txt', '2.txt', '3.txt'];
$voskl = "";
for ($i = 0; $i < 3; $i++) 
  {
   $voskl = file_get_contents($arr[$i]);
   file_put_contents($arr[$i], $voskl." !");
  }

?>