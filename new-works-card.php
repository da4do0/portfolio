<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pageCard.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">

    <title>Document</title>
    <?php require_once('php/query-worksCard.php') ?>
    
</head>
<body>
    <div class="header">
            <a href="miei-lavori.php">I miei lavori</a>
            <a href="#">I miei esperimenti</a>
            <a href="index.html" id="image"><img id="memoji" src="img/memoji da4do0.png" alt=""></a>
    </div>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="title" id="" placeHolder="Titolo/Nome sito">
        <input type="text" name="subtitle" id="" placeHolder="Sottotitolo/descrizione">
        <input type="url" name="link" id="" placeHolder="Link sito">
        <input type="file" name="file_to_upload" id="path">
        <button type="submit">Invio</button>
    </form>

    
    
</body>
</html>