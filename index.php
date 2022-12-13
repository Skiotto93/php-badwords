<?php 
    $song_text = "My cock is much bigger than yours
                    My cock can walk right through the door
                    With a feeling so pure
                    It's got you screaming back for";
    $word_censure = $_GET['word'];
    $song_text_censured = str_replace($word_censure , '***', $song_text);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Badwords</title>
    </head>
    <body>
        <h1>Cigaro - System of a down</h1>
        <p> <?php echo $song_text ?> </p>
        <div>
            <h4>
                Lunghezza testo: <?php echo strlen($song_text) ?>
            </h4>
        </div>
        <h2>Dopo la censura:</h2>
        <p> <?php echo $song_text_censured ?> </p>
        <h4>
            Lunghezza testo censurato: <?php echo strlen($song_text_censured) ?>
        </h4>
    </body>
</html>