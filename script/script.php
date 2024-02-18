<?php
$censored_text = $_GET['censoredText'];
$text = $_GET['text'];
$new_text = strlen($text);
$correct_text = str_replace($censored_text, '***', trim($text));
$correct_text_length = strlen($correct_text)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Testo inserito: <?= $text ?></p>
    <h2>La lunghezza del paragrafo intero è: <?= $new_text ?></h2>
    <p> Testo censurato: <?= $correct_text ?></p>
    <h2>La lunghezza del testo censurato è: <?= $correct_text_length ?></h2>
</body>
</html>