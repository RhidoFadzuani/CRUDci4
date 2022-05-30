<?php

namespace App\Models;

use CodeIgniter\Model;

class usermodels extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['NPM', 'Nama', 'jenis_kelamin','fakultas', 'no_telp','tanggal_lahir','alamat'];

    public function getmahasiswa()
    {
        return $this->findAll();
    }
}