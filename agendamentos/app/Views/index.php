<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro de Pacientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('css/index.css') ?>">

  <!--<style>
    
    body {
      background-color: blueviolet;
    }

    
  </style> -->
</head>

<body>

  <h1>Cadastro de Pacientes</h1>
  <a href="<?= base_url('vizualizarPaciente') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-eye"></i> VISUALIZAR PACIENTES CADASTRADOS</a>
  <hr />

  <div class="container">
  <div class="form">
    <form class="row g-3" method="post" action="<?= base_url('inserir') ?>">

      <div class="form-group col-md-6">
        <label for="inputEmail4">Nome Completo</label>
        <input type="text" name="nome_paciente" class="form-control" id="inputEmail4" placeholder="Nome Completo">
      </div>
      <div class="form-group col-md-3">
        <label for="inputPassword4">CPF</label>
        <input type="text" name="cpf" class="form-control" id="inputPassword4" placeholder="CPF">
      </div>
      <div class="form-group col-md-3">
        <label for="inputPassword4">Cartão de SUS</label>
        <input type="text" name="n_sus" class="form-control" id="inputPassword4" placeholder="Número do cartão de SUS">
      </div>
      <div class="form-group col-md-2">
        <label for="inputAddress">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" id="inputAddress" placeholder="00/00/0000">
      </div>

      <div class="form-group col-md-3">
        <label for="inputsexo">Sexo</label>
        <select id="inputsexo" name="sexo" class="form-control">
          <option value="#">Qual gênero você se identifica?</option>
          <option value="M">Masculino</option>
          <option value="F">Feminino</option>
          <option value="Outro">Juridico/Não definido</option>
        </select>
      </div>

      <div class="form-group col-md-4">
        <label for="inputEmail4">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
      </div>
      <div class="form-group col-md-3">
        <label for="telefonecliente">Telefone</label>
        <input type="tel" name="telefone" class="form-control" id="telefonecliente" placeholder="Telefone">
      </div>

      <div class="form-group col-md-6">
        <label for="inputAddress">Rua</label>
        <input type="text" name="rua" class="form-control" id="inputAddress" placeholder="Rua">
      </div>
      <div class="form-group col-md-4">
        <label for="inputCity">Bairro</label>
        <input type="text" name="bairro" class="form-control" id="inputCity" placeholder="Bairro">
      </div>
      <div class="form-group col-md-2">
        <label for="inputCEP">Número</label>
        <input type="text" name="numero" class="form-control" id="inputCEP" placeholder="Número">
      </div>

      <div class="form-group col-md-4">
        <label for="inputCity">Cidade</label>
        <input type="text" name="cidade" class="form-control" id="inputCity" placeholder="Cidade">
      </div>
      <div class="form-group col-md-3">
        <label for="inputEstado">Estado</label>
        <select id="inputEstado" name="uf" class="form-control">
          <option value="#">Selecione um Estado</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
          <option value="EX">Estrangeiro</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="inputCEP">CEP</label>
        <input type="text" name="cep" class="form-control" id="inputCEP" placeholder="CEP">
      </div>

      <div class="form-group col-md-2">
        <label for="inputCEP">Data da consulta</label>
        <input type="date" name="data_consulta" class="form-control" id="inputCEP" placeholder="00/00/0000">
      </div>
      <div class="form-group col-md-3">
        <label for="inputCEP">Horário da consulta</label>
        <select id="inputsexo" name="horario_consulta" class="form-control">
          <option value="#">Selecione um hórario</option>
          <option value="07:00">07:00</option>
          <option value="07:30">07:30</option>
          <option value="08:00">08:00</option>
          <option value="08:30">08:30</option>
          <option value="09:00">09:00</option>
          <option value="09:30">09:30</option>
          <option value="10:00">10:00</option>
          <option value="10:30">10:30</option>
          <option value="11:00">11:00</option>
          <option value="11:30">11:30</option>
          <option value="13:00">13:00</option>
          <option value="13:30">13:30</option>
          <option value="14:00">14:00</option>
          <option value="14:30">14:30</option>
          <option value="15:00">15:00</option>
          <option value="15:30">15:30</option>
          <option value="16:00">16:00</option>
          <option value="16:30">16:30</option>
          <option value="17:00">17:00</option>
        </select>
      </div>

      <div class="form-group col-md-4">
        <label for="inputCEP">Médico</label>
        <select id="inputsexo" name="profissional" class="form-control">
          <option value="#">Selecione um profissional</option>
          <option value="Clínico Geral">Clínico Geral</option>
          <option value="Psiquiatra">Psiquiatra</option>
          <option value="Urologista">Urologista</option>
          <option value="Oftalmologista">Oftalmologista</option>
          <option value="Endocrinologista">Endocrinologista</option>
          <option value="Pediatra">Pediatra</option>
          <option value="Ortopedista">Ortopedista</option>
          <option value="Otorrinolaringologista">Otorrinolaringologista</option>
          <option value="Ginecologista/Obstetra">Ginecologista/Obstetra</option>
          <option value="Dermatologista">Dermatologista</option>
          <option value="Cirurgião">Cirurgião</option>
          <option value="Cardiologista">Cardiologista</option>
          <option value="Neurologista">Neurologista</option>
        </select>
      </div>

      <div class="form-group col-md-12">
        <label for="inputAddress">Informe o motivo da consulta</label>
        <textarea type="text" name="motivo" class="form-control" id="inputAddress" placeholder="Informe o motivo da consulta" rows="4" cols="50">
            </textarea>

      </div>



      <div class="col-12">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      
    </form>
  </div>

  </div>

</body>

</html>