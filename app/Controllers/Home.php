<?php

namespace App\Controllers;

use App\Models\TeamModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->team = new TeamModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'home',
            'team'      => $this->team->getTeam()
        ];
        
        return view('frontend/index', $data);
    }
}
