<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $login = $_POST['Login'];
    $password = $_POST['Password'];
    $passwordAgain = $_POST['Passwordagain'];
    $sex = $_POST['sex'];
    $city = $_POST['city'];
    $about = isset($_POST['textarea']) ? $_POST['textarea'] : '';
    $favoriteGames = '';

    if (isset($_POST['1'])){
        $favoriteGames .= 'Футбол<br>';
        $_SESSION['val1'] = 'Футбол';
    } 
    if (isset($_POST['2'])){
        $favoriteGames .= 'Баскетбол<br>';
        $_SESSION['val2'] = 'Баскетбол';
    }
    if (isset($_POST['3'])){
       $favoriteGames .= 'Волейбол<br>';
       $_SESSION['val3'] = 'Волейбол';
    } 
    if (isset($_POST['4'])){
        $favoriteGames .= 'Шахи<br>';
        $_SESSION['val4'] = 'Шахи';
    } 
    if (isset($_POST['5'])){
       $favoriteGames .= 'World of Tanks<br>';
       $_SESSION['val5'] = 'World of Tanks';
    }

    $photo = isset($_FILES['photo']['name']) ? $_FILES['photo']['name'] : '';

    echo "<form>";
    echo "<div class='block'><p>Логін:</p> <p>$login</p></div>";
    echo "<div class='block'><p>Пароль:</p> <p>$password</p></div>";
    echo "<div class='block'><p>Пароль (ще раз):</p> <p>$passwordAgain</p></div>";
    echo "<div class='block'><p>Стать:</p> <p>$sex</p></div>";
    echo "<div class='block'><p>Місто:</p> <p>$city</p></div>";
    echo "<div class='block'><p>Улюблені ігри:</p> <p>$favoriteGames</p></div>";
    echo "<div class='block'><p>Про себе:</p> <p>$about</p></div>";
    echo "<div><p>Фото:</p><img src='$photo'></div>";
    echo "</form>";

    
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    $_SESSION['passwordAgain'] = $passwordAgain;
    $_SESSION['sex'] = $sex;
    $_SESSION['city'] = $city;
    $_SESSION['about'] = $about;

}
?>
<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Повернутися на головну сторінку.</a>
</body>
</html>