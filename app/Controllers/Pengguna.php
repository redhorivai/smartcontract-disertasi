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
            'title'  => 'data pengguna',
            'active' => 'pengguna',
        ];
        return view('pengguna/index', $data);
    }

    public function getData()
    {
        $res = $this->m_pengguna->getPerson();
        // print_r($res);
        if (count($res) > 0) {
            foreach ($res as $data) {
                if ($data->jenis_kelamin == 'L') {
                    $jk = 'Laki-laki';
                } else {
                    $jk = 'Perempuan';
                }
                if ($data->is_active == 'active') {
                    $status = "<span class='badge badge-pill badge-success'><i class='mdi mdi-account-check'></i></span>";
                    $button = "<span style='padding-right:5px;'><button type='button' class='btn btn-outline-danger btn-sm' id='#ts-success' onclick='_deactive(\"$data->user_id\",\"$data->id_person\",\"$data->nama_lengkap\")'><i class='m-r-20 mdi mdi-account-off'></i></button></span>";
                } else {
                    $status = "<span class='badge badge-pill badge-danger'><i class='mdi mdi-account-off'></i></span>";
                    $button = "<span style='padding-right:5px;'><button type='button' class='btn btn-outline-success btn-sm' id='#ts-error' onclick='_active(\"$data->user_id\",\"$data->id_person\",\"$data->nama_lengkap\")'><i class='m-r-20 mdi mdi-account-check'></i></button></span>";
                }
                $output[] = array(
                    'cek'   => "<div>
                                <label class='customcheckbox'>
                                <input type='checkbox' name='user_id[]' class='listCheckbox' value='$data->user_id' />
                                <span class='checkmark'></span>
                                </label>
                                </div>",
                    'col'   => "<div>
                                <div>$data->nama_lengkap $status</div>
                                <div>$data->nik</div>
                                <div>$data->email</div>
                                </div>",
                    'action' => "<div class='text-center'><div class='btn-group'>
                                $button
                                <button type='button' class='btn btn-info btn-sm dropdown-toggle dropdown-toggle-split' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <i class='m-r-20 mdi mdi-table-edit'></i>
                                </button>
                                    <div class='dropdown-menu'>
                                        <a class='dropdown-item' href='javascript:void(0)' onclick='_editData(\"$data->user_id\",\"$data->id_person\",\"$data->nama_lengkap\")'>Perubahan</a>
                                        <a class='dropdown-item' href='javascript:void(0)' onclick='_delData(\"$data->user_id\",\"$data->id_person\",\"$data->nama_lengkap\")'>Hapus</a>
                                        <a class='dropdown-item' href='javascript:void(0)' onclick='_resetPassword(\"$data->user_id\",\"$data->id_person\",\"$data->nama_lengkap\")'>Reset Password</a>
                                    </div>
                                </div></div>",
                );
                $ret = array('data' => $output);
            }
        } else {
            $ret = array('data' => []);
        }
        // dd($ret);
        return $this->response->setJSON($ret);
    }

    public function active()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getPost('user_id');
            $data = ['is_active' => 'active'];
            $this->m_pengguna->updateData($id, $data);
            $msg = ['sukses' => 'Aktivasi akun user telah dilakukan.'];
            echo json_encode($msg);
        } else {
            exit('Request Error');
        }
    }
    
    public function deactive()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getPost('user_id');
            $data = ['is_active' => 'deactive'];
            $this->m_pengguna->updateData($id, $data);
            $msg = ['sukses' => 'Akun user telah di non-aktifkan.'];
            echo json_encode($msg);
        } else {
            exit('Request Error');
        }
    }

    public function del_data()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getPost('user_id');
            $data = [
                'nullified_dttm' => date('Y-m-d H:i:s'),
                'status_cd'      => 'nullified',
            ];
            $this->m_pengguna->updateData($id, $data);
            $msg = ['sukses' => 'Akun user telah di menghapus.'];
            echo json_encode($msg);
        } 
        else {
            exit('Request Error');
        }
    }

    public function reset_password()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getPost('user_id');
            $data = ['password' => sha1(md5('123456')),];
            $this->m_pengguna->updateData($id, $data);
            $msg = ['sukses' => 'Akun user telah di reset.'];
            echo json_encode($msg);
        } 
        else {
            exit('Request Error');
        }
    }
}
