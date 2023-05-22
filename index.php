<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // zad1
    echo "hello world". "<br>";
    $a = 10;
    $b = 2;
    echo $a+$b. "<br>";
    echo $a-$b. "<br>";
    echo $a/$b. "<br>";
    echo $a*$b. "<br>";

    //zad2

    $x = 2;
    $y = 6;
    $z = 9;

    $result = ($x+1)*4-2*( $z-2*$x^2+$y^2 );

    echo $result . "<br>";

    //zad3

    $a_zad3 = 17;
    $b_zad3 = 10;
    $c_zad3 = $a_zad3 - $b_zad3;
    $d_zad3 = 7;
    $result_zad3 = $c_zad3 + $d_zad3 ;
    echo $result_zad3. "<br>";

    //zad4

    $text1 = "Привет, ";
    $text2 = "Мир!";
    echo $text1 . $text2 . "<br>" ;

    //zad5
    $name = "Anton";
    echo "привет, " . $name . "!" . "<br>";

    //zad6
    $num = 12345;
    $sum = 0;
    while ($num != 0) {
    $last_number = $num % 10;
    $sum += $last_number;
    $num /= 10;
    }

    echo $sum;

    //zad7

    $year = 2000;
    $hour = 60 * 60;
    $day = $hour * 24;
    $mounth = $day * 30;
    $year_seconds = $mounth * 12;
    $year_2000_seconds = 2000 * $year_seconds;
    echo  "</br>" . "сколько секунд в"."</br>" . $hour ."</br>" 
    . $day . "</br>" . $mounth . "</br>" . $year_seconds . "</br>" . $year_2000_seconds . "</br>" ;

    //zad8
    $time_hours = 22;
    $time_minutes = 14;
    $time_seconds = 44;
    echo "Время  Сейчас" . "</br>" . $time_hours . ":" . $time_minutes . ":" . $time_seconds ."</br>" . "zad9";
    //zad9
    $var = 1;
    $var += 12;
    $var -= - 14;
    $var *= 5;
    $var /= 7;
    $var += 1;
    $var -= 1;
    echo "</br>" . $var . "</br>" . "zad9" . "</br>";  
    //zad10
    define("last_Name", "Drak");
    $name = "Anton" ; 
    $fam  = "Sergeevich";
    $old = 22 ; 
    if (defined('last_Name')){
        echo "Меня зовут " . last_Name . " " . $name_letter = mb_substr($name, 0, 1) . "." . mb_substr($fam, 0 , 1) . "</br>" ."мне " 
        . $old . " лет" ;
        
        
    }




    ?>
</body>
</html>