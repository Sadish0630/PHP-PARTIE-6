<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 6 EXO 2</title>
</head>
<a href='index.php?lastname=Nemare&amp;firstname=jean'>Testez les paramètres !</a>
<p>
    <?php
    if (isset($_GET['age'])) {
        echo $_GET['age'];
    } elseif (!isset($_GET['age'])) {
        echo 'Le paramètre age n\'existe pas';
        return;
    }
    ?>
</p>
</body>

</html>