<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
</head>
<body>
<div class="header">
        <a href="miei-lavori.php">I miei lavori</a>
        <a href="index.html" id="image"><img id="memoji" src="img/memoji da4do0.png" alt=""></a>
        <a href="Contattami.php">Contattami</a>
    </div>

    <div class="box-groupCard">
        <?php require_once('php/generate-cards-mad.php'); ?>
    </div>
    
</body>
</html>