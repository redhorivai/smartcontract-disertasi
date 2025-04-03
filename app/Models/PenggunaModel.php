<?php

namespace App\Models\Backend;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    public function getPengguna()
    {
        $query = $this->db->table('users');
        $query->select('*');
        $query->where('status_cd', 'normal');
        $query->orderBy('user_id', 'DESC');
        $return = $query->get();
        return $return->getResult();
    }
}
