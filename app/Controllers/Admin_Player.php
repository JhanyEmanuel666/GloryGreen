<?php

namespace App\Controllers;

use App\Models\PlayerModel;
use App\Models\TeamModel;

class Admin_Player extends BaseController
{
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->player     = new PlayerModel();
        $this->team       = new TeamModel();
    }

    public function index()
    {
        $data = [
            'title'         => 'esport player',
            'player'        => $this->player->getPlayer()
        ];
        
        return view('admin/player/index', $data);
    }

    public function create()
    {
        $data = [
            'title'     => 'player / create',
            'team'      => $this->team->getTeam()
        ];

        return view('admin/player/create', $data);
    }

    public function save()
    {
        $image = $this->request->getFile('image_player');
        // random nama gbr
        $name = $image->getRandomName();

        $data = [
            'id_team'           => $this->request->getPost('id_team'),
            'nama_player'       => $this->request->getPost('nm_player'),
            'ign'               => $this->request->getPost('ign'),
            'role'              => $this->request->getPost('role'),
            'img_player'        => $name
        ];

        $image->move(ROOTPATH . 'public/image/player', $name);
        $simpan = $this->player->insertPlayer($data);

        if ($simpan) {
            session()->setFlashdata('success', 'Data player berhasil ditambahkan');
            return redirect()->to(base_url('admin_player'));
        }
    }

    public function show($id)
    {
        $data = [
            'title'     => 'player / show',
            'player'    => $this->player->getplayer($id)
        ];

        return view('admin/player/show', $data);
    }

    public function edit($id)
    {
        $data = [
            'title'     => 'Player / edit',
            'team'      => $this->team->getTeam(),
            'player'    => $this->player->getPlayer($id)
        ];

        return view('admin/player/edit', $data);
    }

    public function update($id)
    {
        $image = $this->request->getFile('image_player');

        if ($image->getError()==4) {
            $namaSampul = $this->request->getPost('img_lama');
        } else {
            $namaSampul = $image->getRandomName();
            $image->move('image/player', $namaSampul);
            unlink('image/player/' . $this->request->getPost('img_lama'));
        }

        $data = [
            'id_team'           => $this->request->getPost('id_team'),
            'nama_player'       => $this->request->getPost('nm_player'),
            'ign'               => $this->request->getPost('ign'),
            'role'              => $this->request->getPost('role'),
            'img_player'        => $namaSampul
        ];

        $ubah = $this->player->updatePlayer($data, $id);
        if ($ubah) {
            session()->setFlashdata('info', 'Data player berhasil terupdate');
            return redirect()->to(base_url('admin_player'));
        }
    }

    public function delete($id)
    {
        $data = $this->player->getPlayer($id);

        unlink('image/player/' . $data['img_player']);

        $hapus = $this->player->deletePlayer($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Data player berhasil dihapus');
            return redirect()->to(base_url('admin_player'));
        }
    }
}
