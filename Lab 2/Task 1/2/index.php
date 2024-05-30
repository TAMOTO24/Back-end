<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
</head>
<body>
    <form method="POST">
        <div>
            <label for="Text">Назви міст:</label>
            <input type="text" id="Text" name="Text"><br><br>
        </div>
        <input type="submit" value="send">
    </form>
    <?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["Text"];
        $arr = explode(" ", $text);

        sort($arr);
        $String = implode(" ", $arr);

        echo $String;
     }
?>
</body>
</html>