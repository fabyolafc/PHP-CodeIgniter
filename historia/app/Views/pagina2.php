<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
</head>
<body>
    <h1>Fanfics<h1>

    <font color="red">Você gosta de historias, <?=$usuario?>? </font>

    <h2> Lista de Histórias</h2>
   
       <table border="1" width="50%">
        <tr>
        <td><font color="red"> História </font></td> <td><font color="red"> Gênero </font></td>
        </tr>
        <?php
            foreach ($history as $h) {
                echo "<tr><td>" . $h['nome'] . "</td><td>" . $h['genero'] . "</td></tr>";
            }
        ?>    
       </table>

</body>
</html>