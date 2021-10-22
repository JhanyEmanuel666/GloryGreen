<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalRegulerModel extends Model
{
    protected $table = 'tb_jadwal_reguler';
    protected $allowedFields = ['id', 'nama'];

    public function getReguler($id = false)
    {
        if($id === false)
        {   
            return $this->table('tb_jadwal_reguler')
                ->select('*')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('tb_jadwal_reguler')
                ->select('*')
                ->where('id', $id)
                ->get()
                ->getRowArray();
        }
    }

    public function insertjadwal($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updatejadwal($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_jadwal' => $id]);
    }

    public function deletejadwal($id)
    {
        return $this->db->table($this->table)->delete(['id_jadwal' => $id]);
    }
}
