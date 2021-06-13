<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tabela com Seleção de Imagens</title>
</head>
<body>
<div class="container border p-2">
<h1>Tabela com Seleção de Imagens</h1>
<form action="tabela.php" method="POST">

    <fieldset class="row mb-3">
   
     <legend class="col-form-label col-sm-2 pt-0">Escolha uma opção:</legend>
     
     <div class="col-sm-7">    
         <div class="form-check">
         <input class="form-check-input" type="radio" name="numeros" id="par" value="par" checked>
         <label class="form-check-label" for="par">
           Números Pares
         </label>
         </div>
 
         <div class="form-check">
         <input class="form-check-input" type="radio" name="numeros" id="impar" value="impar">
         <label class="form-check-label" for="impar">
            Números Impares
         </label>
         </div>
     </div>
    </fieldset>
    <button class="btn btn-primary" type="submit">Enviar</button>
    <button class="btn btn-primary" type="reset">Limpar</button>
</form>
</div>
</body>
</html>