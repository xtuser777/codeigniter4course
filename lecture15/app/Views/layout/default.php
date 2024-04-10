<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 15 - Layout sections</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h3>Conteúdo 1</h3>
    <?= $this->renderSection("section1") ?>

    <hr/>
    <h3>Conteúdo 2</h3>
    <?= $this->renderSection("section2") ?>

<?= $this->include("partial") ?>
</body>
</html>