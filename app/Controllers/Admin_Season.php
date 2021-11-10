<?php

namespace App\Controllers;

use App\Models\SeasonModel;
use App\Models\TeamModel;
use App\Models\PlayerModel;

class Admin_Season extends BaseController
{
    protected $helpers = ['form', 'url'];

    public function __construct()
    {
        $this->season = new SeasonModel();
        $this->team     = new TeamModel();
        $this->player   = new PlayerModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Season MPL',
            'season'    => $this->season->getSeason()
        ];

        return view('admin/season_mpl/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'season / add new',
            'team'  => $this->team->getTeam(),
            'player' => $this->player->getPlayer()
        ];

        return view('admin/season_mpl/create', $data);
    }

    public function save()
    {
        $image = $this->request->getFile('img_juara');
        // random nama gbr
        $name = $image->getRandomName();

        $data = [
            'nama_season'       => $this->request->getPost("nm_season"),
            'id_team_juara'     => $this->request->getPost("id_juara"),
            'mvp'               => $this->request->getPost("id_mvp"),
            'img_team_juara'    => $name
        ];

        $image->move(ROOTPATH . 'public/image/season/', $name);

        $simpan = $this->season->insertSeason($data);

        if ($simpan) {
            session()->setFlashdata('success', 'Data berhasil ditambahkan');
            return redirect()->to(base_url('admin_season'));
        }
    }

    public function show($id)
    {
        $data = [
            'title'     => 'season / show',
            'season'    => $this->season->getSeason($id)
        ];

        return view('admin/season_mpl/show', $data);
    }

    public function edit($id)
    {
        $data = [
            'title'     => 'season / edit',
            'season'     => $this->season->getseason($id)
        ];

        return view('admin/season_mpl/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'facebook'  => $this->request->getPost("fb"),
            'instagram' => $this->request->getPost("ig"),
            'twitter'   => $this->request->getPost("tw"),
            'season'     => $this->request->getPost("season")
        ];

        $ubah = $this->season->updateseason($data, $id);
        if ($ubah) {
            session()->setFlashdata('info', 'Data berhasil terupdate');
            return redirect()->to(base_url('admin_season'));
        }
        
    }

    public function delete($id)
    {
        $data = $this->season->getseason($id);

        $hapus = $this->season->deleteseason($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Data berhasil dihapus');
            return redirect()->to(base_url('admin_season'));
        }
    }
}
