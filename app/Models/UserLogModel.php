<?php

namespace App\Models;

use CodeIgniter\Model;

class UserLogModel extends Model
{
     protected $table = 'activity_logs';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'username',
        'email',
        'module',
        'action',
        'description',
        'ip_address',
        'browser',
        'status',
        'created_at'
    ];

    public function addLog($user, $module, $action, $description = "")
    {
        return $this->insert([
            'user_id' => $user->id,
            'username' => $user->username,
            'email' => $user->email,
            'module' => $module,
            'action' => $action,
            'description' => $description,
            'ip_address' => service('request')->getIPAddress(),
            'browser' => service('request')->getUserAgent()->getBrowser(),
            'status' => 'Success',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }

    public function getLogs()
    {
        return $this->orderBy('id', 'DESC')->findAll();
    }
}