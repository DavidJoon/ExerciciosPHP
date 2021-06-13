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
        <h1 class='p-2 m-2 bg-info text-white'>Notícias sobre tecnologia</h1>

        <form action="listar.php" method="POST">
        <p>Assunto

            <select name="assunto" class="form-select" arial-label="Default select example" required>
                <option value="" disabled selected>Selecione</option>
                <option value="Mercado">Mercado</option>
                <option value="Software">Software</option>
                <option value="Hardware">Hardware</option>
            </select>
        </p>
        <button type="submit" class="btn btn-primary">Detalhar</button>
        </form>
    </div>
</body>
</html>