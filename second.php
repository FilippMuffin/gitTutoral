<?php
//$mas массив с числами
$result = 0;

foreach ($mas as $i)
    $result ^= $i;

echo "Уникальное число: $result";
?>