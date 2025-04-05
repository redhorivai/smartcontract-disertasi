<?php

namespace App\Controllers;

use App\Models\PenggunaModel;
use CodeIgniter\API\ResponseTrait;

class Pengguna extends BaseController
{
    use ResponseTrait;
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
            'title'  => 'data pengguna',
            'active' => 'pengguna',
        ];
        return view('pengguna/index', $data);
    }

    public function list()
    {
        $data = json_decode('
        {
        "draw": 1,
        "recordsTotal": 57,
        "recordsFiltered": 57,
        "data": [
                        {
                        "cek": "Airi",
                        "col": "Satou",
                        "action": "Accountant"
                        }
                ]
        }');
        return $this->respond($data);
    }

    public function getData()
    {
        $res = $this->m_pengguna->getPengguna();
        // print_r($res);
        if (count($res) > 0) {
            foreach ($res as $data) {
                $output[] = array(
                    'cek'   => "<div>
                                <label class='customcheckbox'>
                                <input type='checkbox' class='listCheckbox' />
                                <span class='checkmark'></span>
                                </label>
                                </div>",
                    'col'   => "$data->email",
                    'action' => "<div style='text-align: center;'><div class='btn-group'>
                                <span style='padding-right:10px;'><button type='button' class='btn btn-outline-danger btn-sm'><i class='m-r-20 mdi mdi-account-off'></i></button></span>
                                <button type='button' class='btn btn-info btn-sm dropdown-toggle dropdown-toggle-split' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <i class='m-r-20 mdi mdi-table-edit'></i>
                                </button>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='#'>Perubahan</a>
                                        <a class='dropdown-item' href='#'>Hapus</a>
                                    </div>
                                </div></div>",
                );
                $ret = array('data' => $output);
            }
        } else {
            $ret = array(['data' => []]);
        }
        // dd($ret);
        return $this->response->setJSON($ret);
    }
}
