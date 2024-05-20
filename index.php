<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inserisci il paragrafo e la parola da censurare</h1>
    <form action="process.php" method="GET">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea id="paragraph" name="paragraph" placeholder="Scrivi qui il paragrafo..."></textarea>
        <label for="word">Parola da censurare:</label><br>
        <input type="text" name="word" id="word"><br>
        <button type="submit">Invia</button>
    </form>
</body>
</html>