<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tabela com Seleção de Imagens</title>
</head>
<body>
<div class="container border p-3">
<h1>Tabela com Seleção de Imagens</h1>

<table class="table w-50 m-auto">
<tr>
<th>Locas e nome do arquivo</th>
<th>Imagens</th>
</tr>

<?php

$opcao = $_POST['numeros'];

if ($opcao == 'impar') {
    $i = 1;
}else {
    $i = 2;
}
for ($i; $i <= 20 ; $i+=2) { 
    echo("<tr>");
    echo("<td> Imagens/$i.png </td>");
    echo("<td> <img src='Imagens/$i.png'/> </td>");
    echo("</tr>");
}

?>
</table>

<button class="btn btn-danger" type="submit" onclick="history.go(-1)">Voltar</button>

</div>
</body>
</html>