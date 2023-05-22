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

  //zad 1

  $a_zad1 = true;
  if ($a_zad1 === null) {
    echo "true";
  } else {
    echo "false";
  };

  echo "</br>" . "zad2" . "</br>";

  //zad 2

  $number = 154;
  $modified_number = str_replace('5', '0', (string)$number);    
    echo $number . "</br>" . $modified_number ;

    echo "</br>" . "zad3" . "</br>";

  //zad3

    $a= 1;
    $b = 11;
    if ($a <= 1 && $b >=3){
        echo "сумма; " . $summ =$a + $b; 
    } else{
        echo "разность: " . $razn = $a- $b;
    };
    
    echo "</br>" . "zad4" . "</br>";

    //zad 4

    $string_zad4 = "anfdgir";
    if ($string_zad4[0] === 'a'){
        echo "да";
    } else {
        echo "нет";
    };

    echo "</br>" . "zad4" . "</br>";

    //zad 5

    $str = '123456';

    $sum1 = intval($str[0]) + intval($str[1]) + intval($str[2]);
    $sum2 = intval($str[3]) + intval($str[4]) + intval($str[5]);

    if ($sum1 === $sum2) {
    echo 'да';
    } else {
    echo 'нет';
    };
    
    echo "</br>" . "zad5" . "</br>";
    //zad6

    $degrees = 180;


    if ($degrees >= 0 && $degrees <= 360) {
    
    $hours = floor($degrees / 30);

    echo "Прошло $hours часов.";
    } else {
    echo "Неверное значение градусов.";
    };

    echo "</br>" . "zad7" . "</br>";

    //zad7
    $sum_zad7 = 0;

    for ($i = 20; $i <= 45;$i++) {
        if ($i %5 === 0 ){
            $sum_zad7 += $i;
        }
    };

    echo $sum_zad7;

    echo "</br>" . "zad8" . "</br>";

    //zad8

    $num_zad8 = 12345; 

    $str_zad8 = strval($num_zad8); 

    for ($i = 1; $i < strlen($str_zad8); $i += 2) {
    $str_zad8[$i] = '0'; 
    }

    $result_zad8 = intval($str_zad8); 

    echo $result_zad8; 

    echo "</br>" . "zad9" . "</br>";

    //zad 9
    $num = 1000;
    $iterations = 0;

    while ($num >= 50) {
    $num /= 2;
    $iterations++;
    }

    echo "</br>" . "Результат: $num" . PHP_EOL;
    echo "Количество итераций: $iterations";

//    $num = 1000;
//    $iterations = 0;

//    for (; $num >= 50; $iterations++) {
//    $num /= 2;
//    }
//
//    echo "Результат: $num" . PHP_EOL;
//   echo "Количество итераций: $iterations";

    echo "</br>" . "zad10" . "</br>";

    //zad10

    $n = 4; 

    for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo "*";
    }
    echo "<br>";
    }


    


    ?>
</body>
</html>