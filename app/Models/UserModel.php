<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';

    protected $allowedFields = ['name', 'password', 'create_date', 'is_manager', 'role_id'];


    public function getUser($name,$password)
    {

    }
}