<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <h1>Editar usuario</h1>
    <hr/>

    <form class="row g-3" method="post" action="<?=base_url('alterar/' . $cliente['id'])?>">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Nome</label>
        <input type="text" name="nome" value="<?=$cliente['nome']?>" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Sobrenome</label>
        <input type="text" name="sobrenome" value="<?=$cliente['sobrenome']?>" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Idade</label>
        <input type="number" name="idade" value="<?=$cliente['idade']?>" class="form-control" id="inputAddress">
      </div>
      
      <input type="hidden" name="id" value="<?=$cliente['id']?>">
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>
    </form>
    
</body>
</html>