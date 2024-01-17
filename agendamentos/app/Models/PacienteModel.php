<?php

namespace App\Models;

use CodeIgniter\Model;

class PacienteModel extends Model
{
    protected $table      = 'agendamentos';
    protected $primaryKey = 'id_agendamento';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['cpf', 'n_sus', 'nome_paciente', 'data_nasc', 'email', 'telefone', 'rua', 'bairro', 'numero', 'cidade', 'uf','cep', 'data_consulta', 'horario_consulta', 'profissional', 'motivo', 'sexo' ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

     //Retornar todos os pacientes
    public function getPaciente () {
        //$query = $this->db->query ('select * from agendamentos;');
        
        //$query = $this->db->table('agendamentos')->like('nome', 'a')->get();
        
        $query = $this->db->table('agendamentos')->get();

        if ($this->returnType == 'object')
            return $query->getResult();
        else
            return $query->getResultArray();
    }
}

   