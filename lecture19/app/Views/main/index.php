<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 19 - View parser with comments, loop and conditions</title>
</head>
<body>
    <p>{title}</p>

    {# comentario ... #}

    <ul>
        {names}
            <li>{name}</li>
        {/names}
    </ul>

    <p>É admin?</p>
    {if($admin)}
        <p>Sim</p>
    {else}
        <p>Não</p>
    {endif}

    {noparse}
        <p>{literal}</p>
    {/noparse}
</body>
</html>