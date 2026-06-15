<?php

namespace App\Models;

use CodeIgniter\Model;

class PlanModel extends Model
{
    protected $table = 'plans';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['plan_name', 'plan_price', 'plan_duration', 'description', 'status'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'plan_name' => 'required|min_length[3]|max_length[255]',
        'plan_price' => 'required|numeric',
        'plan_duration' => 'required|integer',
        'description' => 'permit_empty',
        'status' => 'permit_empty|in_list[0,1]'
    ];

    protected $validationMessages = [
        'plan_name' => [
            'required' => 'Plan name is required',
            'min_length' => 'Plan name must be at least 3 characters long',
        ],
        'plan_price' => [
            'required' => 'Plan price is required',
            'numeric' => 'Plan price must be a valid number',
        ],
        'plan_duration' => [
            'required' => 'Plan duration is required',
            'integer' => 'Plan duration must be a valid number',
        ],
    ];

    protected $skipValidation = false;
} 