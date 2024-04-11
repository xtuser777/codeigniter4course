<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 30 - Insert data in database</title>
</head>
<body>
    <?php
        helper('form');
        echo form_open("main/newcustomer");
    ?>
    <input type="text" name="name" id="name">
    <input type="text" name="email" id="email">
    <input type="submit" value="Salvar">
    <?= form_close() ?>
</body>
</html>