<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Banco de Imagens</title>
</head>
<body>
    <div class="container border m-4 p-4 mx-auto">
        <h1 class='p-2 m-2 bg-info text-white text-center'>Notícias sobre tecnologia </h1>
<?php
$noticias = $_GET['pagina'];
include "Matriz_Noticias.inc";
?>
        <div class='container w-75'>
            <div class='row'>
                <div class='col text-center'>
                <p class='font-weight-bold text-uppercase'><?=$matriz_noticias[$noticias][1]?></p>
                <img class='img-thumbnail' src=' <?=$matriz_noticias[$noticias][3]?> ' alt='Foto da Notícia' />
                <p class='text-justify'> <?=$matriz_noticias[$noticias][2]?> </p>
                </div>
            </div>
        </div>
    <button class="btn btn-primary mt-2" onclick="history.go(-1)">Voltar</button>
    </div>

</body>
</html>