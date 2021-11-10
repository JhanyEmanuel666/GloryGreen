<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutModel extends Model
{
    protected $table = 'tb_about';
    protected $allowedFields = [
        'id_about', 'facebook', 'instagram',  'twitter', 'about'
    ];

    public function getAbout($id = false)
    {
        if($id === false)
        {
            return $this->table('tb_about')
                ->select('*')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('tb_about')
                ->select('*')
                ->where('id_about', $id)
                ->get()
                ->getRowArray();
        }
    }

    public function insertAbout($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateAbout($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_about' => $id]);
    }

    public function deleteAbout($id)
    {
        return $this->db->table($this->table)->delete(['id_about' => $id]);
    }
}
