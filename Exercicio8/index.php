<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Banco de Imagens</title>
</head>
<body>
<div class="container border m-4 p-4 mx-auto">
<h1 class="p-2 m-2 bg-info text-white">Banco de Imagens</h1>
    
    <form action="detalhes.php" method="POST">
    <p>Grupo de Imagens

    <select name="grupoImagens" class="form-select" arial-label="Default select example">
    <option value="" disabled selected>Selecione</option>
    <option value="Animais">Animais</option>
    <option value="Cidades">Cidades</option>
    <option value="Flores">Flores</option>
    <option value="Florestas">Florestas</option>
    </select>
    
    </p>
    <button type="submit" class="btn btn-primary">Buscar</button>
    
    </form>
</div>
</body>
</html>