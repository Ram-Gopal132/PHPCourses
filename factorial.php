<?php

function factorial($n)
{
    $fact=1;
    while($n!=0)
    {
        $fact=$fact*$n;
        $n--;
    }
    return $fact;
}
//Two method call by function
    $m= factorial(15);
    //another
   echo factorial(5);
   echo "factorial of the given number:  ".$m;

   echo "<br>";

   function swap(&$a,&$b)
   {
    $c=$a+$b;
    $a=$c-$a;
    $b=$c-$a;
   }

   $a=10;
   $b=20;
  echo "before  a: ".$a." b :".$b;
   swap($a,$b);
   echo "<br> After  a: ".$a. " b: ".$b;

?>