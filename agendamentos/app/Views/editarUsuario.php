<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Paciente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('css/index.css') ?>">
</head>

<body>

  <h1>Editar dados do paciente</h1>
  <hr />

  <div class="container">

    <div class="form">
      <form class="row g-3" method="post" action="<?= base_url('alterar/' . $paciente['id_agendamento']) ?>">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Nome Completo</label>
          <input type="text" name="nome_paciente" value="<?= $paciente['nome_paciente'] ?>" class="form-control" id="inputEmail4" placeholder="Nome Completo">
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4">CPF</label>
          <input type="text" name="cpf" value="<?= $paciente['cpf'] ?>" class="form-control" id="inputPassword4" placeholder="CPF">
        </div>
        <div class="form-group col-md-3">
          <label for="inputPassword4">Cartão de SUS</label>
          <input type="text" name="n_sus" value="<?= $paciente['n_sus'] ?>" class="form-control" id="inputPassword4" placeholder="Número do cartão de SUS">
        </div>
        <div class="form-group col-md-2">
          <label for="inputAddress">Data de Nascimento</label>
          <input type="date" name="data_nasc" value="<?= $paciente['data_nasc'] ?>" class="form-control" id="inputAddress" placeholder="00/00/0000">
        </div>
        <div class="form-group col-md-3">
          <label for="inputsexo">Sexo</label>
          <select id="inputsexo" name="sexo" class="form-control">
            <option value="#" <?= ($paciente['sexo'] == '#') ? 'selected' : '' ?>>Qual gênero você se identifica?</option>
            <option value="M" <?= ($paciente['sexo'] == 'M') ? 'selected' : '' ?>> Masculino</option>
            <option value="F" <?= ($paciente['sexo'] == 'F') ? 'selected' : '' ?>>Feminino</option>
            <option value="Outro" <?= ($paciente['sexo'] == 'Outro') ? 'selected' : '' ?>>Juridico/Não definido</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputEmail4">Email</label>
          <input type="email" name="email" value="<?= $paciente['email'] ?>" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-3">
          <label for="telefonecliente">Telefone</label>
          <input type="tel" name="telefone" value="<?= $paciente['telefone'] ?>" class="form-control" id="telefonecliente" placeholder="Telefone">
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress">Rua</label>
          <input type="text" name="rua" class="form-control" value="<?= $paciente['rua'] ?>" id="inputAddress" placeholder="Rua">
        </div>
        <div class="form-group col-md-4">
          <label for="inputCity">Bairro</label>
          <input type="text" name="bairro" value="<?= $paciente['bairro'] ?>" class="form-control" id="inputCity" placeholder="Bairro">
        </div>
        <div class="form-group col-md-2">
          <label for="inputCEP">Número</label>
          <input type="text" name="numero" value="<?= $paciente['numero'] ?>" class="form-control" id="inputCEP" placeholder="Número">
        </div>
        <div class="form-group col-md-4">
          <label for="inputCity">Cidade</label>
          <input type="text" name="cidade" value="<?= $paciente['cidade'] ?>" class="form-control" id="inputCity" placeholder="Cidade">
        </div>
        <div class="form-group col-md-3">
          <label for="inputEstado">Estado</label>
          <select id="inputEstado" name="uf" class="form-control">
            <option value="#" <?= ($paciente['uf'] == '#') ? 'selected' : '' ?>>Selecione um Estado</option>
            <option value="AC" <?= ($paciente['uf'] == 'AC') ? 'selected' : '' ?>>Acre</option>
            <option value="AL" <?= ($paciente['uf'] == 'AL') ? 'selected' : '' ?>>Alagoas</option>
            <option value="AP" <?= ($paciente['uf'] == 'AP') ? 'selected' : '' ?>>Amapá</option>
            <option value="AM" <?= ($paciente['uf'] == 'AM') ? 'selected' : '' ?>>Amazonas</option>
            <option value="BA" <?= ($paciente['uf'] == 'BA') ? 'selected' : '' ?>>Bahia</option>
            <option value="CE" <?= ($paciente['uf'] == 'CE') ? 'selected' : '' ?>>Ceará</option>
            <option value="DF" <?= ($paciente['uf'] == 'DF') ? 'selected' : '' ?>>Distrito Federal</option>
            <option value="ES" <?= ($paciente['uf'] == 'ES') ? 'selected' : '' ?>>Espírito Santo</option>
            <option value="GO" <?= ($paciente['uf'] == 'GO') ? 'selected' : '' ?>>Goiás</option>
            <option value="MA" <?= ($paciente['uf'] == 'MA') ? 'selected' : '' ?>>Maranhão</option>
            <option value="MT" <?= ($paciente['uf'] == 'MT') ? 'selected' : '' ?>>Mato Grosso</option>
            <option value="MS" <?= ($paciente['uf'] == 'MS') ? 'selected' : '' ?>>Mato Grosso do Sul</option>
            <option value="MG" <?= ($paciente['uf'] == 'MG') ? 'selected' : '' ?>>Minas Gerais</option>
            <option value="PA" <?= ($paciente['uf'] == 'PA') ? 'selected' : '' ?>>Pará</option>
            <option value="PB" <?= ($paciente['uf'] == 'PB') ? 'selected' : '' ?>>Paraíba</option>
            <option value="PR" <?= ($paciente['uf'] == 'PR') ? 'selected' : '' ?>>Paraná</option>
            <option value="PE" <?= ($paciente['uf'] == 'PE') ? 'selected' : '' ?>>Pernambuco</option>
            <option value="PI" <?= ($paciente['uf'] == 'PI') ? 'selected' : '' ?>>Piauí</option>
            <option value="RJ" <?= ($paciente['uf'] == 'RJ') ? 'selected' : '' ?>>Rio de Janeiro</option>
            <option value="RN" <?= ($paciente['uf'] == 'RN') ? 'selected' : '' ?>>Rio Grande do Norte</option>
            <option value="RS" <?= ($paciente['uf'] == 'RS') ? 'selected' : '' ?>>Rio Grande do Sul</option>
            <option value="RO" <?= ($paciente['uf'] == 'RO') ? 'selected' : '' ?>>Rondônia</option>
            <option value="RR" <?= ($paciente['uf'] == 'RR') ? 'selected' : '' ?>>Roraima</option>
            <option value="SC" <?= ($paciente['uf'] == 'SC') ? 'selected' : '' ?>>Santa Catarina</option>
            <option value="SP" <?= ($paciente['uf'] == 'SP') ? 'selected' : '' ?>>São Paulo</option>
            <option value="SE" <?= ($paciente['uf'] == 'SE') ? 'selected' : '' ?>>Sergipe</option>
            <option value="TO" <?= ($paciente['uf'] == 'TO') ? 'selected' : '' ?>>Tocantins</option>
            <option value="EX" <?= ($paciente['uf'] == 'EX') ? 'selected' : '' ?>>Estrangeiro</option>
          </select>
        </div>

        <div class="form-group col-md-4">
          <label for="inputCEP">CEP</label>
          <input type="text" name="cep" value="<?= $paciente['cep'] ?>" class="form-control" id="inputCEP" placeholder="CEP">
        </div>
        <div class="form-group col-md-2">
          <label for="inputCEP">Data da consulta</label>
          <input type="date" name="data_consulta" value="<?= $paciente['data_consulta'] ?>" class="form-control" id="inputCEP" placeholder="00/00/0000">
        </div>

        <div class="form-group col-md-3">
          <label for="inputCEP">Horário da consulta</label>
          <select id="inputsexo" name="horario_consulta" class="form-control">
            <option value="#" <?= ($paciente['horario_consulta'] == '#') ? 'selected' : '' ?>>Selecione um hórario</option>
            <option value="07:00" <?= ($paciente['horario_consulta'] == '07:00') ? 'selected' : '' ?>> 07:00</option>
            <option value="07:30" <?= ($paciente['horario_consulta'] == '07:30') ? 'selected' : '' ?>> 07:30</option>
            <option value="08:00" <?= ($paciente['horario_consulta'] == '08:00') ? 'selected' : '' ?>> 08:00</option>
            <option value="08:30" <?= ($paciente['horario_consulta'] == '08:30') ? 'selected' : '' ?>> 08:30</option>
            <option value="09:00" <?= ($paciente['horario_consulta'] == '09:00') ? 'selected' : '' ?>> 09:00</option>
            <option value="09:30" <?= ($paciente['horario_consulta'] == '09:30') ? 'selected' : '' ?>> 09:30</option>
            <option value="10:00" <?= ($paciente['horario_consulta'] == '10:00') ? 'selected' : '' ?>> 10:00</option>
            <option value="10:30" <?= ($paciente['horario_consulta'] == '10:30') ? 'selected' : '' ?>> 10:30</option>
            <option value="11:00" <?= ($paciente['horario_consulta'] == '11:00') ? 'selected' : '' ?>> 11:00</option>
            <option value="13:00" <?= ($paciente['horario_consulta'] == '13:00') ? 'selected' : '' ?>> 13:00</option>
            <option value="13:30" <?= ($paciente['horario_consulta'] == '13:30') ? 'selected' : '' ?>> 13:30</option>
            <option value="14:00" <?= ($paciente['horario_consulta'] == '14:00') ? 'selected' : '' ?>> 14:00</option>
            <option value="14:30" <?= ($paciente['horario_consulta'] == '14:30') ? 'selected' : '' ?>> 14:30</option>
            <option value="15:00" <?= ($paciente['horario_consulta'] == '15:00') ? 'selected' : '' ?>> 15:00</option>
            <option value="15:30" <?= ($paciente['horario_consulta'] == '15:30') ? 'selected' : '' ?>> 15:30</option>
            <option value="16:00" <?= ($paciente['horario_consulta'] == '16:00') ? 'selected' : '' ?>> 16:00</option>
            <option value="16:30" <?= ($paciente['horario_consulta'] == '16:30') ? 'selected' : '' ?>> 16:30</option>
            <option value="17:00" <?= ($paciente['horario_consulta'] == '17:00') ? 'selected' : '' ?>> 17:00</option>
          </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputCEP">Médico</label>
          <select id="inputsexo" name="profissional" class="form-control">
            <option value="#" <?= ($paciente['profissional'] == '#') ? 'selected' : '' ?>>Selecione um profissional</option>
            <option value="Clínico Geral" <?= ($paciente['profissional'] == 'Clínico Geral') ? 'selected' : '' ?>> Clínico Geral</option>
            <option value="Psiquiatra" <?= ($paciente['profissional'] == 'Psiquiatra') ? 'selected' : '' ?>> Psiquiatra</option>
            <option value="Urologista" <?= ($paciente['profissional'] == 'Urologista') ? 'selected' : '' ?>> Urologista</option>
            <option value="Oftalmologista" <?= ($paciente['profissional'] == 'Oftalmologista') ? 'selected' : '' ?>> Oftalmologista</option>
            <option value="Endocrinologista" <?= ($paciente['profissional'] == 'Endocrinologista') ? 'selected' : '' ?>> Endocrinologista</option>
            <option value="Pediatra" <?= ($paciente['profissional'] == 'Pediatra') ? 'selected' : '' ?>> Pediatra</option>
            <option value="Ortopedista" <?= ($paciente['profissional'] == 'Ortopedista') ? 'selected' : '' ?>> Ortopedista</option>
            <option value="Otorrinolaringologista" <?= ($paciente['profissional'] == 'Otorrinolaringologista') ? 'selected' : '' ?>> Otorrinolaringologista</option>
            <option value="Ginecologista/Obstetra" <?= ($paciente['profissional'] == 'Ginecologista/Obstetra') ? 'selected' : '' ?>> Ginecologista/Obstetra</option>
            <option value="Dermatologista" <?= ($paciente['profissional'] == 'Dermatologista') ? 'selected' : '' ?>> Dermatologista</option>
            <option value="Cirurgião" <?= ($paciente['profissional'] == 'Cirurgião') ? 'selected' : '' ?>> Cirurgião</option>
            <option value="Cardiologista" <?= ($paciente['profissional'] == 'Cardiologista') ? 'selected' : '' ?>> Cardiologista</option>
            <option value="Neurologista" <?= ($paciente['profissional'] == 'Neurologista') ? 'selected' : '' ?>> Neurologista</option>
          </select>
        </div>

        <div class="form-group col-md-12">
          <label for="inputAddress">Informe o motivo da consulta</label>
          <textarea type="text" name="motivo" class="form-control" id="inputAddress" placeholder="Informe o motivo da consulta" rows="4" cols="50">
        <?= $paciente['motivo'] ?>
      </textarea>
        </div>



        <input type="hidden" name="id" value="<?= $paciente['id_agendamento'] ?>">
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Atualizar</button>

          <a href="<?= base_url('vizualizarPaciente') ?>">
          <button type="button" class="btn btn-danger">Cancelar</button>
        </a>
        </div>
        
      </form>
    </div>

  </div>

</body>

</html>