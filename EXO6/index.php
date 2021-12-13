<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 6 EXO 6</title>
</head>
<a href='index.php?building=12&room=101'>Testez si les paramètres existent !</a>
<p>
        <?php
        if (isset($_GET['building']) && isset($_GET['room'])) {
            echo $_GET['building'] . ' ' .  $_GET['room'];
        }
        ?>
    </p>
</body>

</html>