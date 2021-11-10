<?php

namespace App\Controllers;

use App\Models\AboutModel;

class About extends BaseController
{
    public function __construct()
    {
        $this->about = new AboutModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'about us',
            'about'     => $this->about->getAbout()
        ];
        
        return view('frontend/about/index', $data);
    }

}
