<?php

function factorial($n)
{
    $f=1;

    while($n!=0)
    {
        $f=$f*$n;
        $n--;
    }

    return $f;
}

// echo factorial(5);

$arr=array(2,5,7,12);
$newarray=array_map('factorial',$arr);
print_r($newarray);

function show($n)
{
    if($n%2==0)
    
        echo "Number is Even <br>";
    else
    echo "Number is odd <br>";
}

$arr=array(2,5,7,12,321);
$newarray=array_map('show',$arr);
print_r($newarray);

?>