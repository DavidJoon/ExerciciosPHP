<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Verificando o maior número</title>
</head>
<body>
<div class="container border m-3">

<h1> Verificar o maior número </h1>

<form action= "maior.php" method= "POST">
  
  <div class="mb-3">
    <label for="inputValor1" class="form-label">Valor 1</label>
    <input type="number" name="valor1" class="form-control" id="inputValor1" aria-describedby="valorHelp" required>
  </div>

  <div class="mb-3">
    <label for="inputValor2" class="form-label">Valor 2</label>
    <input type="number" name="valor2" class="form-control" id="inputValor2" aria-describedby="valorHelp" required>
  </div>

  <button type="submit" class="btn btn-primary">Verificar</button>
</form>
</div>
</body>
</html>