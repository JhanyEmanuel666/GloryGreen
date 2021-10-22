<?php

namespace App\Models;

use CodeIgniter\Model;

class PlayerModel extends Model
{
    protected $table = 'tb_player';
    protected $allowedFields = [
        'id_player', 'id_team', 'nama_player', 'ign',  'role', 'img_player'
    ];

    public function getPlayer($id = false)
    {
        if($id === false)
        {
            return $this->table('tb_player')
                ->join('tb_team','tb_team.id_team = tb_player.id_team')
                ->select('*')
                ->orderBy('tb_player.ign', 'ASC')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('tb_player')
                ->join('tb_team', 'tb_team.id_team = tb_player.id_team')
                ->select('*')
                ->where('tb_player.id_player', $id)
                ->get()
                ->getRowArray();
        }
    }

    public function insertPlayer($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updatePlayer($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_player' => $id]);
    }

    public function deletePlayer($id)
    {
        return $this->db->table($this->table)->delete(['id_player' => $id]);
    }
}
