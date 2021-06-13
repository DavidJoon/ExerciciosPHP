<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tabela</title>
</head>
<body>

<div class="container border m-3">

<?php

$dimensao = $_POST['dimensao'];
$linha = $_POST ['linha'];
$coluna = $_POST ['coluna'];

if ($dimensao == 'uni') {
    echo("<h1>Tabela Unidimensional com $linha linha(s)</h1>");
    echo("<table class='table table-striped table-dark'>");
    for($i=1;$i<=$linha;$i++){
    echo("<tr><td> Linha </td></tr>");
    }
    echo("</table>");
}else {
    echo("<h1>Tabela Bidimensional com $linha linha(s) e $coluna coluna(s)</h1>");
    echo("<table class='table table-striped table-dark'>");


$a = 0;
for ($i=1; $i <= ($coluna*$linha); $i++){
    if ($a == 0) {
        echo("<tr>");
    }
    echo("<th> Cédulas </th>");
    $a++;
    if ($a == $coluna) {
        echo("</tr>");
        $a = 0;
    }
}
echo("</table>");
}

?>


</div>

</body>
</html>