<?php

namespace App\Controllers;

use App\Models\SeasonModel;

class Season_mpl extends BaseController
{
    public function __construct()
    {
        $this->season    = new SeasonModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Season MPL',
            'season'    => $this->season->getSeason(),
            'seasonNow' => $this->season->getseasonNow()
        ];

        return view('frontend/season/index', $data);
    }
    
    public function show($id)
    {   
        $seasonm = $this->season->getSeason($id);

        $data = [
            'title'     => 'season',
            'list'      => $this->season->getSeason(),
            'season'    => $this->season->getSeason($id)
        ];

        return view('frontend/season/show', $data);
    }

}
