<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
</head>
<body>
    <font color="red"><h1>Olá, você gosta de histórias!</h1></font>

    <hr/>
    
    <img src="<?php echo base_url('img/girl.png'); ?>" />
    
    <hr/>

    <a href="<?=base_url('pagina1')?>">Página 1</a>
    <br/>
    <a href="<?=base_url('pagina2')?>">Página 2</a>
    <br/>
    <a href="<?=base_url('numero')?>">Número</a>

    <hr/>

    <form method="post" action="<?= base_url('inserehistoria') ?>">
        História: <input type="text" name="nome" id="nome"/>
        <br/>
        Gênero: <input type="text" name="genero" id="genero"/>
        <br/>
        <input type="submit" value="Enviar" />

    </form>

</body>
</html>