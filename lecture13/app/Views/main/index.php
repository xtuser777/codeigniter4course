<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 13 - Views with foreach and if</title>
</head>
<body>
    <h1>Views with foreach and if</h1>
    <h3>Exibindo</h3>
    <p><?=$brands[0]?></p>

    <h3>Foreach</h3>
    <ul>
        <?php foreach($brands as $brand): ?>
            <li><?=$brand?></li>
        <?php endforeach; ?>
    </ul>

    <h3>If</h3>
    <ul>
        <?php for ($i = 0; $i < count($brands); $i++): ?>
            <?php if ($brands[$i] == "Ferrari"): ?>
                <li><?=$brands[$i]?></li>
            <?php endif; ?>
        <?php endfor; ?>
    </ul>
</body>
</html>