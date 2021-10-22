<?php

namespace App\Controllers;

use App\Models\PlayerModel;

class Player extends BaseController
{
    public function __construct()
    {
        $this->player   = new PlayerModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Player',
            'player'    => $this->player->getplayer()
        ];
        
        return view('frontend/player/index', $data);
    }
    
    public function detail($id)
    {        
        $data = [
            'title'     => 'team / show',
            'player'    => $this->player->getPlayer($id)
        ];

        return view('frontend/player/show', $data);
    }

}
