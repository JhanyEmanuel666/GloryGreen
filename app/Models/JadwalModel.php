<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'tb_jadwal';
    protected $allowedFields = [
        'id_jadwal', 'id_jadwal_reguler','team_1', 'team_2', 'waktu'
    ];

    public function getJadwal($id = false)
    {
        if($id === false)
        {   
            return $this->table('tb_jadwal')
                ->select('*')
                ->join('tb_jadwal_reguler', 'tb_jadwal_reguler.id = tb_jadwal.id_jadwal_reguler')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('tb_jadwal')
                ->select('*')
                ->join('tb_jadwal_reguler', 'tb_jadwal_reguler.id = tb_jadwal.id_jadwal_reguler')
                ->where('tb_jadwal.id_jadwal', $id)
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
