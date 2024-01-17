<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function inserir()
    {
        $cpf = $this->request->getPost('cpf');
        $n_sus = $this->request->getPost('n_sus');
        $nome_paciente = $this->request->getPost('nome_paciente');
        $data_nasc = $this->request->getPost('data_nasc');
        $email = $this->request->getPost('email');
        $telefone = $this->request->getPost('telefone');
        $rua = $this->request->getPost('rua');
        $bairro = $this->request->getPost('bairro');
        $numero = $this->request->getPost('numero');
        $cidade = $this->request->getPost('cidade');
        $uf = $this->request->getPost('uf');
        $cep = $this->request->getPost('cep');
        $data_consulta = $this->request->getPost('data_consulta');
        $horario_consulta = $this->request->getPost('horario_consulta');
        $profissional = $this->request->getPost('profissional');
        $motivo = $this->request->getPost('motivo');
        $sexo = $this->request->getPost('sexo');


        $dados = [
            'cpf' => $cpf,
            'n_sus' => $n_sus,
            'nome_paciente' => $nome_paciente,
            'data_nasc' => $data_nasc,
            'email' => $email,
            'telefone' => $telefone,
            'rua' => $rua,
            'bairro' => $bairro,
            'numero' => $numero,
            'cidade' => $cidade,
            'uf' => $uf,
            'cep' => $cep,
            'data_consulta' => $data_consulta,
            'horario_consulta' => $horario_consulta,
            'profissional' => $profissional,
            'motivo' => $motivo,
            'sexo' => $sexo,
        ];

        //$pacienteModel = new \App\Models\PacienteModel();
        $pacienteModel = model('PacienteModel');

        $pacienteModel->insert($dados);

        return redirect()->to(base_url('/'));
    }

    public function excluir()
    {

        $id = $this->request->getPost('id');

        $pacienteModel = model('PacienteModel');

        $pacienteModel->delete($id);

        return redirect()->to(base_url('vizualizarPaciente'));
    }

    public function editar($id)
    {

        $pacienteModel = model('PacienteModel');

        $paciente = $pacienteModel->find($id);


        if ($paciente == null) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        } else {

            $dados = [
                'paciente' => $paciente
            ];

            /*$pacienteModel->update($id, $dados);*/

            return view('editarUsuario', $dados);
        }
    }

    public function alterar($id)
    {
        $cpf = $this->request->getPost('cpf');
        $n_sus = $this->request->getPost('n_sus');
        $nome_paciente = $this->request->getPost('nome_paciente');
        $data_nasc = $this->request->getPost('data_nasc');
        $email = $this->request->getPost('email');
        $telefone = $this->request->getPost('telefone');
        $rua = $this->request->getPost('rua');
        $bairro = $this->request->getPost('bairro');
        $numero = $this->request->getPost('numero');
        $cidade = $this->request->getPost('cidade');
        $uf = $this->request->getPost('uf');
        $cep = $this->request->getPost('cep');
        $data_consulta = $this->request->getPost('data_consulta');
        $horario_consulta = $this->request->getPost('horario_consulta');
        $profissional = $this->request->getPost('profissional');
        $motivo = $this->request->getPost('motivo');
        $sexo = $this->request->getPost('sexo');

        $dados = [
            'cpf' => $cpf,
            'n_sus' => $n_sus,
            'nome_paciente' => $nome_paciente,
            'data_nasc' => $data_nasc,
            'email' => $email,
            'telefone' => $telefone,
            'rua' => $rua,
            'bairro' => $bairro,
            'numero' => $numero,
            'cidade' => $cidade,
            'uf' => $uf,
            'cep' => $cep,
            'data_consulta' => $data_consulta,
            'horario_consulta' => $horario_consulta,
            'profissional' => $profissional,
            'motivo' => $motivo,
            'sexo' => $sexo,
        ];

        //$clienteModel = new \App\Models\ClienteModel();
        $pacienteModel = model('PacienteModel');

        $pacienteModel->update($id, $dados);

        return redirect()->to(base_url('vizualizarPaciente'));
    }

    public function vizualizarPaciente()
    {
        

        $pacienteModel = new \App\Models\PacienteModel();
        $paciente = $pacienteModel->getPaciente();

        $dadosView = [
            'paciente' => $paciente
        ];

        return view('vizualizarPaciente', $dadosView);
    }
    
}
