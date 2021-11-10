<?php

namespace App\Controllers;

use App\Models\TeamModel;
use App\Models\PlayerModel;

class Team extends BaseController
{
    public function __construct()
    {
        $this->team     = new TeamModel();
        $this->player   = new PlayerModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'esport team',
            'team'      => $this->team->getTeam()
        ];
        
        return view('frontend/team/index', $data);
    }
    
    public function detail($id)
    {   
        $teamm = $this->team->getTeam($id);

        $data = [
            'title'     => $teamm['nama_team'],
            'team'      => $this->team->getTeam($id),
            'player'    => $this->team->getTeam_Player($id)
        ];

        return view('frontend/team/show', $data);
    }

}
