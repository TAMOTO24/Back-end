<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>
<body>
    <?php
        function createArray(){
            $size = rand(3, 7);
            $array = [];

            for($i = 0; $i < $size; $i++)
                array_push($array, rand(10, 20));
        
            return  $array;
        }
        function operationArray($Arr1, $Arr2){
            $arr = array_merge($Arr1, $Arr2);            
            $arr = array_values(array_unique($arr));
            sort($arr);
            return $arr;
        }
        function output($arr){
            foreach ($arr as $item) {
                echo $item . "<br>";
            }
        }

        $arr1 = createArray();
        $arr2 = createArray();
        $arr = operationArray($arr1, $arr2);

        echo "<b> Array 1</b><br>";
        output($arr1);
        echo "<b> Array 2</b><br>";
        output($arr2);
        echo "<b> Final Array</b><br>";
        output($arr);
        
    ?>
    
</body>
</html>