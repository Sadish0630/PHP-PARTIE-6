<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 6 EXO 5</title>
</head>
<a href='index.php?index.php?week=12'>Testez si le paramètre existe !</a>
<p>
        <?php
        if (isset($_GET['week'])) {
            echo $_GET['week'];
        }
        ?>
    </p>

</body>

</html>