<?php

namespace App\Models;

use CodeIgniter\Model;

class EventRegistrationModel extends Model
{
    protected $table            = 'event_registrations';
    protected $primaryKey       = 'id';
    protected $returnType       = 'object';
    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'event_id',
        'name',
        'email',
        'mobile',
        'address',
        'message',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        'event_id' => 'required|integer',
        'name'     => 'required|min_length[3]|max_length[100]',
        'email'    => 'required|valid_email',
        'mobile'   => 'required|min_length[10]|max_length[15]',
        'address'  => 'required'
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Name is required.'
        ],
        'email' => [
            'required'    => 'Email is required.',
            'valid_email' => 'Enter a valid email address.'
        ],
        'mobile' => [
            'required' => 'Mobile number is required.'
        ],
        'address' => [
            'required' => 'Address is required.'
        ]
    ];
}