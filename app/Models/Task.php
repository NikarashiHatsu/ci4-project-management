<?php

namespace App\Models;

use CodeIgniter\Model;

class Task extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'tasks';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'object';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = [
        'project_id',
        'name',
        'description',
        'status',
    ];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'project_id' => 'required|integer',
        'name' => 'required|string|min_length[4]',
        'description' => 'required|string',
        'status' => 'required|string',
    ];
    protected $validationMessages   = [
        'project_id' => [
            'required' => 'ID Project harus diisi.',
            'integer' => 'ID Project harus berbentuk integer.',
        ],
        'name' => [
            'required' => 'Nama tugas harus diisi.',
            'string' => 'Nama tugas harus berbentuk string.',
            'min_length' => 'Nama tugas harus lebih dari 4 karakter.',
        ],
        'description' => [
            'required' => 'Deskripsi tugas harus diisi.',
            'string' => 'Deskripsi tugas harus berbentuk string.',
        ],
        'status' => [
            'required' => 'Status tugas harus diisi.',
            'string' => 'Status tugas harus berbentuk string.',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];
}
