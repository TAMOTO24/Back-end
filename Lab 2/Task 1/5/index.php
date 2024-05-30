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
            <label for="Text">Введіть розмір паролю:</label>
            <input type="text" id="Text" name="Text"><br><br>
        </div>
        <input type="submit" value="send">
    </form>
    <?php 
        function check($password){

            if(strlen($password) <= 8){
                return "Пароль не придатний.";
            }
            if (!preg_match('/[A-Z]/', $password)) {
                return "Пароль не придатний.";
            }
            if(!preg_match('/[a-z]/', $password)){
                return "Пароль не придатний.";
            }
            if(!preg_match('/[0-9]/', $password)){
                return "Пароль не придатний.";
            }
            if(!preg_match('/[^A-Za-z0-9]/', $password)){
                return "Пароль не придатний.";
            }

            return "Пароль придатний.";
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $text = $_POST["Text"];
            $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[]^_`{|}~";
            $password = "";

            if (is_numeric($text)){
                for($i = 0; $i < intval($text); $i++){
                    $randNum = rand(0, strlen($string) - 1);
                    $password = $password.$string[$randNum];
                }
            }
            

            echo "$password<br>";
            echo check($password);
        }
?>
</body>
</html>