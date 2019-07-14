<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        $number = 5; // Integer
        $num = 4.6; // Float
        $result = $number + $num;
        $str = 'Переменная ' . $result . ' !';
        $bool = true; // bool true or false
        if($bool) {
            echo $bool;
        } else {
            return false;
        }


        echo PHP_VERSION . "<br>";

        define("PI", 3.14);
        echo defined("PI");
        echo PI;

    ?>
    
</body>
</html>