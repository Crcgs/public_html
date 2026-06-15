<?php

namespace App\Models;

use CodeIgniter\Model;

class GlossaryModel extends Model
{
    protected $table = 'glossary';
    protected $primaryKey = 'id';
    protected $returnType = 'object';

    protected $allowedFields = [
        'word',
        'dictionary'
    ];
}