<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Par ou impar</title>
</head>
<body>

<div class="container border m-3">
<h1> Resultado </h1>

    <?php
    $valor = filter_input(INPUT_POST,"valor");
    
    if ($valor % 2 == 0) {
        echo("$valor é par");
    }else {
        echo("$valor é ímpar");
        }
    ?>
</div>
</body>
</html>