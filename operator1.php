<?php
$a=5;
$b=++$a;
$c=$b--;
$a=++$b;
$d=$a+ ++$a + $a++;

echo "a=".$a."<br>";
echo "b=".$b."<br>";
echo "c=".$c."<br>";
echo "d=".$d."<br>";

$str=11? "hello": "Bye";
echo $str;

?>