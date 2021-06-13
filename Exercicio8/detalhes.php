<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.9/css/mdb.min.css" rel="stylesheet">
    <title>Banco de Imagens</title>
</head>
<body>
<div class="container border m-4 p-4">

<?php
$imagens = $_POST['grupoImagens'];
?>

<h1 class="p-2 m-2 bg-info text-white">Imagens de <?php echo($imagens);?></h1>
<div class="container">
<div class='row'>
    <?php for ($i = 1; $i <= 5 ; $i++) {
        echo("<div class='col view zoom'>
        <img class='img-thumbnail' src= './Imagens/$imagens$i.jpg' alt='Imagem de GRUPO DA IMAGEM'>
    </div>");
    }
    ?>
</div>
</div>
<input type="submit" value="Voltar" onclick="history.go(-1)">
</div>
</body>
</html>