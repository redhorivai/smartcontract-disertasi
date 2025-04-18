<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    public function getPerson()
    {
        $query = $this->db->table('users a');
        $query->select('a.user_id,a.id_person,a.username,a.email,a.telp,a.is_active,a.created_dttm,b.nama_lengkap,b.nik,b.jenis_kelamin,b.alamat,b.created_dttm');
        $query->join('persons b', 'b.person_id = a.id_person', 'left');
        $query->where('a.status_cd', 'normal');
        $query->orderBy('a.user_id', 'DESC');
        $return = $query->get();
        return $return->getResult();
    }
    public function updateData($id,$data)
    {
        $query = $this->db->table('users');
        $query->where('user_id', $id);
        $query->set($data);
        return $query->update();
    }
}
