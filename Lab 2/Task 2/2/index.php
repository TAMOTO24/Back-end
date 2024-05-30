<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
    <?php
        function name_generator($names){
            $animal = ["кішка", "собака", "хом'ячок", "інша тваринка"];
            $rand_count = rand(0, count($animal) - 1);
            $rand_name = array_rand($names[$rand_count]);

            return $names[$rand_count][$rand_name]." (".$animal[$rand_count].")";
        }
        $names = [
            ["Муркотун", "Булькач", "Бубон", "Мияу", "Плюшевик"],
            ["Рекс", "Шарік", "Ліс", "Макс", "Джек"],
            ["Пушок", "Гаррі", "Дін", "Луї", "Шустрик"],
            ["Піппі", "Чіп", "Барсік", "Піксель", "Боня"]
        ];
        
        echo name_generator($names);
    ?>

</body>
</html>