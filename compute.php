<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];

    $sum = $num1 + $num2;
    $diff = $num4 - $num3;
    $prod = $num2 * $num3;
    $quo = $num2 / $num3;
    $ave = ($num1 + $num2 + $num3 + $num4) / 4;

    echo "The sum of $num1 and $num2 is $sum<br>";
    echo "The differnece of $num4 and $num3 is $diff<br>";
    echo "The product of $num1 and $num3 is $prod<br>";
    echo "The quotions of $num2 and $num3 is".round($quo, 2);
    echo "<br>The average of $num1, $num2, $num3 and $num4 is $ave<br>";
?>