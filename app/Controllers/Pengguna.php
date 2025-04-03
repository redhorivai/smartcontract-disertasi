<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class Pengguna extends BaseController
{
    protected $m_pengguna;
    protected $session;
    public function __construct()
    {
        $this->m_pengguna = new PenggunaModel();
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function index()
    {
        $data = [
            'title'  => 'DATA PENGGUNA',
            'active' => 'pengguna',
        ];
        return view('pengguna/index', $data);
    }
}
