<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
    <script>
      window.onload = function () {
        var formularios = document.getElementsByClassName("btnExcluir");
        for (var i=0; i<formularios.length; i++) {
          formularios[i].onsubmit = function () {
           return window.confirm("Deseja excluir esse cliente?");
          }
        }

      }
    </script>
  

  </head>
  <body>
    <h1>Lista de Clientes</h1>
    <hr/>

    <form class="row g-3" method="post" action="<?=base_url('inserir')?>">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Sobrenome</label>
        <input type="text" name="sobrenome" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Idade</label>
        <input type="number" name="idade" class="form-control" id="inputAddress">
      </div>
      
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>

    <hr/>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">Idade</th>
            <th scope="col" style="width:30px">Ações</th>
            <th scope="col" style="width:30px"> </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $c){ ?>
              <tr>
              <th scope="row"> <?=$c['id']?> </th>
              <td> <?=$c['nome']?> </td>
              <td> <?=$c['sobrenome']?> </td>
              <td> <?=$c['idade']?> </td>

              <td>
                <a href="<?=base_url('editar/' . $c['id'])?>"><button type="button" class="btn btn-info"> Editar </button></a>
              </td>

              <td>
                <form class="btnExcluir" method="post" action="<?=base_url('excluir')?>">
                  <input type="hidden" name="id" value="<?=$c['id']?>">
                  <input type="submit" class="btn btn-danger" value="Excluir" />
                </form>
              </td>

              </tr>
            <?php } ?>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>