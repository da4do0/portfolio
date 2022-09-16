<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contattami.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
</head>
<body>
    <div class="header">
            <a href="miei-lavori.php">I miei lavori</a>
            <a href="miei-exp.php">I miei esperimenti</a>
            <a href="index.html" id="image"><img id="memoji" src="img/memoji da4do0.png" alt=""></a>
    </div>

    <form action="https://formsubmit.co/garavagliad2+lavoro@gmail.com" method="post">
        <h1 class="horizontal-perfect">Form contattami</h1>
        <input class="horizontal-perfect" type="email" name="email" id="" placeHolder="Email">
        <input class="horizontal-perfect" type="text" name="name" id="" placeHolder="Nome e Cognome">
        <textarea class="central-perfect" name="text" id="" placeHolder="Testo"></textarea>
        <input type="hidden" name="_next" value="thanks.html">
        <input type="hidden" name="_template" value="table">
        <button class="horizontal-perfect" type="submit">Invia</button>
    </form>
</body>
</html>