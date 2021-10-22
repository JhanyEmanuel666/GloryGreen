<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table = 'tb_team';
    protected $allowedFields = [
        'id_team', 'nama_team', 'jumlah_player',  'about_team', 'achievements', 'img_team'
    ];

    public function getTeam($id = false)
    {
        if($id === false)
        {
            return $this->table('tb_team')
                ->select('*')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('tb_team')
                ->select('*')
                ->where('tb_team.id_team', $id)
                ->get()
                ->getRowArray();
        }
    }

    public function getTeam_Player($id)
    {
        return $this->table('tb_team')
            ->join('tb_player', 'tb_player.id_team = tb_team.id_team')
            ->select('*')
            ->where('tb_player.id_team', $id)
            ->get()
            ->getResultArray();
    }

    public function insertTeam($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateTeam($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_team' => $id]);
    }

    public function deleteTeam($id)
    {
        return $this->db->table($this->table)->delete(['id_team' => $id]);
    }
}
