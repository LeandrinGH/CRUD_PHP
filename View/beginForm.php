<html>
<head>
<title>Listing 9.6 An HTML form that calls itself</title>
</head>
<body>
    <form action="<?php print $_SERVER[PHP_SELF] ?>" method="POST">
    Type your guess here: <input type="text" name="guess">
    <?php print $_SERVER[PHP_SELF] ?>
    </form>
</body>
</html>