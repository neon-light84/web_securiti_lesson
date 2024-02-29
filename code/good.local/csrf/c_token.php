<?php
declare(strict_types=1);
session_start();

function getToken() {
    if (empty($_SESSION['token'])) {
        $_SESSION['token'] = uniqid();
    }
    return $_SESSION['token'];
}

if ("pashok" === ($_SESSION["login"] ?? '')) {
    if (getToken() === ($_POST['csrf_token'] ?? '')) {
        // полностю пройдены проверки
        if ('pivo' === ($_REQUEST['action'] ?? '')) {
            // в этом блоке, были бы какие то операции, от имени пользователя
            echo "<p>go to bar drink pivo</p>";
        }
    } else {
        echo "<p>Ошибка, перезагрузите форму</p>";

    }
}

?>

<form method="post" action="c.php">
    что будем делать?
    <input type="hidden" name="csrf_token" value="<?=getToken()?>">
    <input type="text" name="action" value="">
    <input type="submit" value="отправить">
</form>
