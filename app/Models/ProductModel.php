<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'product';

    protected $allowedFields = ['name', 'description', 'image'];


    public function getProduct($name = false)
    {
        if ($name === false) {
            return $this->findAll();
        }

        return $this->where(['name' => $name])->first();
    }
}