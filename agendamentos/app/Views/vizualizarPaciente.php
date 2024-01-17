<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agendamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/index.css') ?>">

    <script>
        window.onload = function() {
            var formularios = document.getElementsByClassName("btnExcluir");
            for (var i = 0; i < formularios.length; i++) {
                formularios[i].onsubmit = function() {
                    return window.confirm("Deseja excluir esse Paciente?");
                }
            }

        }
    </script>

</head>

<body>

    <h1>Lista de Pacientes</h1>
    <a href="<?= base_url('/') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-eye"></i> CADASTRAR PACIENTE</a>
    <hr />

    <div class="container">

        <div class="form">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Código do Paciente</th>
                        <th scope="col">Nome Compelo</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Cartão de SUS</th>
                        <th scope="col">Data da Consulta</th>
                        <th scope="col">Horário da Consulta</th>
                        <th scope="col">Médico</th>
                        <th scope="col" style="width:30px">Ações</th>
                        <th scope="col" style="width:30px"> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($paciente as $p) { ?>
                        <tr>
                            <th scope="row"> <?= $p['id_agendamento'] ?> </th>
                            <td> <?= $p['nome_paciente'] ?> </td>
                            <td> <?= $p['cpf'] ?> </td>
                            <td> <?= $p['n_sus'] ?> </td>
                            <td> <?= $p['data_consulta'] ?> </td>
                            <td> <?= $p['horario_consulta'] ?> </td>
                            <td> <?= $p['profissional'] ?> </td>

                            <td>
                                <a href="<?= base_url('editar/' . $p['id_agendamento']) ?>">
                                    <button type="button" class="btn btn-primary">Editar</button>
                                </a>

                            </td>

                            <td>
                                <form class="btnExcluir" method="post" action="<?= base_url('excluir') ?>">
                                    <input type="hidden" name="id" value="<?= $p['id_agendamento'] ?>">
                                    <input type="submit" class="btn btn-danger" value="Excluir" />
                                </form>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>