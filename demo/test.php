<?php

$var = 'HELLOW';

echo $var{1};
echo $var{3};
echo $var{5};

echo "<br>";

$sec = 60;
$mat = 60;
$result = (int) $sec * $mat;
$day = (int) $result * 24; // is day second
echo($day);
