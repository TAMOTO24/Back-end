<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4</title>
</head>
<body>
    <?php
        $value = 'б';

        switch($value) {
            case 'а':
            case 'е':
            case 'є':
            case 'и':
            case 'і':
            case 'ї':
            case 'о':
            case 'у':
            case 'ю':
            case 'я':
                echo "Голосна";
                break;
            default:
                echo "При-Голосна";
                break;
        }
    ?>
</body>
</html>