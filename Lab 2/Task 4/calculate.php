<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    require 'Function/func.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = (float)$_POST['x'];
        $y = (float)$_POST['y'];
    }
?>  

    <table>
        <tr>
            <td><h2>x^y</h2></td>
            <td><h2>x!</h2></td>
            <td><h2>my_tg(x)</h2></td>
            <td><h2>sin(x)</h2></td>
            <td><h2>cos(x)</h2></td>
            <td><h2>tg(x)</h2></td>
        </tr>
        <tr>
            <td><?php echo powValue($x, $y);?></td>
            <td> <?php echo fact($x);?></td>
            <td> <?php echo my_tg($x);?></td>
            <td> <?php echo sinValue($x);?></td>
            <td> <?php echo cosValue($x);?></td>
            <td> <?php echo tg($x);?></td>
        </tr>
    </table>
</body>
</html>
