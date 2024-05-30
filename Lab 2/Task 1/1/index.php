<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <div>
            <label for="Text">Текст:</label>
            <input type="text" id="Text" name="Text"><br><br>
        </div>
        
        <div>
            <label for="Find">Знайти:</label>
            <input type="text" id="Find" name="Find"><br><br>
        </div>
        <div>
            <label for="Replace">Замінити:</label>
            <input type="text" id="Replace" name="Replace"><br><br>
        </div>
        <input type="submit" value="send">
    </form>
    <?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["Text"];
        $find = $_POST["Find"];
        $replace = $_POST["Replace"];
     }
     if (!empty($text) && !empty($find) && isset($replace)){
        echo "<br>Результат ".str_replace($find, $replace, $text);
     }
?>
</body>
</html>