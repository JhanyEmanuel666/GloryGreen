<?php

namespace App\Models;

use CodeIgniter\Model;

class SeasonModel extends Model
{
    protected $table = 'tb_season_mpl';
    protected $allowedFields = [
        'id_season', 'nama_season', 'id_team_juara', 'mvp', 'img_team_juara'
    ];

    public function getSeason($id = false)
    {
        if($id === false)
        {
            return $this->table('tb_season_mpl')
                ->join('tb_team', 'tb_team.id_team = tb_season_mpl.id_team_juara')
                ->join('tb_player','tb_player.id_player = tb_season_mpl.mvp')
                ->select('*')
                ->orderBy('nama_season', 'ASC')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('tb_season_mpl')
                ->join('tb_team', 'tb_team.id_team = tb_season_mpl.id_team_juara')
                ->join('tb_player', 'tb_player.id_player = tb_season_mpl.mvp')
                ->select('*')
                ->where('tb_season_mpl.id_season', $id)
                ->get()
                ->getRowArray();
        }
    }

    public function getSeasonNow()
    {
        return $this->table('tb_season_mpl')
            ->join('tb_team', 'tb_team.id_team = tb_season_mpl.id_team_juara')
            ->join('tb_player','tb_player.id_player = tb_season_mpl.mvp')
            ->select('*')
            ->orderBy('tb_season_mpl.id_season','DESC')
            ->limit(1)
            ->get()
            ->getResultArray();
    }

    public function insertSeason($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateSeason($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_season' => $id]);
    }

    public function deleteSeason($id)
    {
        return $this->db->table($this->table)->delete(['id_season' => $id]);
    }
}
