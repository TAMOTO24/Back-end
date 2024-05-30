<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4</title>
</head>
<body>
    <?php
        function output($arr){
            echo "<b>sorted</b><br>";
            foreach ($arr as $name => $age) {
                echo "$name = $age<br>";
            }
        }

        $users_age = [
            "Іван" => 25,
            "Марія" => 10,
            "Петро" => 40,
            "Олена" => 35
        ];
        $value = "Value";
        switch ($value) {
            case "Key":
                ksort($users_age);
                break;
            case "Value":
                asort($users_age);
                break;
        }
        output($users_age);
    ?>
    
</body>
</html>