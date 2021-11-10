<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'tb_berita';
    protected $allowedFields = [
        'id_berita', 'judul', 'isi_berita',  'tgl_post', 'img_berita'
    ];

    public function getBerita($id = false)
    {
        if($id === false)
        {
            return $this->table('tb_berita')
                ->select('*')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('tb_berita')
                ->select('*')
                ->where('id_berita', $id)
                ->get()
                ->getRowArray();
        }
    }

    public function insertBerita($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateBerita($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_berita' => $id]);
    }

    public function deleteBerita($id)
    {
        return $this->db->table($this->table)->delete(['id_berita' => $id]);
    }
}
