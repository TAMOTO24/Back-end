<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <?php
            if(isset($_GET['lang'])) {
                $selected_lang = $_GET['lang'];
                setcookie('selected_lang', $selected_lang, time() + (6 * 30 * 24 * 60 * 60)); // 6 місяців
            
                header('Location: index.php');
            }
            if(isset($_COOKIE['selected_lang'])) {
                $selected_lang = $_COOKIE['selected_lang'];
                switch($selected_lang) {
                    case 'ukr':
                        echo "<b>Вибрана мова:</b> Українська";
                        break;
                    case 'eng':
                        echo "<b>Вибрана мова:</b> English";
                        break;
                    case 'ger':
                        echo "<b>Вибрана мова:</b> Germany";
                        break;
                    case 'spa':
                        echo "<b>Вибрана мова:</b> Spanish";
                        break;
                }
            }


            session_start();

            $login = isset($_SESSION['login']) ? $_SESSION['login'] : '';
            $password = isset($_SESSION['password']) ? $_SESSION['password'] : '';
            $passwordAgain = isset($_SESSION['passwordAgain']) ? $_SESSION['passwordAgain'] : '';
            $sex = isset($_SESSION['sex']) ? $_SESSION['sex'] : '';
            $city = isset($_SESSION['city']) ? $_SESSION['city'] : '';
            $about = isset($_SESSION['about']) ? $_SESSION['about'] : '';
        ?>
        <form action="main.php" enctype="multipart/form-data" method="post">
            <div>
                <label for="Login">Логін:</label>
                <input type="text" id="Login" name="Login" value="<?php echo $login;?>">
            </div>
            <div>
                <label for="Password">Пароль:</label>
                <input type="text" id="Password" name="Password" value="<?php echo $password;?>">
            </div>
            <div>
                <label for="Passwordagain">Пароль(Ще раз):</label>
                <input type="text" id="Passwordagain" name="Passwordagain" value="<?php echo $passwordAgain;?>">
            </div>
            <div>
                <label for="sex">Стать:</label>
                <div>
                    <input type="radio" id="oneopt" name="sex" value="Чоловік" <?php if($sex == 'Чоловік') echo 'checked'; ?>><label for="oneopt">чоловік</label>
                    <input type="radio" id="twoopt" name="sex" value="Жінка" <?php if($sex == 'Жінка') echo 'checked'; ?>><label for="twoopt">жінка</label>
                </div>
            </div>
            <div>
                <label for="city">Місто:</label>
                <select name = "city">
                    <option value = "Житомир" <?php if($city === 'Житомир') echo 'selected'; ?>> Житомир</option>
                    <option value = "Київ" <?php if($city === 'Київ') echo 'selected'; ?>> Київ</option>
                    <option value = "Львів" <?php if($city === 'Львів') echo 'selected'; ?>> Львів</option>
                    <option value = "Харків" <?php if($city === 'Харків') echo 'selected'; ?>> Харків</option>
                </select>
            </div>
            <div class="radioBox">
                <label for="games">Улюблені ігри:</label>
                <div class="radio">
                    <div><input type="checkbox" id="1" name="1" <?php if(isset($_SESSION['val1'])) echo 'checked'; ?>> <label for="1">Футбол</label></div>
                    <div><input type="checkbox" id="2" name="2" <?php if(isset($_SESSION['val2'])) echo 'checked'; ?>> <label for="2">Баскетбол</label></div>
                    <div><input type="checkbox" id="3" name="3" <?php if(isset($_SESSION['val3'])) echo 'checked'; ?>> <label for="3">Волейбол</label></div>
                    <div><input type="checkbox" id="4" name="4" <?php if(isset($_SESSION['val4'])) echo 'checked'; ?>> <label for="4">Шахи</label></div>
                    <div><input type="checkbox" id="5" name="5" <?php if(isset($_SESSION['val5'])) echo 'checked'; ?>> <label for="5">World of Tanks</label></div>
                </div>
            </div>
            <div>
                <label for="textarea">Про себе.</label>
                <textarea type = "text" name="textarea" rows="7px"><?php echo $about; ?></textarea><br>
            </div>
            <div>
                <label for="photo">Выберите фото:</label>
                <input type="file" id="photo" name="photo" accept="image/*">
            </div>
            <div>
                <label></label>
                <input type="submit" value="Зареєструватися">
            </div>
            <a href="index.php?lang=ukr"><img src="ukr_icon.png" alt="Українська"></a>
            <a href="index.php?lang=eng"><img src="eng_icon.png" alt="Англійска"></a>
            <a href="index.php?lang=ger"><img src="ger_icon.png" alt="Німецька"></a>
            <a href="index.php?lang=spa"><img src="spa_icon.png" alt="Іспанська"></a>
            
        </form>
        
    </body>
</html>