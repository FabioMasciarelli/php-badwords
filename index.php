<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Inserisci un testo e una parola nel testo da censurare</h1>
    <form action="print.php" method="GET">
        <input type="text-area" placeholder="testo" name="text">
        <input type="text" placeholder="parola da censurare" name="censored">
        <button type="submit">Stampa</button>
    </form>
</body>
</html>