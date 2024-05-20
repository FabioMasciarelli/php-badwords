<?php 
    $text = $_GET['text'];
    $censored = $_GET['censored'];
    $result = str_replace($censored, '***', $text);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <p><?php echo $text ?></p>
        <h4>Questo testo è lungo <?php echo strlen($text); ?> caratteri</h4>
    </section>

    <section>
        <h3>Testo censurato</h3>
        <p><?php echo $result ?></p>
        <h4>Questo testo è lungo <?php echo strlen($result); ?></h4>
    </section>
</body>
</html>