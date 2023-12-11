<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>

<body>
    <h1>Scrivi una parola</h1>
    <form action="censure.php" method="GET">
        <label for="word">Parola</label>
        <input type="text" id="word" name="word">

        <label for="censor">Parola da censurare</label>
        <input type="text" id="censor" name="censor">

        <button type="submit">Invia</button>
    </form>
</body>

</html>