<?php

namespace App\Controllers;

use App\Models\TeamModel;
use App\Config\Validation;

class Admin_Team extends BaseController
{
    protected $helpers = ['form', 'url'];

    public function __construct()
    {
        $this->team     = new TeamModel();
        $validation =  \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'title'     => 'esport team',
            'team'      => $this->team->getTeam()
        ];
        
        return view('admin/team/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'team / insert'
        ];

        return view('admin/team/create', $data);
    }

    public function save()
    {
        $image = $this->request->getFile('image_team');
        // random nama gbr
        $name = $image->getRandomName();

        $data = [
            'nama_team'         => $this->request->getPost('nm_team'),
            'jumlah_player'     => $this->request->getPost('jlh_player'),
            'about_team'        => $this->request->getPost('about_team'),
            'achievements'      => $this->request->getPost('achiev'),
            'img_team'          => $name
        ];

        $image->move(ROOTPATH . 'public/image/team', $name);
        $simpan = $this->team->insertTeam($data);

        if ($simpan) {
            session()->setFlashdata('success', 'Data team berhasil ditambahkan');
            return redirect()->to(base_url('admin_team'));
        }
    }

    public function show($id)
    {
        $data = [
            'title'     => 'team / show',
            'team'      => $this->team->getTeam($id)
        ];

        return view('admin/team/show', $data);
    }

    public function edit($id)
    {
        $data = [
            'title'     => 'team / edit',
            'team'      => $this->team->getTeam($id)
        ];

        return view('admin/team/edit', $data);
    }

    public function update($id)
    {
        $image = $this->request->getFile('image_team');

        if ($image->getError()==4) {
            $namaSampul = $this->request->getPost('img_lama');
        } else {
            $namaSampul = $image->getRandomName();
            $image->move('image/team', $namaSampul);
            unlink('image/team/' . $this->request->getPost('img_lama'));
        }
            $data = [
                'nama_team'         => $this->request->getPost('nm_team'),
                'jumlah_player'     => $this->request->getPost('jlh_player'),
                'about_team'        => $this->request->getPost('about_team'),
                'achievements'      => $this->request->getPost('achiev'),
                'img_team'          => $namaSampul
            ];

            $ubah = $this->team->updateTeam($data, $id);
            if ($ubah) {
                session()->setFlashdata('info', 'Data team berhasil terupdate');
                return redirect()->to(base_url('admin_team'));
            }
        
    }

    public function delete($id)
    {
        $data = $this->team->getTeam($id);

        unlink('image/team/' . $data['img_team']);

        $hapus = $this->team->deleteTeam($id);
        if ($hapus) {
            session()->setFlashdata('warning', 'Data team berhasil dihapus');
            return redirect()->to(base_url('admin_team'));
        }
    }
}
