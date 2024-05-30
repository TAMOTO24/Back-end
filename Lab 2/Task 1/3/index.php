<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
</head>
<body>
    <form method="POST">
        <div>
            <label for="Text">Введіть шлях файлу для виведення назви файлу:</label>
            <input type="text" id="Text" name="Text"><br><br>
        </div>
        <input type="submit" value="send">
    </form>
    <?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["Text"];
        $arr = explode("\\", $text);

        $lastString = end($arr);
        $name = explode(".", $lastString);

        echo $name[0];
     }
?>
</body>
</html>