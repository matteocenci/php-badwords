<?php

$paragraph = $_GET['paragraph'];
$word = $_GET['word'];





//Censura la parola enl paragrafo
$censoredParagraph = str_replace($word, '***', $paragraph);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4><?php echo $paragraph?></h4><br>

    <p>Lunghezza: <?php echo strlen($paragraph);?></p>

    <h4><?php echo $censoredParagraph?></h4>

    <p>Lunghezza: <?php echo strlen($censoredParagraph);?></p>
    
</body>
</html>