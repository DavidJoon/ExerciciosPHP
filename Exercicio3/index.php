<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Boas Vindas</title>
</head>
<body>

<div class="container border m-3">

<form class="p-3" action="boasvindas.php" method="POST">
  <div class="row mb-3">
    <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
    <div class="col-sm-10">
      <input type="text" name="nome" class="form-control" id="nome">
    </div>
  </div>
  <div class="row mb-3">
    <label for="idade" class="col-sm-2 col-form-label">Idade:</label>
    <div class="col-sm-10">
      <input type="number" name="idade" min="1" max="150" class="form-control" id="idade">
    </div>
  </div>
  
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" id="Feminino" value="Feminino" checked>
        <label class="form-check-label" for="Feminino">
          Feminino
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="sexo" id="Masculino" value="Masculino">
        <label class="form-check-label" for="Masculino">
          Masculino
        </label>
      </div>
    </div>
  </fieldset>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

</div>

</body>
</html>