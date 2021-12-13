<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 6 EXO 1</title>
</head>
<a href='index.php?lastname=Nemare&amp;firstname=jean'>Testez les paramètres ici !</a>
<p>
        <?php
        if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
            echo $_GET['firstname'] . ' ' .  $_GET['lastname'];
            return;
        }
        ?>
    </p>
<body>
    
</body>

</html>