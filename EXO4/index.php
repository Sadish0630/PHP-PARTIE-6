<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 6 EXO 4</title>
</head>
<a href='index.php?language=PHP&amp;server=LAMP'>Testez si les paramètres existent !</a>

<p>
        <?php
        if (isset($_GET['language']) && isset($_GET['server'])) {
            echo $_GET['language'] . ' ' .  $_GET['server'];
        }
        ?>
    </p>

</body>

</html>