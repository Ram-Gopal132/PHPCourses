<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center>

    <?php

    $str="ram gopal gupta";
    $n=strlen($str);
    echo $str."<br>";
    echo "length of the string: ".$n;
    echo "<br>";
    $m=str_word_count($str);
    echo $m;
    echo "<br>";
    echo strpos("Ram Gopal","Gopal");
    ?>
    </center>
</body>
</html>