<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Admin extends Seeder
{
    public function run()
    {
        $data = [
            [
                'NPM'          =>  'D1A210032',
                'nama'          =>  'ALY RHIDO FAZUANI',
                'jenis_kelamin' =>  'pria',
                'no_telp'       =>  '012345678910',
                'tanggal_lahir' =>  '2002-05-25',
                'alamat'        =>  'subang',
                'created_at' => Time::now()
            ]
            ];
            
            $this->db->table('user')->insertBatch($data);
    }
}