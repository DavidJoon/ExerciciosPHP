<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tabela</title>
</head>
<body style="margin: 50px;">

<script>
function mostrar(opcao){
if (opcao == "uni") {
    qtdcolunas.className = "invisible";
}else{
    qtdcolunas.className = "visible";
}
dimensao.className = "w-75 container border m-2 p-2 visible"
}
</script>

<div class="container border m-3">
    <h1>Montar tabela</h1>
<form action="tabela.php" method="POST">
    <fieldset class="row mb-3">
   
     <legend class="col-form-label col-sm-2 pt-0">Selecione a dimensão:</legend>
     
     <div class="col-sm-9">    
         <div class="form-check">
         <input class="form-check-input" type="radio" onclick="mostrar(this.value)" name="dimensao" id="uni" value="uni" checked>
         <label class="form-check-label" for="uni">
           Unidimensional
         </label>
         </div>
 
         <div class="form-check">
         <input class="form-check-input" type="radio" onclick="mostrar(this.value)" name="dimensao" id="bi" value="bi">
         <label class="form-check-label" for="bi">
            Bidimensional
         </label>
         </div>
     </div>
    </fieldset>
    <div id="dimensao" class="w-75 container border m-2 p-2 visible">
    <p>Preenchendo as dimensões da tabela</p>
    <p>Quantidade de linhas: <input type="number" name="linha" min="1" max="10" value="1" required></p>
    <p id="qtdcolunas">Quantidade de colunas: <input type="number" name="coluna" min="1" max="10" value="2" required></p>
    </div>
    <button type="submit">Enviar</button>
    <button type="reset" onclick="location.reload()">Limpar</button>
</form>
</div>

</body>
</html>