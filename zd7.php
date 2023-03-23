<?php 
$count = file_get_contents('count.txt');
echo $count+1;
file_put_contents("count.txt", $count = $count+1);
?>