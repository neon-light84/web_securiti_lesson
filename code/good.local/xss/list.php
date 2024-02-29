<?php
declare(strict_types=1);
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
// симуляция получения из БД
$list = [
    'Кредит это крута',
//    'лалалала <b>3234234</b> лалалала',
//    'лалалала <b>3234234</b> лалалала<!--',
    'лалалала <b>3234234</b> лалалала <script>window.alert("рекламный текст")</script>',
    'Главное вовремя отдавать',
    'Кредиты - зло!',
];

foreach ($list as $mes) {
    $mes = htmlspecialchars($mes);
    echo "<p>$mes</p>\n<hr>\n";
}
?>



</body>
</html>
