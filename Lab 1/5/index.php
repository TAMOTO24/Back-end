<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 5</title>
</head>
<body>
    <?php
        $random_number = mt_rand(100, 999);

        $digit1 = floor($random_number / 100);
        $digit2 = floor(($random_number % 100) / 10);
        $digit3 = $random_number % 10;

        $sum = $digit1 + $digit2 + $digit3;
        $reversed_number = $digit3 * 100 + $digit2 * 10 + $digit1;

        $sorted_digits = [$digit1, $digit2, $digit3];
        rsort($sorted_digits);
        $largest_number = $sorted_digits[0] * 100 + $sorted_digits[1] * 10 + $sorted_digits[2];
        
        echo "Число $random_number<br>";
        echo "1. Суму його цифр: <b>$sum</b><br>";
        echo "2. Знайдіть число, отримане виписуванням в зворотному порядку цифр даного тризначного натурального числа: <b>$reversed_number</b><br>";
        echo "3. Переставте цифри так, щоб нове число виявилося найбільшим з можливих: <b>$largest_number</b><br>";
    ?>
</body>
</html>