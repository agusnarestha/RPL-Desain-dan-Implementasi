<?php

namespace App\Controllers;

use App\Models\Model_Pembeli;

class tampilUser extends BaseController
{
    // protected $user;

    function __construct()
    {
        $this->pembeli = new Model_Pembeli();
    }
    #Menampilkan tabel pembeli
    public function index()
    {
        // $data['user'] = $this->user->showUser();
        $data['pembeli'] = $this->pembeli->getPembeli();
        echo view('tabel', $data);
    }

    public function deleteUser($no_ktp)
    {
        $this->user->deleteUser($no_ktp);
        session()->setFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to(base_url('tampilUser'));
    }
}
