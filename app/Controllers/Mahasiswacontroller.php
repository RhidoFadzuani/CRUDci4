<?php

namespace App\Controllers;

use App\Models\usermodels;

class Mahasiswacontroller extends BaseController
{
    public function index()
    {
        $users = new usermodels();
        $data = $users->getmahasiswa();
        return view('dashboard', compact('data'));
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store()
    {
        if (!$this->validate([
            'NPM' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'Nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'tanggal lahir Harus diisi'
                ]
            ],
            'fakultas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'jenis kelamin Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'no telepon Harus diisi'
                ]
            ],

            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        } else {


            $usermodels = new usermodels();

            //insert data into database
            $usermodels->insert([
                'NPM' => $this->request->getVar('NPM'),
                'Nama' => $this->request->getVar('Nama'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'fakultas' => $this->request->getVar('fakultas'),
                'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
                'no_telp' => $this->request->getVar('no_telp'),
                'alamat' => $this->request->getVar('alamat')
            ]);

            session()->setFlashdata('message', 'Tambah Data mahasiswa Berhasil');
            return redirect()->to('/');
        }
    }

    function delete($id)
    {
        $usermodels = new usermodels();

        $dataMahasiswa = $usermodels->find($id);

        if (empty($dataMahasiswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data mahasiswa Tidak ditemukan !');
        }

        $usermodels->delete($id);

        session()->setFlashdata('messagehapus', 'hapus Data mahasiswa Berhasil');

        return redirect()->to('/');
    }

    public function edit($id)
    {
     
        
        $usermodels = new usermodels();

        $dataMahasiswa = $usermodels->find($id);
            
        return view('edit', compact('dataMahasiswa'));
    }
  

    public function update($id)
    {
        dd($this->request->getVar());
    }


    // public function index()
    // {
    //     $users = new UserModel();
    //     $data = $users->getUsers();
    //     return view('user', compact('data'));
    // }

}
