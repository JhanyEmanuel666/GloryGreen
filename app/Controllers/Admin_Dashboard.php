<?php

namespace App\Controllers;

use App\Models\TeamModel;
use App\Models\PlayerModel;

class Admin_Dashboard extends BaseController
{
    public function __construct()
    {
        $this->team     = new TeamModel();
        $this->player   = new PlayerModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'dashboard',
            'team'      => $this->team->countAll(),
            'player'    => $this->player->countAll()
        ];
        
        return view('admin/index', $data);
    }
}
