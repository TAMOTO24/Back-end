<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>
    <body>
        <?php
            function ElementsRepeat($arr){
                for($i = 0; $i < count($arr); $i++){
                    $value = $arr[$i];
                    for($j = 0; $j < count($arr); $j++){
                        if($arr[$j] == $value && $j != $i){
                            echo "repeated element[$j] - ".$arr[$j]."<br>";
                        }
                    }
                }
            }
            $arr = [1, 2, "text", 2, "man", ["hello"], 2.5, "text"];
            ElementsRepeat($arr);

        ?>
    </body>
</html>