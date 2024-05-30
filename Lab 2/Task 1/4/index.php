<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4</title>
</head>
<body>
    <form method="POST">
        <div>
            <label for="Date1">Перша дата:</label>
            <input type="date" id="Date1" name="Date1"><br><br>

            <label for="Date">Друга дата:</label>
            <input type="date" id="Date2" name="Date2"><br><br>
        </div>
        <input type="submit" value="send">
    </form>
    <?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $First = new DateTime($_POST["Date1"]);
        $Second = new DateTime($_POST["Date2"]);

        echo date_diff($First, $Second)->days;
     }
?>
</body>
</html>