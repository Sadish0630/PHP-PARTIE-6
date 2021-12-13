<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 6 EXO 3</title>
</head>
<a href='index.php?startDate=2/05/2016&amp;endDate=27/11/2016'>Testez si les paramètres existent !</a>

<p>
        <?php
        if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
            echo $_GET['startDate'] . ' ' .  $_GET['endDate'];
        }
        ?>
    </p>

</body>

</html>