<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>
<body>
    <?php
        $value = 8;

        if ($value == 1 || $value == 2 || $value == 12) {
            echo "Winter";
        }else if($value >= 3 && $value <= 5){
            echo "Spring";
        }else if($value >= 6 && $value <= 8){
            echo "Summer";
        }else if($value >= 9 && $value <= 11){
            echo "Autumn";
        }
    ?>
</body>
</html>