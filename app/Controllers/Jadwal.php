<?php

namespace App\Controllers;

use App\Models\JadwalModel;
use App\Models\JadwalRegulerModel;

class Jadwal extends BaseController
{
    public function __construct()
    {
        $this->jadwal     = new JadwalModel();
        $this->reg          = new JadwalRegulerModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'jadwal',
            'list'      => $this->reg->getReguler(),
            'jadwal'    => $this->jadwal->getJadwal()
        ];
        
        return view('frontend/jadwal/index', $data);
    }
    
    public function show($id)
    {   

        $data = [
            'title'     => 'Jadwal',
            'list'      => $this->jadwal->getJadwal(),
            'jadwal'    => $this->jadwal->getJadwal($id)
        ];

        return view('frontend/jadwal/show', $data);
    }

    public function jadwal($id)
    {
        $data = [
            'title'     => 'Jadwal',
            'list'      => $this->reg->getReguler(),
            'jadwal'    => $this->jadwal->getJadwalByWeek($id),
        ];

        return view('frontend/jadwal/index', $data);
    }
}
