<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $table = 'tb_jadwal';
    protected $allowedFields = [
        'id_jadwal', 'id_jadwal_reguler','img_jadwal'
    ];

    public function getJadwalAdmin($id = false)
    {
        if($id === false)
        {   
            return $this->table('tb_jadwal')
                ->select('*')
                ->join('tb_jadwal_reguler', 'tb_jadwal_reguler.id = tb_jadwal.id_jadwal_reguler')
                ->orderBy('tb_jadwal.id_jadwal', 'DESC')
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

    public function getJadwal($id = false)
    {
        if($id === false)
        {   
            return $this->table('tb_jadwal')
                ->select('*')
                ->join('tb_jadwal_reguler', 'tb_jadwal_reguler.id = tb_jadwal.id_jadwal_reguler')
                ->orderBy('tb_jadwal.id_jadwal', 'DESC')
                ->limit(1)
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

    public function getJadwalByWeek($id_jd = false)
    {
        if ($id_jd === false) {
            return $this->table('tb_jadwal')
            ->join('tb_jadwal_reguler', 'tb_jadwal_reguler.id = tb_jadwal.id_jadwal_reguler')
            ->select('*')
            ->get()
            ->getResultArray();
        } else{
            return $this->table('tb_jadwal')
            ->join('tb_jadwal_reguler', 'tb_jadwal_reguler.id = tb_jadwal.id_jadwal_reguler')
            ->select('*')
            ->where('tb_jadwal.id_jadwal_reguler', $id_jd)
            ->get()
            ->getResultArray();
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
