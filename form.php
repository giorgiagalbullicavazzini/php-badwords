<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <div class="chosen-paragraph">
        <div class="label">Testo inserito: <span class="text">"<?php echo $_POST['paragraph']; ?>"</span></div>
        <div class="length">Lunghezza del testo: <?php echo strlen($_POST['paragraph']); ?> caratteri</div>
    </div>
</body>

</html>