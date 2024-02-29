<?php
declare(strict_types=1);
session_start();

//echo "<pre>\n";
//print_r($_COOKIE);
//echo "\n<npre>\n";


file_put_contents(__DIR__.'/1.txt', date('H:i:s') . ': ' . json_encode($_SESSION)  . "\n", FILE_APPEND);


if ("pashok" === ($_SESSION["login"] ?? '')) {
    if ('pivo' === ($_REQUEST['action'] ?? '')) {
        // в этом блоке, были бы какие то операции, от имени пользователя
        echo "<p>go to bar drink pivo</p>";
    }
}

?>

<form method="post" action="c.php">
    что будем делать?
    <input type="text" name="action" value="">
    <input type="submit" value="отправить">
</form>
