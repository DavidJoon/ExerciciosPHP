<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Par ou Impar</title>
</head>
<body>

<div class="container border m-3">
<h1> Verificar se o número é Par ou Impar </h1>
<form action= "parimpar.php" method= "POST">
  
  <div class="mb-3">
    <label for="valor" class="form-label">Número</label>
    <input type="number" name="valor" class="form-control" id="valor" aria-describedby="valorHelp" required>
  </div>

  <button type="submit" class="btn btn-primary">Verificar</button>
</form>
</div>

</body>
</html>