<?php
$word = $_GET['word'];
$censor = $_GET['censor']
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>

<body>
    <!-- Funzioni lunghezza stringa -->
    <?php $length = strlen($word); ?>
    <?php $length_censor = strlen($censor); ?>
    
    <!-- Funzione sostituzione parola -->
    <?php $new_string = str_replace($censor, '***', $censor) ?>

    <!-- Paragrafo -->
    <h2>Parola</h2>
    <p>La parola che hai scritto e'
        <strong>
            <?php echo $word ?>
        </strong>
    </p>
    <!-- Lunghezza paragrafo -->
    <p>La lunghezza della parola e'
        <strong>
            <?php echo $length ?>
        </strong>
    </p>

    <!-- Parola da censurare -->
    <h2>Parola censurata</h2>
    <p>La parola censurata e'
        <strong>
            <?php echo $new_string ?>
        </strong </p>
    <!-- Lunghezza parola da censurare -->
    <p>La lunghezza della parola e'
        <strong>
            <?php echo $length_censor ?>
        </strong>
    </p>
    <p></p>
</body>

</html>