<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
</head>
<body>
    <font color="red"><h1>Números</h1></font>
    
    <hr/>

    <form id="f" method="get" action="<?= base_url('numero') ?>">
        Numero: <input type="text" name="numero" id="numero"/>
        

        <font color="red"><b id="erronome"> </b></font>
        <br/>

        <input type="submit" value="Enviar" />

    </form>

    <script src="<?= base_url('js/numero.js') ?>"></script>
</body>
</html>