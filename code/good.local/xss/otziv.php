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

<form action="otziv.php" method="post">
    <textarea name="mes">

    </textarea>
    <input type="submit" value="send">
</form>

<?php
$mes = $_REQUEST['mes'] ?? '';
if (!empty($mes)) {
    // добавляем в базу
}
?>

</body>
</html>
