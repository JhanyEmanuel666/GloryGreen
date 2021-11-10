<?php

namespace App\Controllers;

use App\Models\BeritaModel;

class berita extends BaseController
{
    public function __construct()
    {
        $this->berita     = new BeritaModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Berita',
            'berita'    => $this->berita->getBerita()
        ];
        
        return view('frontend/berita/index', $data);
    }
    
    public function show($id)
    {   
        $beritam = $this->berita->getberita($id);

        $data = [
            'title'     => 'News',
            'list'      => $this->berita->getBerita(),
            'berita'    => $this->berita->getberita($id)
        ];

        return view('frontend/berita/show', $data);
    }

}
